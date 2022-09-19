module.exports = {
  purge: ["./vendor/badaso/landy-theme/src/resources/**/*.php"],
  content: [],

  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light", "cupcake"],
  },
  theme: {
    extend: {
      fontFamily: {
        karla: "'Karla' , serif",
        inter: "'Inter', sans-serif",
      },
      fontSize: {
        s: ["12px", "14px"],
        sm: ["14px", "20px"],
        base: ["16px", "24px"],
        lg: ["24px", "29px"],
        xl: ["32px", "38px"],
      },

      colors: {
        primary: "#06bbd3",
        gray: {
          800: "#1f2937",
        },
      },
    },
  },
  container: {
    center: false,
    screens: {
      DEFAULT: "80%",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      lx: "1200px",
    },
  },
  variants: {
    extend: {
      brightness: ["hover", "focus"],
      userSelect: ["responsive", "disabled"],
      visibility: ["responsive", "hover", "group-hover"],
    },
  },
};
