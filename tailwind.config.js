/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens:{
      sm: '640px',
      md: '768px',
      lg: '960px',
      xl: '1330px', 
    },
    extend: {},
  },
  plugins: [],
}

