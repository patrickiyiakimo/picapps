/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // Primary display font for BIG headlines (9xl, 10xl, etc.)
        'display': ['Clash Display', 'Bricolage Grotesque', 'sans-serif'],
        
        // Secondary display for subheadings and professional text
        'heading': ['Space Grotesk', 'sans-serif'],
        
        // Body text - clean and readable
        'sans': ['Inter', 'system-ui', 'sans-serif'],
        
        'mono': ['ui-monospace', 'monospace'],
      },
      colors: {
        'navy': {
          50: '#eef2ff',
          100: '#e0e7ff',
          200: '#c7d2fe',
          300: '#a5b4fc',
          400: '#818cf8',
          500: '#6366f1',
          600: '#4f46e5',
          700: '#1e1b4b',
          800: '#172554',
          900: '#0f172a',
        },
        'blue': {
          600: '#2563eb',
          700: '#1d4ed8',
        }
      }
    }
  },
  plugins: [],
}