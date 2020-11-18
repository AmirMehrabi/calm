module.exports = {
    purge: {
        content: [
            'source/**/*.blade.php',
            'source/**/*.md',
            'source/**/*.html',
        ]
    },
    theme: {
        extend: {
            fontFamily: {
                'sans': ['estedad']
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
}