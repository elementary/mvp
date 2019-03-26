/**
 * _scripts/twitter-links.js
 * Populates twitter links with url data
 */

import jQuery from '~/lib/jquery'

jQuery.then(($) => {
    $(function () {
        $('.inline-tweet').each(function () {
            var tweetBody = $(this).text()
            var tweetSuffix = $(this).data('tweet-suffix')
            var tweet = tweetBody + tweetSuffix

            if (tweet.length >= 270) {
                var quote = tweetBody.slice(-1)
                tweet = tweetBody.substring(0, tweetBody.length - (tweet.length - 270)) + '…' + quote + tweetSuffix
            }

            $(this).prop('href', 'http://twitter.com/home/?status=' + encodeURIComponent(tweet))
        })
    })
})
