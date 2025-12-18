import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.{blade.php,js,vue}',
    ],
    theme: {
        extend: {},
    },
    plugins: [aspectRatio],
}