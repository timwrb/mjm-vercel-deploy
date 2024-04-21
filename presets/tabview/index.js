export default {
    navContainer: ({ props }) => ({
        class: [
            // Position
            'relative',

            // Misc
            { 'overflow-hidden': props.scrollable }
        ]
    }),
    navContent: {
        class: [
            // Overflow and Scrolling
            'overflow-y-hidden overscroll-contain',
            'overscroll-auto',
            'scroll-smooth',
            '[&::-webkit-scrollbar]:hidden'
        ]
    },
    previousButton: {
        class: [
            // Flexbox and Alignment
            'flex items-center justify-center',

            // Position
            '!absolute',
            'top-0 left-0',
            'z-20',

            // Size and Shape
            'h-full w-12',
            'rounded-none',

            // Colors
            'bg-white dark:bg-white',
            'text-darkGrey100 dark:text-darkGrey100',
            'shadow-md'
        ]
    },
    nextButton: {
        class: [
            // Flexbox and Alignment
            'flex items-center justify-center',

            // Position
            '!absolute',
            'top-0 right-0',
            'z-20',

            // Size and Shape
            'h-full w-1/2',
            'rounded-none',

            // Colors
            'bg-surface-0 dark:bg-white',
            'text-primary-500 dark:text-primary-400',
            'shadow-md'
        ]
    },
    nav: {
        class: [
            // Flexbox
            'flex flex-1',

            // Spacing
            'list-none',
            'p-0 m-0',

            // Colors
            'bg-surface-0 dark:bg-white',
            'border-b border-surface-200 dark:border-gray-300',
            'text-darkGrey100 dark:text-darkGrey100'
        ]
    },
    tabpanel: {
        header: ({ props }) => ({
            class: [
                // Spacing
                'mr-0',

                // Misc
                {
                    'opacity-60 cursor-default user-select-none select-none pointer-events-none': props?.disabled
                }
            ]
        }),
        headerAction: ({ parent, context }) => ({
            class: [
                'relative',

                // Font
                'font-medium',
                'text-md',

                // Flexbox and Alignment
                'flex items-center',

                // Spacing
                'py-4 px-3',
                '-mb-px',

                // Shape
                'border-b-2',
                'rounded-t-md',

                // Colors and Conditions
                {
                    'border-surface-200 dark:border-gray-200': parent.state.d_activeIndex !== context.index,
                    'bg-surface-0 dark:bg-white': parent.state.d_activeIndex !== context.index,
                    'text-surface-700 dark:text-darkGrey100': parent.state.d_activeIndex !== context.index,

                    'bg-surface-0 dark:bg-white': parent.state.d_activeIndex === context.index,
                    'border-primary-500 dark:border-customBlue': parent.state.d_activeIndex === context.index,
                    'text-primary-500 dark:text-customBlue': parent.state.d_activeIndex === context.index
                },

                // States
                'focus-visible:outline-none focus-visible:outline-offset-0 focus-visible:ring-2 focus-visible:ring-inset',
                'focus-visible:ring-customBlue dark:focus-visible:ring-customBlue',
                {
                    'hover:bg-surface-0 dark:hover:bg-almostWhite': parent.state.d_activeIndex !== context.index,
                    'hover:border-surface-400 dark:hover:border-gray-300': parent.state.d_activeIndex !== context.index,
                    'hover:text-darkGrey100 dark:hover:text-darkGrey100': parent.state.d_activeIndex !== context.index
                },

                // Transitions
                'transition-all duration-200',

                // Misc
                'cursor-pointer select-none text-decoration-none',
                'overflow-hidden',
                'user-select-none',
                'whitespace-nowrap'
            ]
        }),
        headerTitle: {
            class: [
                // Text
                'leading-none',
                'whitespace-nowrap'
            ]
        },
        content: {
            class: [
                // Spacing
                'p-6',

                // Shape
                'rounded-b-md',

                // Colors
                'bg-surface-0 dark:bg-white',
                'text-surface-700 dark:text-darkGrey100',
                'border-0'
            ]
        }
    }
};
