module.exports = {
  mode: "jit",
  purge: ["./**/*.php", "./src/**/*.{js,jsx,ts,tsx,vue}"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      boxShadow: {
        se: "inset -1px 3px 3px rgba(179, 91, 11, 0.5)",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
