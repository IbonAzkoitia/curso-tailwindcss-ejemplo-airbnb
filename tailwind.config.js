/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.{html,php}"],
    theme: {
        extend: {
            colors: {
                'primary': {
                    DEFAULT: '#222222'
                },
                'airbnb': {
                    'gray-light': '#767676',
                    'gray-dark': '#484848',
                    'accent': '#FF5A5F',
                    'green': '#00A699',
                    'orange': '#FC642D'
                },
            },
        },
        fontFamily: {
            'text': ['Nunito','sans-serif'],
        }
    },
    plugins: [],
}

