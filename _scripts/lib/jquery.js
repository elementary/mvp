/**
 * _scripts/lib/jquery.js
 * Loads jquery from cdn address
 *
 * @exports {Promise} default - a promise of the jQuery library
 */

import Promise from 'core-js/fn/promise'
import Script from 'scriptjs'

export default new Promise((resolve, reject) => {
    Script('https://cdn.jsdelivr.net/g/jquery@3.1.0', () => {
        console.log('jQuery loaded')
        return resolve(window.jQuery)
    })
})
