/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./resources/css/app.css"
    ],
    theme: {
        extend: {
            colors: {
                'gradasi1': '#733524',
                'gradasi2': '#07081D',
                'judul': '#14F0FA',
                'gradasi3': '#180E0E',
                'gradasi4': '#00ADB5',
                'gradasi5': '#EEEEEE',
                'gradasi6': '#FD8542',
                'gradasi7': '#250C05',
                'gradasi8': '#381D1D',
                'pelayanan': '#A37575',
                'gradasi9': '#678A51'
            },
            fontFamily: {
                'navbar': 'Poppins'
            },
            fontSize: {
                'navbar': '25px',
                'judull': '48px',
                'hold': '18px',
                'holdd': '30px'
            },
            screens: {
                'sm': {
                    'min': '640px',
                    'max': '767px'
                },
                // => @media (min-width: 640px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }

                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}