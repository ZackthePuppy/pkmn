const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class', 
    daisyui: {
        themes: ["luxury"],
    },
    theme: {
        fontFamily: {
            chalk: ["chalk", "sans-serif"],
            sonysketch: ["sonysketch", "sans-serif"],
        },
        extend: {
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
}
