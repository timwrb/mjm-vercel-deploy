

<template>
    <div class="justify-center flex">
      <div class="w-full h-[10rem] bg-transparent border border-px rounded-[1rem]">
        <div class="flex">
          <div class="border border-px border-darkGrey40 rounded-[1.5rem] mt-[1.875rem] ml-[2rem] border-sky-800 h-[4rem] w-[4rem] bg-white"></div>
          <div class="flex flex-col ml-[1.75rem] mt-[2.375rem]">
          <span class="text-darkGrey40 font-medium text-[0.825rem]">{{ company }}</span>
          <span class="text-darkGrey100 font-bold text-[1.2rem] truncate">{{ title }}</span>
          </div>
        </div>
        <div class="ml-[2rem] mt-[1.25rem]">
          <div class="flex flex-row gap-[0.75rem]">
      <!-- date -->
      <div class="h-[1.7rem]  rounded-full border-[0.1rem] border-darkGrey100 bg-white justify-center flex items-center">
  <!-- Calendar Icon -->
  <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 0C4.91421 0 5.25 0.335786 5.25 0.75V2.25H14.25V0.75C14.25 0.335786 14.5858 0 15 0C15.4142 0 15.75 0.335786 15.75 0.75V2.25H16.5C18.1569 2.25 19.5 3.59315 19.5 5.25V16.5C19.5 18.1569 18.1569 19.5 16.5 19.5H3C1.34315 19.5 0 18.1569 0 16.5V5.25C0 3.59315 1.34315 2.25 3 2.25H3.75V0.75C3.75 0.335786 4.08579 0 4.5 0ZM18 9C18 8.17157 17.3284 7.5 16.5 7.5H3C2.17157 7.5 1.5 8.17157 1.5 9V16.5C1.5 17.3284 2.17157 18 3 18H16.5C17.3284 18 18 17.3284 18 16.5V9Z" fill="#252323"/>
  </svg>
      <span class="ml-2 mr-4 font-light text-[0.825rem]">{{ date }}</span>
      </div>

      <!-- city -->
      <div class="h-[1.7rem] rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.825rem]">{{ city }}</span>
      </div>

      <!-- street -->
      <div class="hidden md:flex h-[1.7rem] rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.825rem]">{{ street }}</span>
      </div>

      <!-- salary -->
      <div class="h-[1.7rem] rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.825rem]">{{ salary }}</span>
      </div>

          </div>
        </div>
      </div>
    </div>
</template>

<script setup>

  defineProps({
  company: String,
  title: String,
  date: String,
  city: String,
  street: String,
  salary: String
})

</script>

