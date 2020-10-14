const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:
            {
              // Primary
              "purple-050": "#EAE2F8",
              "purple-100": "#CFBCF2",
              "purple-200": "#A081D9",
              "purple-300": "#8662C7",
              "purple-400": "#724BB7",
              "purple-500": "#653CAD",
              "purple-600": "#51279B",
              "purple-700": "#421987",
              "purple-800": "#34126F",
              "purple-900": "#240754",  
            
              "red-vivid-050": "#FFE3E3",
              "red-vivid-100": "#FFBDBD",
              "red-vivid-200": "#FF9B9B",
              "red-vivid-300": "#F86A6A",
              "red-vivid-400": "#EF4E4E",
              "red-vivid-500": "#E12D39",
              "red-vivid-600": "#CF1124",
              "red-vivid-700": "#AB091E",
              "red-vivid-800": "#8A041A",
              "red-vivid-900": "#610316",  
            
              // Neutrals
              "blue-grey-050": "#F0F4F8",
              "blue-grey-100": "#D9E2EC",
              "blue-grey-200": "#BCCCDC",
              "blue-grey-300": "#9FB3C8",
              "blue-grey-400": "#829AB1",
              "blue-grey-500": "#627D98",
              "blue-grey-600": "#486581",
              "blue-grey-700": "#334E68",
              "blue-grey-800": "#243B53",
              "blue-grey-900": "#102A43",  
            
              // Supporting
              "teal-vivid-050": "#F0FCF9",
              "teal-vivid-100": "#C6F7E9",
              "teal-vivid-200": "#8EEDD1",
              "teal-vivid-300": "#5FE3C0",
              "teal-vivid-400": "#2DCCA7",
              "teal-vivid-500": "#17B897",
              "teal-vivid-600": "#079A82",
              "teal-vivid-700": "#048271",
              "teal-vivid-800": "#016457",
              "teal-vivid-900": "#004440",  
            
              "yellow-vivid-050": "#FFFBEA",
              "yellow-vivid-100": "#FFF3C4",
              "yellow-vivid-200": "#FCE588",
              "yellow-vivid-300": "#FADB5F",
              "yellow-vivid-400": "#F7C948",
              "yellow-vivid-500": "#F0B429",
              "yellow-vivid-600": "#DE911D",
              "yellow-vivid-700": "#CB6E17",
              "yellow-vivid-800": "#B44D12",
              "yellow-vivid-900": "#8D2B0B",  
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
