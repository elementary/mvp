/**
 * gulpfile.babel.js
 * Does things with things for other built things
 */

import gulp from 'gulp'
import cache from 'gulp-cached'
import changed from 'gulp-changed'
import { spawn } from 'child_process'

import imagemin from 'gulp-imagemin'
import svgo from 'gulp-svgo'

import postcss from 'gulp-postcss'
import cssnext from 'postcss-cssnext'

import path from 'path'
import through from 'through2'
import webpack from 'webpack'
import webpackConfig from './webpack.config.babel.js'
import fs from 'fs'

const browsers = [
    'last 4 version',
    'not ie <= 11'
]

/**
 * store
 * Copies store files to production folder
 *
 * @returns {Task} - a gulp task for store designs
 */
gulp.task('store', () => {
    const base = '_images/store/designs'
    const src = ['_images/store/designs/**/*']
    const dest = 'images/store/designs'

    return gulp.src(src, { base })
    .pipe(gulp.dest(dest))
})

/**
 * png
 * Optimizes png images
 *
 * @returns {Task} - a gulp task for png files
 */
gulp.task('png', () => {
    const base = '_images'
    const src = ['_images/**/*.png']
    const dest = 'images'

    return gulp.src(src, { base })
    .pipe(changed(dest))
    .pipe(cache('png'))
    .pipe(imagemin())
    .pipe(gulp.dest(dest))
})

/**
 * jpg
 * Optimizes jpg images
 *
 * @returns {Task} - a gulp task for jpg images
 */
gulp.task('jpg', () => {
    const base = '_images'
    const src = ['_images/**/*.jpg', '_images/**/*.jpeg']
    const dest = 'images'

    return gulp.src(src, { base })
    .pipe(changed(dest))
    .pipe(cache('jpg'))
    .pipe(imagemin())
    .pipe(gulp.dest(dest))
})

/**
 * gif
 * Optimizes gif images
 *
 * @returns {Task} - a gulp task for gif images
 */
gulp.task('gif', () => {
    const base = '_images'
    const src = ['_images/**/*.gif', '_images/**/*.gif']
    const dest = 'images'

    return gulp.src(src, { base })
    .pipe(changed(dest))
    .pipe(cache('gif'))
    .pipe(imagemin())
    .pipe(gulp.dest(dest))
})

/**
 * svg
 * Optimizes svg image outputs with svgo
 *
 * @returns {Task} - a gulp task for svg optimizes
 */
gulp.task('svg', () => {
    const base = '_images'
    const src = [
        '_images/**/*.svg',

        '!_images/icons/**/*.svg',
        '_images/icons/actions/48/document-export.svg',
        '_images/icons/actions/symbolic/appointment-symbolic.svg',
        '_images/icons/actions/symbolic/edit-clear-symbolic.svg',
        '_images/icons/actions/symbolic/edit-clear-all-symbolic.svg',
        '_images/icons/actions/symbolic/edit-find-symbolic.svg',
        '_images/icons/actions/symbolic/find-location-symbolic.svg',
        '_images/icons/actions/symbolic/view-filter-symbolic.svg',
        '_images/icons/actions/symbolic/view-grid-symbolic.svg',
        '_images/icons/actions/symbolic/window-maximize-symbolic.svg',
        '_images/icons/actions/symbolic/window-pop-out-symbolic.svg',
        '_images/icons/apps/symbolic/web-browser-symbolic.svg',
        '_images/icons/apps/128/accessories-text-editor.svg',
        '_images/icons/apps/128/application-default-icon.svg',
        '_images/icons/apps/128/system-software-install.svg',
        '_images/icons/apps/128/utilities-terminal.svg',
        '_images/icons/apps/32/accessories-camera.svg',
        '_images/icons/apps/32/archive-manager.svg',
        '_images/icons/apps/32/office-calendar.svg',
        '_images/icons/apps/32/onboard.svg',
        '_images/icons/apps/32/postscript-viewer.svg',
        '_images/icons/apps/32/preferences-desktop.svg',
        '_images/icons/apps/32/system-file-manager.svg',
        '_images/icons/apps/32/system-software-install.svg',
        '_images/icons/apps/48/internet-web-browser.svg',
        '_images/icons/apps/48/ubiquity.svg',
        '_images/icons/apps/48/utilities-terminal.svg',
        '_images/icons/apps/64/accessories-calculator.svg',
        '_images/icons/apps/64/accessories-camera.svg',
        '_images/icons/apps/64/accessories-screenshot.svg',
        '_images/thirdparty-icons/apps/64/io.elementary.code.svg',
        '_images/icons/apps/64/internet-mail.svg',
        '_images/icons/apps/64/internet-web-browser.svg',
        '_images/icons/apps/64/multimedia-audio-player.svg',
        '_images/icons/apps/64/multimedia-photo-manager.svg',
        '_images/icons/apps/64/multimedia-video-player.svg',
        '_images/icons/apps/64/office-calendar.svg',
        '_images/icons/apps/64/preferences-desktop.svg',
        '_images/icons/apps/64/system-file-manager.svg',
        '_images/icons/apps/64/system-software-install.svg',
        '_images/icons/apps/64/utilities-terminal.svg',
        '_images/icons/apps/64/web-browser.svg',
        '_images/icons/categories/32/preferences-desktop-display.svg',
        '_images/icons/categories/32/preferences-system-time.svg',
        '_images/icons/categories/48/preferences-system-network.svg',
        '_images/icons/categories/64/preferences-desktop-wallpaper.svg',
        '_images/icons/categories/64/preferences-system-parental-controls.svg',
        '_images/icons/devices/64/scanner.svg',
        '_images/icons/devices/symbolic/audio-input-microphone-symbolic.svg',
        '_images/icons/devices/symbolic/computer-symbolic.svg',
        '_images/icons/mimes/24/payment-card.svg',
        '_images/icons/mimes/24/payment-card-amex.svg',
        '_images/icons/mimes/24/payment-card-diners-club.svg',
        '_images/icons/mimes/24/payment-card-discover.svg',
        '_images/icons/mimes/24/payment-card-jcb.svg',
        '_images/icons/mimes/24/payment-card-mastercard.svg',
        '_images/icons/mimes/24/payment-card-unionpay.svg',
        '_images/icons/mimes/24/payment-card-visa.svg',
        '_images/icons/mimes/48/office-database.svg',
        '_images/icons/places/128/distributor-logo.svg',
        '_images/icons/places/64/distributor-logo.svg',
        '_images/icons/status/48/dialog-warning.svg',
        '_images/icons/status/symbolic/notification-disabled-symbolic.svg',
        '_images/thirdparty-icons/apps/32/multitasking-view.svg'
    ]
    const dest = 'images'

    return gulp.src(src, { base })
    .pipe(changed(dest))
    .pipe(cache('svg'))
    .pipe(svgo())
    .pipe(gulp.dest(dest))
})

