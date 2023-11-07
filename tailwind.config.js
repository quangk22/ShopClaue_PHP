/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins'],
        libre: ['Libre'],
        LibreBaskerville: ['Libre Baskerville serif']
      },
    },
  },
  plugins: [],
}

