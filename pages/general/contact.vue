<template>
    <div class="">
        <!-- Left Gradient Light Bulb-->
    <div class="hidden lg:flex">
   <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem] -z-10"></div>
</div>


<div class="flex flex-col justify-center w-full xl:flex-row">

<div v-motion-fade-visible-once class="flex w-full xl:w-1/2 xl:h-screen">
<div class="flex justify-center mt-[2rem] sm:mt-[4rem] xl:mt-[18rem] h-full w-full">
    <div class="xl:text-left xl:w-2/3 w-full px-8">
      <h1 class="flex font-bold text-[1.5rem] sm:text-[2rem] text-darkGrey100">Kontaktiere uns</h1>
      <p class="mt-[0.5rem] text-darkGrey100 text-[0.9rem] sm:text-[1rem] font-medium">Du hast Fragen oder Anregungen? Schreib uns einfach eine Nachricht und wir melden uns bei dir.</p>
    </div>
</div>
</div>

<div v-motion-slide-visible-once-bottom class="flex w-screen justify-center xl:w-1/2 mb-[2rem] px-4 md:px-0">
<section class="w-full">
    <div class="flex justify-center mt-[4rem] w-full xl:mt-[8rem] md:h-full">

    <div class="bg-customBlue bg-opacity-[1%] backdrop-blur-[5rem] border border-gray-300 rounded-[1rem] w-full md:w-[42rem] md:h-[39rem]">
        <div class="w-full rounded-[1rem] p-4 flex-row">

            <div class="flex flex-row">
    <div 
      :class="{
        'bg-customBlue text-white border-transparent': activeButton === 'kontakt',
        'border-2 border-customBlue': activeButton !== 'kontakt'
      }"
      class="cursor-pointer rounded-tl-full rounded-bl-full h-[2.5rem] w-1/2 flex justify-center items-center"
      @click="changeTab('kontakt')"
    >
      <a class="font-medium text-[0.9rem] sm:text-[1rem]">Kontakt</a>
    </div>
    <div 
      :class="{
        'bg-customBlue text-white border-transparent': activeButton === 'feedback',
        'border-2 border-customBlue': activeButton !== 'feedback'
      }"
      class="cursor-pointer rounded-tr-full rounded-br-full h-[2.5rem] w-1/2 flex justify-center items-center"
      @click="changeTab('feedback')"
    >
      <a class="font-medium text-[0.9rem] sm:text-[1rem]">Feedback</a>
    </div>
  </div>

        </div> <!-- form body-->

<div class="p-4 sm:p-6 md:p-8"> <!-- BODY COMPONENTS -->

    <div v-if="activeButton === 'kontakt'"> <FormContact /> </div>
    <div v-else> <FormFeedback /> </div>

    </div>

    
</div>
</div>
</section>
</div>

</div>


    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { useRouter, useRoute } from 'vue-router';

const router = useRouter();
const route = useRoute();

const activeButton = ref(route.query.type || 'kontakt');

const changeTab = (tabName: string) => {
    activeButton.value = tabName;
    router.push({ query: { type: activeButton.value } });
};

// Ändern Sie den Wert von activeButton, wenn sich die Route ändert
watch(() => route.query.type, (newVal) => {
    if (typeof newVal === 'string') {
        activeButton.value = newVal;
    }
});
</script>