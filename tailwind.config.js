/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*{.blade.php,.js}",
      "./public/**/*.js",

  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('tailwindcss-debug-screens')
  ],
}
