/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                104: "26rem", // Tambahkan ukuran baru 104 untuk 26 rem
            },
        },
        container: {
            center: true, // Memastikan container selalu di tengah
            padding: {
                DEFAULT: "1rem", // Padding default untuk semua layar
                sm: "2rem", // Padding khusus untuk layar kecil
                lg: "4rem", // Padding khusus untuk layar besar
                xl: "5rem", // Padding khusus untuk layar ekstra besar
            },
        },
        // colors:{
        //     "blue-1":"rgba(202, 244, 255, 1)",
        // }
    },
    plugins: [
        require("@tailwindcss/forms"), // Tambahkan plugin ini
    ],
};
