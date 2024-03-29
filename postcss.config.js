const purgecss = require('@fullhuman/postcss-purgecss');
const cssnano = require('cssnano');

module.exports = ctx => {
  return {
    plugins: [
      require('autoprefixer'),
      ...(ctx.options.env === 'production'
        ? [
            cssnano({
              preset: 'default'
            }),
            purgecss({
              content: ['./**/*.html'],
              whitelistPatterns: [/--is-open$/, /^header--is-hidden/, /^contact-form__label--/],
              keyframes: true,
              defaultExtractor: content => content.match(/[A-z0-9-:/]+/g)
            })
          ]
        : [])
    ]
  };
};
