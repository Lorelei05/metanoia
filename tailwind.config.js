/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/welcome.blade.php",
    "./resources/views/app.blade.php",
    "./resources/views/login.blade.php",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}