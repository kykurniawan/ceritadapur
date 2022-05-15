module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            flex: {
                "1-0-auto": "1 0 auto"
            },
            fontFamily: {
                'nunito': ['Nunito', 'sans-serif'],
                'roboto': ['Roboto', 'sans-serif'],
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
}
