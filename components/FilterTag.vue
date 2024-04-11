<template>
    <div class="h-[2rem] inline-block rounded-full border-[0.08rem] border-darkGrey100 bg-almostWhite justify-center mr-2 mt-2 ">
      <div class="flex flex-row justify-center items-center">
        <span class="whitespace-nowrap ml-2 mt-1 font-medium text-[0.875rem] select-none">{{ label }}</span>
        <button @click="handleRemove" class="w-4 h-4 mt-1 rounded-full bg-customBlue text-[0.6rem] mr-2 ml-2 items-center justify-center flex cursor-pointer text-black font-bold">X</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      label: String,
      onRemove: Function // Prop für die Aktion, die beim Entfernen ausgeführt werden soll
    },
    methods: {
      handleRemove() {
        if (typeof this.onRemove === 'function') {
          this.onRemove(); // Ausführen der übergebenen Aktion, wenn sie eine Funktion ist
        }
      }
    }
  };
  </script>
  