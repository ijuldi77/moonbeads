/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        inter: ["inter"],
        circular: ["Circular STD"],
        poppins: ["Poppins"],
        sans: ["OpenSans"]
      },
      colors: {
        // absurd
        ungu: "#5D50C6",
        pink: "#F85E9F",
        orange: "#FF5722",
        grey: "#222831",
        kadap: "#272343",
        jua: "#2d334a",
        a: "#bae8e8", 
        c: "#e3f6f5",
        // tema 2
        paleteungu: "#6e44ff",
        paletebirumuda: "#b892ff",
        paleteputihpink: "#ffc2e2",
        paletepink: "#ff90b3",
        paletepinkmerah: "#ef7a85",
        // tema 3
        background: "#faeee7",
        headline: "#33272a",
        paragraph: "#594a4e",
        button: "#ff8ba7",
        secondary: "#ffc6c7",
        tertiary: "#c3f0ca",
        main: "#fffffe",
        // dipake
        pake1: "#5D12D2",
        pake2: "#B931FC",
        pake3: "#FF6AC2",
        pake4: "#FFE5E5"

      },
      dropShadow: {
        "sm-shadow": [
          "0px 0px 0px 0px rgba(0, 0, 0, 0.07)",
          "0px 34px 75px 0px rgba(0, 0, 0, 0.07)",
          "0px 137px 137px 0px rgba(0, 0, 0, 0.06)",
          "0px 308px 185px 0px rgba(0, 0, 0, 0.04)",
          "0px 548px 219px 0px rgba(0, 0, 0, 0.01)",
          "0px 856px 240px 0px rgba(0, 0, 0, 0.00)",
        ],
        "lg-shadow" : [
          
        ]
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
]
};
