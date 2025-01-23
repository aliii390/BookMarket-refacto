/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./public/**/*.php",
    "./public/*.php"
  ],
  theme: {
    extend: { 
      fontFamily: {
        principale : ["Lexend", "sans-serif"]
      },
      backgroundImage: {
        'imageun' : "url('../img/home.jpg')",
      }
    },
  },
  plugins: [],
}