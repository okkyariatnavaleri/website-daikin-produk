const autoprefixer = require('autoprefixer');
/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
  "./*.{html,js,php}",
  'node_modules/preline/dist/*.js',],
  darkMode : 'class', 
  theme: {
    extend: {
      colors:
      {
        primary : '#0ea5e9',
        dark : '#0f172a',
      },
      fontFamily:{
        inter : ['Inter'],
        dancing : ['Dancing Script'],
      },
      screens:{
        '2xl': '1320px',
      },
    },
  },
  plugins: [require('preline/plugin'),require("tailwindcss-animate"), '@tailwindcss/jit', autoprefixer],
}

