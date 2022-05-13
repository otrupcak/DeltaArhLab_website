const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Helvetica Neu', ...defaultTheme.fontFamily.sans],
            },

            boxShadow:{
                'neu1': '7px 7px 18px #bebebe, -7px -7px 18px #ffffff;',
                'neu2': '2px 2px 6px #bebebe, -2px -2px 6px #ffffff;',
                'neu3': 'inset 7px 7px 18px #bebebe, inset -7px -7px 18px #ffffff;'
            }

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
