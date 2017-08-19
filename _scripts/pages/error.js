/**
 * _scripts/pages/error.js
 * Sends information to analytics on error page
 */

/* global ga */

if (window.statusCode == null) {
    window.statusCode = 'Err: Unknown Error'
}

ga('send', 'event', window.statusCode, window.location.host)
