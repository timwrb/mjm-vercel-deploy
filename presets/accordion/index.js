export default {
    accordiontab: {
        header: ({ props }) => ({
            class: [
                // Sizing
                'pt-6 pb-0',
                'mt-6',

                // Shape
                'border-x-0 border-b-0',

                // Color
                'border border-surface-200 dark:border-darkGrey40',

                // State
                { 'select-none pointer-events-none cursor-default opacity-60': props?.disabled }
            ]
        }),
        headerAction: ({ context }) => ({
            class: [
                //Font
                'font-semibold',
                'leading-7',

                // Alignments
                'flex items-center justify-between flex-row-reverse',
                'relative p-2',

                // Shape
                'rounded-md',

                // Color
                'bg-almostWhite',
                'text-surface-900 dark:text-darkGrey100',

                // States
                'focus:outline-none focus:outline-offset-0 focus-visible:ring-2 focus-visible:ring-customBlue ring-inset dark:focus-visible:ring-customBlue', // Focus

                // Misc
                'cursor-pointer no-underline select-none'
            ]
        }),
        headerIcon: {
            class: 'inline-block ml-2'
        },
        headerTitle: {
            class: 'leading-7'
        },
        content: {
            class: [
                // Font
                'leading-7',

                // Spacing
                'pr-12 pt-2',

                // Color
                'text-surface-600 dark:text-darkGrey100',
            ]
        },
        transition: {
            enterFromClass: 'max-h-0',
            enterActiveClass: 'overflow-hidden transition-[max-height] duration-1000 ease-[cubic-bezier(0.42,0,0.58,1)]',
            enterToClass: 'max-h-[1000px]',
            leaveFromClass: 'max-h-[1000px]',
            leaveActiveClass: 'overflow-hidden transition-[max-height] duration-[450ms] ease-[cubic-bezier(0,1,0,1)]',
            leaveToClass: 'max-h-0'
        }
    }
};
