
w-[46.375rem] h-[12.625rem] bg-almostWhite shadow-xl hover:-translate-y-1 transition-transform duration-150 ease-in-out
<template>
      <div class="justify-center flex">
        <div class="pr-4 w-full lg:w-[46.375rem] border border-gray-300 bg-transparent backdrop-blur-[10rem] boxShadowSquared rounded-[2rem] cursor-pointer lg:transform lg:hover:-translate-y-1 transition-transform duration-150 ease-in-out">
          <div class="flex">
            <div class="hidden sm:flex border border-px border-darkGrey40 rounded-[1.5rem] sm:mt-[1.875rem] ml-[2rem] h-[4rem] w-[4rem] bg-white"></div>
          <div class="flex flex-col ml-[1.75rem] mt-[1.0rem] sm:mt-[2.375rem]">
          <span class="hidden sm:flex text-darkGrey40 font-medium text-[0.9rem] sm:text-[1rem]">{{ company }}</span>

            <div class="flex flex-row items-center gap-2">
          <div class="flex sm:hidden border border-px border-darkGrey40 rounded-[0.5rem] h-[1.5rem] w-[1.5rem] bg-white"></div>
          <span class="flex sm:hidden text-darkGrey40 font-medium text-[0.9rem] sm:text-[1rem]">{{ company }}</span>
            </div>
            <span class="mt-2 text-darkGrey100 font-bold text-[1.1rem] sm:text-[1.2rem] lg:text-[1.375rem] whitespace-normal">{{ title }}</span>
            </div>
          </div>
          <div class="ml-[1.5rem] sm:ml-[2rem] mt-[1.25rem]">
            <div class="flex flex-row flex-wrap gap-x-[0.75rem] mb-2 md:mb-3">
        <!-- date -->
        <div class="h-[1.7rem] lg:h-[2.188rem] lg:w-[10rem] rounded-full border-[0.1rem] border-darkGrey100 bg-white justify-center flex items-center">
    <!-- Calendar Icon -->
    <svg class="hidden sm:flex ml-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 0C4.91421 0 5.25 0.335786 5.25 0.75V2.25H14.25V0.75C14.25 0.335786 14.5858 0 15 0C15.4142 0 15.75 0.335786 15.75 0.75V2.25H16.5C18.1569 2.25 19.5 3.59315 19.5 5.25V16.5C19.5 18.1569 18.1569 19.5 16.5 19.5H3C1.34315 19.5 0 18.1569 0 16.5V5.25C0 3.59315 1.34315 2.25 3 2.25H3.75V0.75C3.75 0.335786 4.08579 0 4.5 0ZM18 9C18 8.17157 17.3284 7.5 16.5 7.5H3C2.17157 7.5 1.5 8.17157 1.5 9V16.5C1.5 17.3284 2.17157 18 3 18H16.5C17.3284 18 18 17.3284 18 16.5V9Z" fill="#252323"/>
    </svg>
        <span class="ml-3 mr-4 text-customBlue font-medium text-[0.75rem] sm:text-[0.825rem] lg:text-[0.9rem]">{{ date }}</span>
        </div>

        <!-- city -->
        <div class="h-[1.7rem] lg:h-[2.188rem] sm:mr-[0] mb-[0.7rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 text-customBlue font-medium text-[0.75rem] sm:text-[0.825rem] lg:text-[0.9rem]">{{ city }}</span>
      </div>

        <!-- street -->
        <div class=" h-[1.7rem] lg:h-[2.188rem] sm:mr-[0] mb-[0.7rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 text-customBlue font-medium text-[0.75rem] sm:text-[0.825rem] lg:text-[0.9rem]">{{ street }}</span>
      </div>

        <!-- salary -->
        <div class="h-[1.7rem] lg:h-[2.188rem] sm:mr-[0] mb-[0.7rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 text-customBlue font-medium text-[0.75rem] sm:text-[0.825rem] lg:text-[0.9rem]">{{ salary }}</span>
      </div>
    </div>
            </div>
          </div>
        </div>
    
  </template>
  
  <script setup>
/*
 export default {
   props: {
      company: String,
      title: String,
      date: String,
      city: String,
      street: String,
      salary: String
    },
    */
    defineProps({
    company: String,
    title: String,
    date: String,
    city: String,
    street: String,
    salary: String
})
  
  </script>
  
  <style scoped>
  .boxShadowSquared {
  box-shadow: 0 0 4rem rgba(0, 0, 0, 0.1);
}
  </style>
