/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "1020px",
            xl: "1440px",
        },
        extend: {
            colors: {
                primary: "#ee8520",
                white: "#fff",
                black: "#0d0d0d",
                hoverBlack: "#3d3d3d",
                lightBlack: "#4d4d4d",
            },
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
            },
        },
    },
    plugins: [],
};
