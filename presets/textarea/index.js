export default {
    root: ({ context, props }) => ({
        class: [
            // Font
            'font-sans leading-6',
            'sm:text-sm',

            // Spacing
            'm-0',
            'py-1.5 px-3',

            // Shape
            'rounded-[1rem]',
            'appearance-none',

            // Colors
            'text-surface-900 dark:text-darkGrey100',
            'placeholder:text-surface-400 dark:placeholder:text-gray-300',
            'bg-surface-0 dark:bg-almostWhite',
            'ring-1 ring-inset ring-offset-0',
            'shadow-sm',
            { ' ring-surface-300 dark:ring-gray-300': !props.invalid },

            // Invalid State
            { 'ring-red-500 dark:ring-red-400': props.invalid },

            // States
            {
                'outline-none focus:ring-primary-500 dark:focus:ring-customBlue': !context.disabled,
                'opacity-60 select-none pointer-events-none cursor-default': context.disabled
            },

            // Misc
            'appearance-none',
            'transition-colors duration-200'
        ]
    })
};