/**
 * images
 * Optimizes all images
 *
 * @returns {Task} - a gulp task for all image optimizations
 */
gulp.task('images', gulp.parallel('store', 'png', 'jpg', 'svg', 'gif'))

/**
 * styles
 * Builds all stylesheets
 *
 * @returns {Task} - a gulp task for building stylesheets
 */
gulp.task('styles', () => {
    const base = '_styles'
    const src = ['_styles/**/*.css']
    const dest = 'styles/'

    // Make sure the styles folder exists and start writing the manfiest file
    try {
        fs.statSync('styles/')
    } catch (err) {
        fs.mkdirSync('styles/')
    }

    // let createManifest = fs.createReadStream('styles/manifest.json')
    let manifestFile = fs.createWriteStream('styles/manifest.json')
    // createManifest.pipe(manifestFile)
    manifestFile.write('{\n')
    manifestFile.cork()

    return gulp.src(src, { base })
        .pipe(changed(dest))
        .pipe(postcss([
            cssnext({ browsers })
        ]))
        .pipe(through.obj((file, enc, next) => {
            const {dir, name, ext} = path.parse(file.relative)
            // Simple cache busting! Adds the date time to the CSS to ensure unique versions of CSS files
            file.path = path.join(dest, dir, `${name}.${new Date().getTime().toString()}${ext}`)
            // Write chunk to manifest file
            manifestFile.write(`  "styles/${name}": "${file.path}",\n`)
            next(null, file)
        }, (done) => {
            // finishing out the manifest file, flushing through stream
            // If we leave the dangling comma PHP will get confused and can't parse the JSON so remove it here
            let lastChunk = manifestFile._writableState.lastBufferedRequest.chunk
            let fixedChunk = lastChunk.subarray(0, lastChunk.length - 2) // removes the newline AND comma
            manifestFile._writableState.lastBufferedRequest.chunk = fixedChunk
            manifestFile.uncork() // allow all the data we've added to the corked stream to be written
            manifestFile.end('\n}\n') // add back the extra newline we removed
            done()
        }))
        .pipe(gulp.dest(dest))
})

/**
 * scripts
 * Runs webpack to build JavaScript
 */

gulp.task('scripts', () => {
    return new Promise((resolve, reject) => {
        webpack(webpackConfig, (err, stats) => {
            if (err) {
                console.log(err)
                reject(err)
            }
            console.log(stats.toString({
                chunks: false,
                colors: true
            }))
            resolve()
        })
    })
})

/**
 * default
 * Builds all asset files
 *
 * @returns {Task} - a gulp task for building
 */
gulp.task('default', gulp.parallel('images', 'styles', 'scripts'))

/**
 * watch
 * Watches for asset changes and builds what it needs to
 *
 * @returns {Task} - a gulp task for building
 */
gulp.task('watch', gulp.series('default', function watch () {
    gulp.watch('_images/**/*.png', gulp.series('png'))
    gulp.watch('_images/**/*.jpg', gulp.series('jpg'))
    gulp.watch('_images/**/*.svg', gulp.series('svg'))

    gulp.watch('_styles/**/*.css', gulp.series('styles'))
    gulp.watch('_scripts/**/*.js', gulp.series('scripts'))

    spawn('php', ['-S', '0.0.0.0:8000', 'router.php'], {
        stdio: 'inherit'
    })
}))
