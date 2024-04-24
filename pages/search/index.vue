
<script setup>
import { marked } from 'marked';
import { ref, defineProps, watch } from 'vue';
import { useRouter } from 'vue-router';


const router = useRouter();
const route = useRoute();

// Router query
const handleQueryPush = () => {
  // Get the current query parameters from the router
  const currentQuery = { ...route.query };

  // Merge the existing query parameters with the new tag query parameters
  const mergedQuery = {
    ...currentQuery,
    tags: selectedFilters.value.join(',') // Convert the array to a comma-separated string
  };

  // Update the router with the merged query parameters
  router.push({ query: mergedQuery });
};

onMounted(() => {
  console.log('Route query:', route.query);
  selectedFilters.value = route.query.tags ? decodeURIComponent(route.query.tags).split(',') : [];
})


const deliverQueryParams = () => {
}

const filterSections = ref([
    { id: 0, label: "Minijob" },
    { id: 1, label: "Praktikum" },
    { id: 2, label: "DIVIDER" },
    { id: 3, label: "538€ Basis" },
    { id: 4, label: "Werkstudent" },
    { id: 5, label: "Tage Vertrag"},
    { id: 6, label: "DIVIDER" },
    { id: 7, label: "Gastronomie" },
    { id: 8, label: "Kasse" },
    { id: 9, label: "Soziales"},
    { id: 10, label: "Sonstiges"},
    { id: 11, label: "DIVIDER" },
    { id: 12, label: "Tagsüber" },
    { id: 13, label: "Wochenends" },
    { id: 14, label: "Nachtschicht"},
    { id: 15, label: "DIVIDER"},
    { id: 16, label: "Über Mindestlohn" },
    { id: 17, label: "DIVIDER" },
  ]);



const visibleFilterSidebar = ref(false);

// v-model for the checkboxes
const selectedFilters = ref([]); // holds value of all checked checkboxes that represent the tags that get queried

// Watch for changes in selectedFilters array
watch(selectedFilters, (newValue, oldValue) => {
  console.log('Selected filters:', newValue);
});

// const valueSliderKM = ref(0);

defineProps({
  label: String
})
</script>

<template>
    <div class=""> <!-- Wrapper -->


        <div class="mt-6 md:mt-12 flex justify-center mb-6 md:mb-12">
        <SearchBar />
        </div>

        <div class="flex flex-col justify-center"> <!-- Filter Section Above < :lg -->
                <div class="w-full lg:hidden">
                    
<!-- Sidebar Filter -->
<Sidebar 
v-model:visible="visibleFilterSidebar" 
position="bottom"
>

  <template #header>
    <div class="flex items-center">
      <LOGOmjm />
    </div>
  </template>
  <div>
    <div class="flex justify-center"> <!-- Save Button -->
      <div class="btn hover:bg-almostBlack hover:opacity-80 font-bold w-[12rem] h-[2rem] mb-4 bg-almostBlack flex items-center justify-center rounded-full" @click="visibleFilterSidebar = false" >
        <p class="font-semibold text-[1.25rem] text-almostWhite" >Sichern</p>
      </div>
    </div>


    <div class="mt-2 mb-2 w-[4/6]"> <!-- Filter Tag Chip Show Area -->
      <div class="w-full flex-wrap"> 

      </div>
    </div>
              
    <div class="ml-2 flex flex-col gap-2 mt-2"> <!-- FilterClickOptions -->
      <!-- Render the JSON Object Informations -->
      <div 
      v-for="FilterOption of filterSections" 
      :key="FilterOption.id" 
      class="flex items-center">

        <div 
        v-if="FilterOption.label === 'DIVIDER'" 
        class="w-full h-[0.5px] bg-darkGrey40 mb-4 mt-4">
        </div>
        
        <div v-else class="flex items-center gap-2 text-darkGrey100" >
          <Checkbox 
          trueValue="selected" 
          falseValue="notselected" 
          v-model="selectedFilters" 
          :inputId="FilterOption.id" 
          :name="FilterOption.label" 
          :value="FilterOption.label"
          @change="handleQueryPush" 
          />

          <label 
          class="select-none hover:opacity-60" 
          :for="FilterOption.id">
          {{ FilterOption.label }}
          </label>

        </div>
      </div>
    </div>
  </div>

</Sidebar>
                </div>  
<!-- Trigger button -->
<div class="flex justify-center"> <!-- Search / Result Area -->
  <div class="flex flex-row h-[100rem] w-full xl:w-[70rem] border-t border-darkGrey60">  

    <!-- Spacer nach oben mt-10 --><div class="hidden lg:flex h-full mt-10 w-full lg:w-3/12 flex-col pr-4"> <!-- Filter Area > :lg-->
      
  <div class="w-full h-fit">
        <div class="flex items-center">
          <!-- <div class="flex flex-row gap-4 justify-center w-full items-center mt-4">  Slider Kilometer Range
              <InputText v-model.number="valueSliderKM" class="w-4/6 flex justify-center ml-2 h-8 w-20"/>
              <Slider min=0 max=100 v-model="valueSliderKM" class="w-[4rem] border border-px" />
          </div> --->
        </div>
        <div class="mt-2 mb-2 lg:ml-2">

        </div>
      </div>
      <div class="ml-2 flex flex-col gap-2 mt-2"> 

        <div 
        v-for="FilterOption of filterSections" 
        :key="FilterOption.id" 
        class="flex items-center">

        <div 
        v-if="FilterOption.label === 'DIVIDER'" 
        class="w-full h-[0.5px] bg-darkGrey40 mb-4 mt-4"></div>
        
        <div v-else class="flex items-center gap-2 text-darkGrey100" >
          <Checkbox 
          trueValue="selected" 
          falseValue="notselected" 
          v-model="selectedFilters" 
          :inputId="FilterOption.id" 
          :name="FilterOption.label" 
          :value="FilterOption.label"
          @change="handleQueryPush"
          />

          <label 
          class="select-none hover:opacity-60" 
          :for="FilterOption.id">
          {{ FilterOption.label }}
          </label>

        </div>
      </div>
    </div>
    </div>
    <div class="w-full lg:w-9/12 h-full pl-4 pr-4"> <!-- Result Area -->
      <div class="w-full h-[3.5rem] bg-transparent flex justify-between items-center"> <!-- Top Text Bar Results: / Sort by: ___  -->
        <!-- Filter Button --> 
        <div class="flex lg:hidden pr-4 w-full cursor-pointer " @click="visibleFilterSidebar = true" >

