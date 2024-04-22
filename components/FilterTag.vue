<template>
    <div class="h-[1.75rem] inline-block rounded-full border-[0.08rem] border-customBlue bg-white justify-center mr-2 mt-2 ">
      <div class="flex flex-row justify-center items-center">
        <span class="whitespace-nowrap ml-2 mr-2 mt-1 font-medium text-[0.75rem] select-none">{{ label }}</span>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      label: String,
      onRemove: Function
    },
    methods: {
    }
  };
  </script>
  