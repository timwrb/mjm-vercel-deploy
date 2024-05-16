// https://nuxt.com/docs/api/configuration/nuxt-config

import { createResolver } from 'nuxt/kit';
import path from 'path';

export default defineNuxtConfig({
  devtools: { enabled: true },
  css: ['@/assets/css/base.css'],
  modules: ['@nuxtjs/tailwindcss', 'nuxt-primevue', "@nuxt/content", '@vueuse/nuxt',],
  primevue: {
    options: {
      unstyled: true
    },
    importPT: { from: path.resolve(__dirname, './presets/') }      //import and apply preset   
  },

  tailwindcss: {
    config: {
      plugins: [require("daisyui")],
      daisyui: {
        themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
      },
    
    content: [
      "presets/**/*.{js,vue,ts}"
    ],
    theme: {
      extend: {
        keyframes: {
          typing: {
            "0%": {
              width: "0%",
              visibility: "hidden"
            },
            "100%": {
              width: "100%"
            }
          },
          blink: {
            "50%": {
              borderColor: "transparent"
            },
            "100%": {
              borderColor: "white"
            }
          }
        },
        animation: {
          typing: "typing 3s steps(20) infinite alternate, blink .7s infinite"
        },
          backgroundImage: {
            "gradientBlue": 'linear-gradient(180deg, #6CCFF6 -9.3%, #1E1E1E 88.6%)',
            "gradientBrown": 'linear-gradient(0deg, #70798C -28.15%, #947B56 52.23%)',
            "gradientBlueLight": 'linear-gradient(270deg, #6CCFF6 0%, rgba(112, 121, 140, 0.00) 259.68%)',
          },
        colors: {

        darkGrey100: '#252323',
        darkGrey60: 'rgba(37, 35, 35, 0.6)', // 60% opacity
        darkGrey40: 'rgba(37, 35, 35, 0.4)', // 40% opacity
        customBlue: '#4A7D91',
        customBlueDarker: '#6ccff6',
        almostBlack: '#0f0f0f',
        almostWhite: '#F7F7F7',

        customBlue10: '#F0FAFE',
        customBlue20: '#E2F5FD',

        companyDarkGrey: '#181818',
        companyLightGrey: '#282727',
        companyBorderGrey: '#525151',

          'primary-50': 'rgb(var(--primary-50))',
          'primary-100': 'rgb(var(--primary-100))',
          'primary-200': 'rgb(var(--primary-200))',
          'primary-300': 'rgb(var(--primary-300))',
          'primary-400': 'rgb(var(--primary-400))',
          'primary-500': 'rgb(var(--primary-500))',
          'primary-600': 'rgb(var(--primary-600))',
          'primary-700': 'rgb(var(--primary-700))',
          'primary-800': 'rgb(var(--primary-800))',
          'primary-900': 'rgb(var(--primary-900))',
          'primary-950': 'rgb(var(--primary-950))',
          'surface-0': 'rgb(var(--surface-0))',
          'surface-50': 'rgb(var(--surface-50))',
          'surface-100': 'rgb(var(--surface-100))',
          'surface-200': 'rgb(var(--surface-200))',
          'surface-300': 'rgb(var(--surface-300))',
          'surface-400': 'rgb(var(--surface-400))',
          'surface-500': 'rgb(var(--surface-500))',
          'surface-600': 'rgb(var(--surface-600))',
          'surface-700': 'rgb(var(--surface-700))',
          'surface-800': 'rgb(var(--surface-800))',
          'surface-900': 'rgb(var(--surface-900))',
          'surface-950': 'rgb(var(--surface-950))'
        }
      }
    },
    },
  },
})