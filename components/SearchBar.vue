<script setup>


const props = defineProps({
  shouldRenderElement: {
    type: Boolean,
    default: false
  }
});


import { useRouter } from 'vue-router';

const router = useRouter();

let searchTerm = ref('');
let city = ref('');

const handleSearch = () => {
  if (!searchTerm.trim()) {
    // Handle search term validation (searchterm req. / city not)
    searchTermInvalid.value = true;
    return;
  }

  // Query params create
  const queryParams = { searchTerm };
  if (city.trim()) {
    queryParams.city = city;
  }
};

const searchTermInvalid = ref(false);


if (router.currentRoute.value.query.searchTerm) {
  searchTerm = router.currentRoute.value.query.searchTerm;
}
if (router.currentRoute.value.query.city) {
  city = router.currentRoute.value.query.city;
}

const generateSearchLink = () => {
  return {
    path: '/search',
    query: {
      searchTerm: searchTerm.value,
      city: city.value
    }
  };
};

const navigateToSearch = () => {
  const link = generateSearchLink();
  router.push(link);
};

</script>


<template>
  <!-- <div class="h-[1.5rem] font-medium text-[0.8rem] text-customBlue flex items-center justify-center bg-almostWhite bg-opacity-60 border border-gray-300 rounded-full">
    <span class="ml-2 mr-2">Bitte geb einen Suchbegriff ein</span>
  </div> -->
     <div class="flex flex-col">
      <div class="flex flex-col sm:flex-row lg:gap-[2.625rem] sm:gap-[1rem] gap-[0.5rem]">
  
    <label 
    v-if="shouldRenderElement = true"
    class="input input-bordered flex items-center gap-2 bg-white hover:bg-almostWhite focus:bg-white xl:w-[31.25rem] lg:w-[22.5rem] sm:w-[19rem] w-[16rem] sm:h-[3rem] h-[2.5rem] rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 1.5C4.52208 1.5 1.5 4.52208 1.5 8.25C1.5 11.9779 4.52208 15 8.25 15C10.1142 15 11.8006 14.2453 13.023 13.023C14.2453 11.8006 15 10.1142 15 8.25C15 4.52208 11.9779 1.5 8.25 1.5ZM0 8.25C0 3.69365 3.69365 0 8.25 0C12.8063 0 16.5 3.69365 16.5 8.25C16.5 10.2578 15.782 12.0991 14.5899 13.5293L19.2803 18.2197C19.5732 18.5126 19.5732 18.9874 19.2803 19.2803C18.9874 19.5732 18.5126 19.5732 18.2197 19.2803L13.5293 14.5899C12.0991 15.782 10.2578 16.5 8.25 16.5C3.69365 16.5 0 12.8063 0 8.25Z" fill="#252323" fill-opacity="0.6"/>
        </svg>
    <input
    type="text" 
    class="grow outline-none" 
    v-model="searchTerm" 
    placeholder="Suchbegriff (Optional)"
    @keyup.enter="navigateToSearch"
    />
    </label>


<label
class="input input-bordered flex items-center bg-white hover:bg-almostWhite focus:bg-white gap-2 xl:w-[21.25rem] lg:w-[15.625rem] sm:w-[19rem] w-[16rem] sm:h-[3rem] h-[2.5rem] rounded-full">
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
     <g opacity="0.4">
    <path d="M11.5 8.5C11.5 10.1569 10.1569 11.5 8.5 11.5C6.84315 11.5 5.5 10.1569 5.5 8.5C5.5 6.84315 6.84315 5.5 8.5 5.5C10.1569 5.5 11.5 6.84315 11.5 8.5Z" stroke="#252323" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M16 8.5C16 15.6421 8.5 19.75 8.5 19.75C8.5 19.75 1 15.6421 1 8.5C1 4.35786 4.35786 1 8.5 1C12.6421 1 16 4.35786 16 8.5Z" stroke="#252323" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    </svg>
  <input 
  v-model="city"
  type="text" 
  class="grow outline-none" 
  placeholder="Stadt, PLZ..."
  @keyup.enter="navigateToSearch"
  />
</label>



  <div class="hidden lg:flex">

    <NuxtLink
    :to="generateSearchLink()"
    class="btn btn-default bg-customBlue hover:bg-customBlue text-almostWhite font-medium text-[1.25rem] rounded-full w-[13.438rem] sm:h-[3rem] h-[2.5rem] justify-center cursor-pointer select-none flex items-center hover:opacity-80">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 1.5C4.52208 1.5 1.5 4.52208 1.5 8.25C1.5 11.9779 4.52208 15 8.25 15C10.1142 15 11.8006 14.2453 13.023 13.023C14.2453 11.8006 15 10.1142 15 8.25C15 4.52208 11.9779 1.5 8.25 1.5ZM0 8.25C0 3.69365 3.69365 0 8.25 0C12.8063 0 16.5 3.69365 16.5 8.25C16.5 10.2578 15.782 12.0991 14.5899 13.5293L19.2803 18.2197C19.5732 18.5126 19.5732 18.9874 19.2803 19.2803C18.9874 19.5732 18.5126 19.5732 18.2197 19.2803L13.5293 14.5899C12.0991 15.782 10.2578 16.5 8.25 16.5C3.69365 16.5 0 12.8063 0 8.25Z" fill="#ffffff"/>
    </svg>
    Stelle finden
    </NuxtLink>


  </div>
      </div>
        <div class="lg:hidden flex justify-center mt-[1rem] w-full">
    <NuxtLink :to="generateSearchLink()" class="btn btn-default bg-customBlue hover:bg-customBlue text-almostWhite font-medium text-[1.25rem] rounded-3xl w-[13.438rem] h-[3rem] justify-center cursor-pointer select-none flex items-center hover:opacity-80">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 1.5C4.52208 1.5 1.5 4.52208 1.5 8.25C1.5 11.9779 4.52208 15 8.25 15C10.1142 15 11.8006 14.2453 13.023 13.023C14.2453 11.8006 15 10.1142 15 8.25C15 4.52208 11.9779 1.5 8.25 1.5ZM0 8.25C0 3.69365 3.69365 0 8.25 0C12.8063 0 16.5 3.69365 16.5 8.25C16.5 10.2578 15.782 12.0991 14.5899 13.5293L19.2803 18.2197C19.5732 18.5126 19.5732 18.9874 19.2803 19.2803C18.9874 19.5732 18.5126 19.5732 18.2197 19.2803L13.5293 14.5899C12.0991 15.782 10.2578 16.5 8.25 16.5C3.69365 16.5 0 12.8063 0 8.25Z" fill="#ffffff"/>
    </svg>
      Stelle finden
    </NuxtLink>
        </div>
      </div>
</template>