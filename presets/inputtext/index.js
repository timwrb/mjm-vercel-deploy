export default {
    root: ({ props, context, parent }) => ({
        class: [
            // Font
            'leading-6',

            // Flex
            { 'flex-1 w-[1%]': parent.instance.$name == 'InputGroup' },

            // Spacing
            'm-0',
            {
                'py-3 px-4 text-lg sm:text-md': props.size == 'large',
                'py-1 px-2 sm:text-sm': props.size == 'small',
                'py-1.5 px-3 sm:text-sm': props.size == null
            },

            // Colors
            'text-surface-900 dark:text-black',
            'placeholder:text-surface-400 dark:placeholder:text-surface-500',
            'bg-surface-0 dark:bg-almostWhite',
            'shadow-sm',
            { 'ring-1 ring-inset ring-offset-0': parent.instance.$name !== 'InputGroup' },

            { 'ring-darkGrey100 dark:ring-gray-300': !props.invalid },

            // Invalid State
            { 'ring-red-500 dark:ring-red-400': props.invalid },

            // Shape
            { 'rounded-full': parent.instance.$name !== 'InputGroup' },
            { 'first:rounded-l-md rounded-none last:rounded-r-md': parent.instance.$name == 'InputGroup' },
            { 'border-0 border-y border-l last:border-r border-surface-300 dark:border-surface-600': parent.instance.$name == 'InputGroup' },
            { 'first:ml-0 -ml-px': parent.instance.$name == 'InputGroup' && !props.showButtons },
            'appearance-none',

            // Interactions
            {
                'outline-none focus:ring-customBlue dark:focus:ring-customBlue': !context.disabled,
                'opacity-60 select-none pointer-events-none cursor-default': context.disabled
            },

            // Filled State *for FloatLabel
            { filled: parent.instance?.$name == 'FloatLabel' && context.filled }
        ]
    })
};
