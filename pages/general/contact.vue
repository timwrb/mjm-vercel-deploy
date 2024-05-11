<template>
    <div class="">
        <!-- Left Gradient Light Bulb-->
    <div class="hidden lg:flex">
   <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem] -z-10"></div>
</div>


<div class="flex flex-col xl:flex-row">

<div class="flex w-1/2 h-screen">
<div class="flex justify-center mt-[18rem] h-full w-full">
    <div class="text-left w-2/3">
    <h1 class="flex font-bold text-[2rem] text-darkGrey100">Kontaktiere uns</h1>
    <p class="mt-[0.5rem] text-darkGrey100 font-medium">Du hast Fragen oder Anregungen? Schreib uns einfach eine Nachricht und wir melden uns bei dir.</p>

    </div>
</div>
</div>

<div class="flex w-1/2 h-screen">
<section>
    <div class="flex justify-center mt-[8rem] h-full">

    <div class=" bg-customBlue bg-opacity-[1%] backdrop-blur-[5rem] border border-gray-300 rounded-[1rem] w-[42rem] h-[39rem]">
        <div class="w-full rounded-[1rem] p-4 flex-row">

            <div class="flex flex-row ">
    <div 
      :class="{
        'bg-customBlue text-white border-transparent': activeButton === 'kontakt',
        'border-2 border-customBlue': activeButton !== 'kontakt'
      }"
      class="cursor-pointer rounded-tl-full rounded-bl-full h-[2.5rem] w-1/2 flex justify-center items-center"
      @click="changeTab('kontakt')"
    >
      <a class="font-medium">Kontakt</a>
    </div>
    <div 
      :class="{
        'bg-customBlue text-white border-transparent': activeButton === 'feedback',
        'border-2 border-customBlue': activeButton !== 'feedback'
      }"
      class="cursor-pointer rounded-tr-full rounded-br-full h-[2.5rem] w-1/2 flex justify-center items-center"
      @click="changeTab('feedback')"
    >
      <a class="font-medium">Feedback</a>
    </div>
  </div>

        </div> <!-- form body-->

<div class="p-8"> <!-- BODY COMPONENTS -->

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