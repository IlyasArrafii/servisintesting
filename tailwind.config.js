/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    prefix: "tw-",
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            padding: {
                10: "10px",
                50: "50px",
                150: "150px",
                468: "468px",
                86: "86px",
            },
            width: {
                560: "560px",
            },
            height: {
                150: "150px",
                64: "64px",
            },
            margin: {
                30: "30px",
            },
            colors: {
                orange: "#FF7F00",
            },
            backgroundColor: {
                orange: "#FF7F00",
            },
            screens: {
                mobile: { max: "639px" },
                tablet: { min: "768px", max: "1023px" },
            },
        },
    },
    plugins: [
        require("daisyui"),
        require("flowbite/plugin"),
        require("@tailwindcss/typography"),
        require("tw-elements/dist/plugin"),
    ],
};