<div class="bg-transparent hover:bg-almostWhite rounded-lg w-[5rem] h-[2rem] items-center flex border border-darkGrey40 border-[0.5px]">
        <!-- Count Bubble Why tf ever it does not become round)-->
        <div v-if="selectedFilters.length > 0" class="ml-1 rounded-full bg-white border border-darkGrey40 h-6 w-12 text-[0.8rem] font-semibold md:font-medium text-darkGrey100 items-center flex justify-center">
        {{ selectedFilters.length }}
        </div>

        <div class="flex items-center place-content-between w-full h-full"> <!-- Wrapper for filter right align-->

          <div class="h-1 w-1 bg-transparent FILLER IGNORE"></div> <!-- Filler for space-between -->
            <p class="text-darkGrey100 font-semilight text-[0.9rem]"></p>
              <div class="flex flex-row mr-2"> <!-- Filter icon + text -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M8.00005 1C10.1426 1 12.243 1.18048 14.2868 1.52707C14.7013 1.59735 15 1.95943 15 2.37979V3.19179C15 3.65592 14.8156 4.10104 14.4874 4.42923L10.2626 8.6541C9.93437 8.98229 9.75 9.42741 9.75 9.89154V12.1684C9.75 12.8313 9.3755 13.4373 8.78262 13.7337L6.25 15V9.89154C6.25 9.42741 6.06563 8.98229 5.73744 8.6541L1.51256 4.42923C1.18437 4.10104 1 3.65592 1 3.19179V2.37981C1 1.95945 1.29873 1.59737 1.71317 1.52709C3.75706 1.18049 5.85748 1 8.00005 1Z" stroke="#0F172A" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

              </div>
        </div> 
</div>
<!-- / Filter Button--> </div>

                        <div class="mb-2 overflow-y-scroll w-full ml-2 mr-2 hidden lg:flex items-center h-full">
                          <FilterTag 
                          v-for="(tag, index) in selectedFilters" 
                          :key="index" 
                          :label="tag"/>
                        </div>

                        <div class="flex flex-row items-center gap-1"> <!-- Right side -->
                            <select class="hover:bg-white bg-transparent select select-sm select-bordered md:w-[10rem] w-[8rem] h-[2rem]"> <!-- Selector -->
                            <option>Neuste</option>
                            <option>Meist gesehen</option>
                            <option>Älteste</option>
                            </select>
                        </div>

                    </div> <!--  / Top Text Bar Results: / Sort by: ___  -->

                    <div class="gap-4"> <!-- Results Map List -->

                        <JobCardRP
                        :company="'Shell Tankstellen'"
                        :title="'Aushilfe Shell Tankstelle 538€ Basis (m / w / d)'"
                        :date="'14 März, 2024'"
                        :city="'Würzburg'"
                        :street="'Schweinfurter Straße'"
                        :salary="'12,50€'"
                        :id="'1'"
                        :content="'Das hier ist der Content. Hier ist eine Aufzählung: - das ist der erste Punkt - der 2. Punkt ist hier - und das ist der letzte Das ist alles Dummy Data hier, aber sollte reichen um es zu veranschaulichen'"
                        />

                        <JobCardRP
                        :company="'OMV Tankstellen'"
                        :title="'Aushilfe OMV Tankstelle 538€ Basis (m / w / d)'"
                        :date="'14 März, 2024'"
                        :city="'Würzburg'"
                        :street="'Nürnberger Straße'"
                        :salary="'13,50€'"
                        :id="'2'"
                        :content="'Das hier ist der Content. Hier ist eine Aufzählung: - das ist der erste Punkt - der 2. Punkt ist hier - und das ist der letzte Das ist alles Dummy Data hier, aber sollte reichen um es zu veranschaulichen'"

                        />

                        <JobCardRP
                        :company="'ESSO Tankstellen'"
                        :title="'Aushilfe ESSO Tankstelle 538€ Basis (m / w / d)'"
                        :date="'9 März, 2024'"
                        :city="'Würzburg'"
                        :street="'Sanderauer Straße'"
                        :salary="'14,50€'"
                        :id="'3'"
                        :content="'Das hier ist der Content. Hier ist eine Aufzählung: - das ist der erste Punkt - der 2. Punkt ist hier - und das ist der letzte Das ist alles Dummy Data hier, aber sollte reichen um es zu veranschaulichen'"

                        />

                    </div>
                </div>
            </div>
        </div>
        </div>

    </div> <!-- Wrapper -->
</template>
