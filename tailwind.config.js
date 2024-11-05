import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modues/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        quicksand: ["Quicksand", "sans-serif"],
      },
      colors: {
        primary: "#14B8A6",
        "primary-light": "#99F6E4",
        "primary-dark": "#0F766E",
        light: "#A8A29E",
        dark: "#1C1917",
        "dark-2": "#44403C",
        "white-2": "#EEF2F5",
        "gray-bg": "#F3F4F6",
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
