/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        container: {
            center: true, // Memastikan container selalu di tengah
            padding: {
                DEFAULT: "1rem", // Padding default untuk semua layar
                sm: "2rem", // Padding khusus untuk layar kecil
                lg: "4rem", // Padding khusus untuk layar besar
                xl: "5rem", // Padding khusus untuk layar ekstra besar
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"), // Tambahkan plugin ini
    ],
};
