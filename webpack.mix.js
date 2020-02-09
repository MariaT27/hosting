const mix = require('laravel-mix')

const purgecss = require('@fullhuman/postcss-purgecss')({
  content: [
    './resources/assets/**/*.vue',
    './resources/views/**/*.blade.php',
  ],

  // Include any special characters you're using in this regular expression
  defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
})

mix.js('resources/js/app.js', 'public/assets')
  .sass('resources/sass/app.scss', 'public/assets')
  .postCss('resources/css/tailwind.css', 'public/assets', [
    require('autoprefixer'),
    require('tailwindcss'),
    ...process.env.NODE_ENV === 'production'
      ? [purgecss]
      : []
  ])

  .copy('resources/js/pwa/service-worker.js', 'public/assets')
  .copy('resources/js/pwa/service-worker-installer.js', 'public/assets')

  .copy('node_modules/intersection-observer/intersection-observer.js', 'public/assets/intersection-observer.js')
  .copy('node_modules/promise-polyfill/promise.min.js', 'public/assets/polyfills.js')

  .copy('node_modules/mousetrap/mousetrap.min.js', 'public/assets/mousetrap.js')

  .copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/jquery.js')
  .copy('node_modules/vac-gfe/vendor/jquery.pjax.js', 'public/assets/jquery.pjax.js')
  .copy('node_modules/jquery.scrollto/jquery.scrollTo.min.js', 'public/assets/jquery.scrollto.js')

  .copy('node_modules/autosize/dist/autosize.min.js', 'public/assets/autosize.js')

  .copy('node_modules/notie/dist/notie.min.js', 'public/assets/notie.js')

  .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/assets/bootstrap.js')
  .copy('node_modules/vac-gfe/js/empty.map', 'public/assets/bootstrap.min.js.map')

  .copy('node_modules/vue/dist/vue.min.js', 'public/assets/vue.js')
  .copy('node_modules/vue-i18n/dist/vue-i18n.min.js', 'public/assets/vue-i18n.js')
  .copy('node_modules/vue-router/dist/vue-router.min.js', 'public/assets/vue-router.js')
  .copy('node_modules/vuex/dist/vuex.min.js', 'public/assets/vuex.js')

  .copy('node_modules/axios/dist/axios.min.js', 'public/assets/axios.js')
  .copy('node_modules/vac-gfe/js/empty.map', 'public/assets/axios.min.map')

  .copy('node_modules/pusher-js/dist/web/pusher.min.js', 'public/assets/pusher.js')

  .copy('node_modules/popper.js/dist/umd/popper.min.js', 'public/assets/popper.js')
  .copy('node_modules/vac-gfe/js/empty.map', 'public/assets/popper.min.js.map')

  .sourceMaps(false, false)
  .version()
  .disableNotifications()

  .options({
    processCssUrls: false,
  })

  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.js$/,
          include: /node_modules\/vac-gfe/,
          use: [
            {
              loader: 'babel-loader',
              options: Config.babel(),
            },
          ],
        },
      ],
    },
    output: {
      chunkFilename: 'assets/chunk-[name].js?id=[chunkhash]',
    },
  })
