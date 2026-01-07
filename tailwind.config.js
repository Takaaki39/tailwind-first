/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,blade.php}"],
  theme: {
    // デフォルトテーマの上書き設定を記述
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    colors: {
      primary: "#1e40af",
      secondary: "#6b7280",
      accent: "#10b981",
      background: "#f3f4f6",
      text: "#1f2937",
      white: "#ffffff",
      black: "#000000",
    },
    extend: {
      // デフォルトテーマの拡張設定を記述
      colors: {
        "brand-blue": "#1DA1F2",
        "custom-blue": "#1e40af",
        "custom-green": {
          light: "#6EE7B7",
          DEFAULT: "#10B981",
          dark: "#047857",
        },
      },
      spacing: {
        128: "32rem",
      },
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans],
        mono: ["Fira Code", ...defaultTheme.fontFamily.mono],
      },
    },
  },
  plugins: [],
};
