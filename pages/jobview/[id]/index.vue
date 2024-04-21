<template>
    <div class="justify-center flex mb-[6rem]">
        <div class="w-full md:w-11/12 lg:w-4/6 mt-[1rem] md:mt-[6rem] p-4 lg:p-0">
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

      <a class="btn btn-sm md:btn-md btn-outline btn-ghost hover:bg-almostWhite hover:text-darkGrey100">
        <span>Speichern</span> <!-- arrow-up-right heroicons -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>

      </a>

    </div>

    <div class="flex ml-2 flex-col gap-2 mt-8">

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


    <p class="mb-5 mt-4">
      {{ content }}
    </p>
</div>
</div>
</template>

<script setup>
import { useRoute } from 'vue-router';

// import marked from 'marked';

const fetchData = async () => {

  const { id } = useRoute().params;

  const response = await fetch(`http://127.0.0.1:8000/dummydata/${id}`);
  const data = await response.json();

  return data;
};

const { title, date, city, street, salary, company, content } = await fetchData();

// const markdownToHtml = (content) => {
//   return marked(content);
// };

</script>

