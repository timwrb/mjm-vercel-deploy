<template>
    <NuxtLoadingIndicator />
    <!--<textarea v-model="content"></textarea>
    <div v-html="markdownToHtml"></div> -->
    <div class="mt-12 flex justify-center mb-12">
        <SearchBar class="hidden md:flex"/>
        </div>
    
    <div class="flex justify-center items-center">

        <div class="w-full h-screen mb-12 mt-4 lg:w-9/12 xl:w-7/12"> <!-- Wrapper Div -->
    <div class="justify-normal sm:justify-center flex">
            <div class="flex">    
            <div class="border border-px border-darkGrey40 hidden sm:flex sm:rounded-[1.5rem] md:rounded-[2rem] mt-[0.5625rem] md:mt-[1.875rem] ml-[0.5rem] sm:ml-[2rem] h-[4rem] sm:h-[4rem] md:h-[6rem] w-[4rem] sm:w-[4rem] md:w-[6rem] bg-white"></div>
            <div class="flex flex-col ml-[1.75rem] mt-[0.7125rem] md:mt-[2.375rem]">
                <div class="">
            <h1 class="text-darkGrey60 font-medium text-[0.875rem] sm:text-[1rem] md:text-[1.125rem]">{{ company }}</h1>
            <h2 class="text-transparent bg-clip-text bg-gradientBlue font-bold text-[1rem] sm:text-[1.2rem] md:text-[1.625rem] truncate">{{ title }}</h2>
                </div>
        </div>

        </div>
    </div>
    <!-- DIVIDER -->
    <div class="h-[0.5px] w-full mt-4 md:mt-12 pl-8 pr-8">
        <div class="h-[0.5px] bg-darkGrey40"></div>
    </div>

    <div class="mt-4 mb-4 w-full flex place-content-between items-center pl-8 pr-8 md:pl-32 md:pr-32">
        <div class="h-[1.4rem] sm:h-[1.7rem] md:h-[2rem] rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
        <h3 class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.7rem] sm:text-[0.825rem] md:text-[1rem]">{{ city }}</h3>
        </div>

        <div class="h-[1.4rem] sm:h-[1.7rem] md:h-[2rem] rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
        <h3 class="ml-3 mr-3 bg-gradientBlue bg-clip-text text-transparent font-medium text-[0.7rem] sm:text-[0.825rem] md:text-[1rem]">{{ street }}</h3>
        </div>

        <div class="h-[1.4rem] sm:h-[1.7rem] md:h-[2rem] bg-gradientBlueLight rounded-full border-[0.08rem] border-darkGrey100 bg-white justify-center flex items-center">
        <h3 class="ml-3 mr-3 text-black font-medium text-[0.7rem] sm:text-[0.825rem] md:text-[1rem]">{{ salary }}</h3>
        </div>
    </div>

    <!-- DIVIDER -->
    <div class="h-[0.5px] w-full pl-8 pr-8">
        <div class="h-[0.5px] bg-darkGrey40"></div>
    </div>

    <div class="w-full p-8">
        <p class="text-[0.7rem] sm:text-[1rem]"> {{ content }}</p>
    </div>



        </div> <!-- Wrapper Div -->
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
/*
const markdownToHtml = (content) => {
  return marked(content);
};
*/

  fetchData();
</script>
