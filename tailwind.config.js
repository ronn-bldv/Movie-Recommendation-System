/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary-bg': '#0f172a',
                'secondary-bg': '#1e293b',
                'card-bg': '#334155',
                'accent': '#10b981',
                'accent-hover': '#059669',
                'text-primary': '#f8fafc',
                'text-secondary': '#cbd5e1',
                'text-muted': '#64748b',
                'border-color': '#475569',
            },
            fontFamily: {
                'oswald': ['Oswald', 'sans-serif']
            }
        },
    },
    plugins: [],
};
