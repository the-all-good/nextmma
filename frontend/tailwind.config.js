/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,txs}",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#0e1519',
        'secondary': '#162025',
        'ts': '#3d4851',
        'spacing': '#2d363b',
        'selected': '#ebf737',
      }
    },
    
  },
  plugins: [],
}

