module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        // './resources/**/*.vue',
    ],
    content: [],
    theme: {
        extend: {
            colors: {
                'nghia': '#B1101C',
                'nghiabtn': '#e24a26',
                'colorlaptop': '#030F35',
                'bgcolor': '#efefef',
                'primary': '#4a5568',
                'cltext': '#60a5fa',
                'bgfooter': '#CCC'
            },
        },
    },
    plugins: [],
}