/**
 * scripts/pages/store/cart.js
 * Does update logic for cart quantities and some basic address validation
 */

import analytics from '~/lib/analytics'
import jQuery from '~/lib/jquery'

Promise.all([jQuery, analytics]).then(([$, ga]) => {
    ga('send', 'event', 'Store', 'Cart Visit')

    $(document).ready(function () {
        var baseUrl = $('base').attr('href')
        var country = {}

        if (typeof window.country !== 'undefined') {
            country = window.country
        } else if (Object.keys(country).length === 0) {
            console.error('Unable to find country data')

            $.getJSON(baseUrl + 'data/country.json', function (data) {
                console.log('Was able to fetch country data manually')

                country = data
            })
        }

        /**
         * updateTotal
         * Adds prices for everything in cart and puts sub total in footer
         */
        var updateTotal = function () {
            var $products = $('.list--product .list__item')

            if ($products.length <= 0) location.reload()

            var total = 0

            $products.each(function (i, p) {
                var n = $(p).attr('id').replace('product-', '')
                var $i = $('.list__item#product-' + n)

                var price = $('input[name$="price"]', $i).val()
                var quantity = $('input[name$="quantity"]', $i).val()

                var t = (price * quantity)
                $('.subtotal b', $i).text('$' + parseFloat(t).toFixed(2))

                total += t
            })

            $('.list--product .list__footer h4').text('Sub-Total: $' + parseFloat(total).toFixed(2))
        }

        /**
         * POSTs to inventory endpoint to update cart quantities without page refresh
         */
        $('.list--product .list__item input[name$="quantity"]').on('change', function (e) {
            try {
                if (!$(this)[0].checkValidity || !$(this)[0].checkValidity()) return
            } catch (err) {
                console.error('You have a really old browser...')
            }

            var $input = $(this)
            var $item = $input.closest('.list__item')

            var id = $item.attr('id').replace('product-', '').split('-')
            var productId = id[0]
            var variantId = id[1]

            var quantity = $input.val()
            var $error = $item.find('.alert--error')

            $.get(baseUrl + 'store/inventory', {
                id: productId,
                variant: variantId,
                quantity: quantity,
                math: 'set',
                simple: true
            })
            .done(function (data) {
                if (data === 'OK') {
                    $error.text('')

                    if (quantity <= 0) $item.remove()

                    updateTotal()
                } else {
                    console.error('Unable to update cart quantity')
                    console.error(data)
                    $error.text('Unable to update quantity')
                }
            })
        })

        /**
         * updateAddressForm
         * Updates state field based on current selected country
         *
         * @return {void}
         */
        const updateAddressForm = (notify = true) => {
            const form = $('form[action$="checkout"]')
            const value = $('select[name="country"]', form).val()
            const $state = $('select[name="state"]', form)
            const $statelabel = $('label[for="state"]', form)

            if (notify) ga('send', 'event', 'Cart', 'Country Change', value)

            if (country[value] != null && typeof country[value]['states'] === 'object') {
                $state.empty()
                var options = []

                Object.keys(country[value]['states']).forEach(function (code) {
                    var state = country[value]['states'][code]
                    options.push('<option value="' + code + '">' + state + '</option>')
                })

                $state.append(options.join(''))
                $state.show().attr('required', true)
                $statelabel.show().attr('required', true)
            } else {
                $state.hide().attr('required', false)
                $statelabel.hide().attr('required', false)
            }
        }

        // Hide the inputs we don't need depending on the country
        $('form[action$="checkout"] select[name="country"]').on('change', () => updateAddressForm(true))
        updateAddressForm(false)
    })
})
