

<template>
  <!-- <NuxtLink :to="'/jobview/' + id"> -->
<!-- <a :href="'/jobview/' + id"> -->
    <div class="justify-center flex mb-2 cursor-pointer" @click="visible = true">
      <div class="w-full pr-2 backdrop-blur-[20rem] border border-px rounded-[1rem] transform md:hover:translate-x-1 transition-transform duration-150 ease-in-out md:hover:border-customBlue">
        <div class="flex">
          <div class="hidden sm:flex border border-px border-darkGrey40 rounded-[1.5rem] sm:mt-[1.875rem] ml-[2rem] h-[4rem] w-[4rem] bg-white"></div>
          <div class="flex flex-col ml-[1.75rem] mt-[1.0rem] sm:mt-[2.375rem]">
          <span class="hidden sm:flex text-darkGrey40 font-medium text-[0.7rem] sm:text-[0.825rem]">{{ company }}</span>

            <div class="flex flex-row items-center gap-2">
          <div class="flex sm:hidden border border-px border-darkGrey40 rounded-[0.5rem] h-[1.25rem] w-[1.25rem] bg-white"></div>
          <span class="flex sm:hidden text-darkGrey40 font-medium text-[0.7rem] sm:text-[0.825rem]">{{ company }}</span>
            </div>
            <div class="flex-row w-full mr-2">
          <h1 class=" w-full truncate text-darkGrey100 font-bold text-[1rem] sm:text-[1.2rem] pr-2 whitespace-normal mt-1 sm:mt-0">{{ title }}</h1>
          </div>
        </div>
        </div>
        <div class="ml-[1.5rem] sm:ml-[2rem] mt-[0.5rem] sm:mt-[1.25rem]">
          <div class="flex flex-row sm:gap-[0.75rem] mb-2 flex-wrap"> <!--gap-[0.6rem] -->
      <!-- date -->
      <div class="h-[1.1rem] sm:h-[1.7rem] mr-[0.6rem] sm:mr-[0] mb-[0.3rem] rounded-full border-[0.05rem] sm:border-[0.1rem] border-darkGrey100 bg-white justify-center flex items-center">
  <!-- Calendar Icon -->
  <svg class="ml-4 sm:flex hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 0C4.91421 0 5.25 0.335786 5.25 0.75V2.25H14.25V0.75C14.25 0.335786 14.5858 0 15 0C15.4142 0 15.75 0.335786 15.75 0.75V2.25H16.5C18.1569 2.25 19.5 3.59315 19.5 5.25V16.5C19.5 18.1569 18.1569 19.5 16.5 19.5H3C1.34315 19.5 0 18.1569 0 16.5V5.25C0 3.59315 1.34315 2.25 3 2.25H3.75V0.75C3.75 0.335786 4.08579 0 4.5 0ZM18 9C18 8.17157 17.3284 7.5 16.5 7.5H3C2.17157 7.5 1.5 8.17157 1.5 9V16.5C1.5 17.3284 2.17157 18 3 18H16.5C17.3284 18 18 17.3284 18 16.5V9Z" fill="#252323"/>
  </svg>
      <span class="ml-2 sm:ml-2 mr-2 sm:mr-4 font-medium sm:font-light text-[0.65rem] sm:text-[0.825rem]">{{ date }}</span>
      </div>

      <!-- city -->
      <div class="h-[1.1rem] sm:h-[1.7rem] mr-[0.6rem] sm:mr-[0] mb-[0.5rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.65rem] sm:text-[0.825rem]">{{ city }}</span>
      </div>

      <!-- street -->
      <div class="h-[1.1rem] sm:h-[1.7rem] mr-[0.6rem] sm:mr-[0] mb-[0.5rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.65rem] sm:text-[0.825rem]">{{ street }}</span>
      </div>

      <!-- salary -->
      <div class="h-[1.1rem] sm:h-[1.7rem] mr-[0.6rem] sm:mr-[0] mb-[0.5rem] rounded-full border-[0.05rem] sm:border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
      <span class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.65rem] sm:text-[0.825rem]">{{ salary }}</span>
      </div>

          </div>
        </div>
      </div>
    </div>


    <!-- MODAL -->
    <Dialog v-model:visible="visible" modal header="Stellenanzeige Vorschau" class="w-11/12 md:w-[60rem]" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
    <p class="sm:mb-5">
      
    </p>
          <!-- MOBILE COMPANY + AVATAR -->
          <div class="AVATAR flex flex-row items-center w-full"> 
            <div class="mb-4 mr-4 border border-px border-darkGrey40 flex sm:hidden rounded-[1rem] mt-[0.5625rem] h-[3rem] w-[3rem] bg-white"></div>
          
            <h1 class="text-darkGrey60 font-medium text-[1rem] md:text-[1.125rem] flex sm:hidden">{{ company }}</h1>
          </div>
          <!--  / MOBILE COMPANY + AVATAR -->

      <div class="flex flex-row items-center">
          <div class="AVATAR">
            <div class="mr-8 border border-px border-darkGrey40 hidden sm:flex sm:rounded-[1.5rem] md:rounded-[2rem] mt-[0.5625rem] md:mt-[1.875rem] ml-[0.5rem] sm:ml-[2rem] h-[4rem] sm:h-[4rem] md:h-[6rem] w-[4rem] sm:w-[4rem] md:w-[6rem] bg-white"></div>
          </div>
          <div class="gap-2 flex flex-col w-full ml-2 mr-2">
            <h1 class="text-darkGrey60 font-medium text-[1rem] md:text-[1.125rem] hidden sm:flex">{{ company }}</h1>
            <h1 class="text-customBlue font-bold text-[1.2rem] md:text-[1.625rem]">{{ title }}</h1>
          </div>
      </div>

    <div class="mt-6 place-content-between flex">
      <a :href="'/jobview/' + id" class="btn btn-sm md:btn-md btn-outline btn-link rounded-full hover:underline hover:bg-almostWhite hover:text-darkGrey100">
        <span class="hidden md:flex">Weiter zur Stellenanzeige</span>
        <span class="flex md:hidden">Zur Anzeige</span> <!-- arrow-up-right heroicons -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
        </svg>
      </a>

      <p class="btn btn-sm md:btn-md btn-outline btn-ghost hover:bg-almostWhite hover:text-darkGrey100 rounded-full">
        <p class="hidden sm:flex">Speichern</p> <!-- arrow-up-right heroicons -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>

      </p>

    </div>

    <Accordion :activeIndex="1" class="pl-2 pr-2">
    <AccordionTab header="Allgemeine Informationen">
    <div class="flex ml-2 flex-col gap-2">

        <div class="flex flex-row items-center cursor-pointer rounded-md hover:arrowIcon hover:underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
          </svg>
          <p class="font-semibold text-darkGrey100 ml-2 "> {{ company }}</p>
          <div class="hidden arrowIcon flex transition-transform duration-150 ease-in-out ml-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path fill-rule="evenodd" d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
            </svg>

        </div>
        </div>

        <div class="flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>

          <p class="font-semibold text-darkGrey100 ml-2"> {{ city }}, {{ street }} {{ housenumber }}</p>
        </div>

        <div class="flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
          </svg>

          <p class="font-semibold text-darkGrey100 ml-2"> {{ date }}</p>
        </div>

        <div class="flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
          </svg>

          <p class="font-semibold text-darkGrey100 ml-2"> {{ salary }}</p>
        </div>

    </div>

    <div class="w-full h-[0.5px] bg-darkGrey40 mt-4"></div>
    </AccordionTab>
</Accordion>
<!-- MARKDOWN CONTENT-->

    <div class="mb-5 mt-4">
      {{ content }}
    </div>


</Dialog>

 <!--</a> -->
   <!-- </NuxtLink> -->
</template>


<script setup>
import { ref } from 'vue';
// import marked from 'marked';


defineProps({
    id: String,
    company: String,
    title: String,
    date: String,
    city: String,
    street: String,
    salary: String,
    content: String
});

    const visible = ref(false);

    // const markdownToHtml = computed(() => {
    //   return marked(props.content);
    // });


</script>

<style scoped>
.arrowIcon {
  display: none;
}

.hover\:arrowIcon:hover .arrowIcon {
  display: flex;
  animation: ease-in-out;
  animation-duration: 150;
}

</style>