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
                whiteText: "#b6b6b6",
                white: "#fff",
                black: "#0d0d0d",
                blackText: "#9e9e9e",
                hoverBlack: "#3d3d3d",
                lightBlack: "#4d4d4d",
                lightBg: "#fdfdfd",
                whiteBg: "#f5f5f5",
                purple: "#163b50",
                yellow: "#facc15",
                lightYellow: "#fef3c7",
                lightBlue: "#e6cefe",
            },
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
            },
            keyframes: {
                slideUp: {
                    "0%": { transform: "translateY(100%)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
                slideDown: {
                    "0%": { transform: "translateY(-100%)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
                slideLeft: {
                    "0%": { transform: "translateX(-100%)", opacity: "0" },
                    "100%": { transform: "translateX(0)", opacity: "1" },
                },
                slideRight: {
                    "0%": { transform: "translateX(100%)", opacity: "0" },
                    "100%": { transform: "translateX(0)", opacity: "1" },
                },
            },
            animation: {
                slideUp: "slideUp 1s ease-in-out",
                slideDown: "slideDown 1s ease-in-out",
                slideLeft: "slideLeft 1s ease-in-out",
                slideRight: "slideRight 1s ease-in-out",
            },
        },
    },
    plugins: [],
};
