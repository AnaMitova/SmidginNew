/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
        Baskervville: ['Baskervville', 'serif'],
        badscript: ['"Bad Script"', 'cursive'],
        Playfair: ['"Playfair Display"', 'serif'],
        Centra: ['"Centra No2 TRIAL"', 'sans-serif'],
        Display: ['"Chronicle Display"', 'sans-serif'],
        DisplayItalic: ['"Chronicle Display Italic"', 'serif'],
        Papyrus: ['Papyrus', 'sans-serif'],
        Velvet: ['"Brush Script MT"', 'cursive'],
      },
    },
  },
  plugins: [],
};
