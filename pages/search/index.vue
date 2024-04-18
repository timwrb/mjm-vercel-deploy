
<script setup>

const route = useRoute();

const filterSections = [
    { id: 0, label: "DIVIDER" },
  { id: 1, label: "Minijob" },
  { id: 2, label: "Praktikum" },
    { id: 3, label: "DIVIDER" },
  { id: 4, label: "538€ Basis" },
  { id: 5, label: "Werkstudent" },
  { id: 6, label: "Tage Vertrag"},
    { id: 8, label: "DIVIDER" },
  { id: 8, label: "Gastronomie" },
  { id: 9, label: "Kasse" },
  { id: 10, label: "Soziales"},
  { id: 11, label: "Sonstiges"},
    { id: 12, label: "DIVIDER" },
  { id: 13, label: "Tagsüber" },
  { id: 14, label: "Wochenends" },
  { id: 15, label: "Nachtschicht"},
    { id: 16, label: "DIVIDER"},
  { id: 17, label: "Über Mindestlohn" },
    { id: 18, label: "DIVIDER" },
]


const visibleFilterSidebar = ref(false);
var FilterTags = ref([])
const valueSliderKM = ref(0);

const addTag = (tag) => {
  if (!FilterTags.value.includes(tag)) {
    FilterTags.value.push(tag);
    console.log(FilterTags)
  }
};

const removeTag = (tag) => {
  const index = FilterTags.value.indexOf(tag);
  if (index !== -1) {
    FilterTags.value.splice(index, 1);
    console.log(FilterTags);
  }
};


defineProps({
  label: String
})
</script>

<template>
  <NuxtLoadingIndicator />
    <div class=""> <!-- Wrapper -->


        <div class="mt-12 flex justify-center mb-12">
        <SearchBar />
        </div>

        <div class="flex flex-col justify-center"> <!-- Filter Section Above < :lg -->
                <div class="w-full lg:hidden">
                    
<!-- Sidebar Filter -->
                  <Sidebar v-model:visible="visibleFilterSidebar" >
      <template #header>
        <div class="flex items-center">
          <LOGOmjm />
        </div>
      </template>

      <div class="flex justify-center"> <!-- Save Button -->
        <div class="font-bold w-[12rem] h-[2rem] mb-4 bg-almostBlack flex items-center justify-center rounded-full" >
          <p class="font-semibold text-[1.25rem] text-almostWhite">Sichern</p>
        </div>
      </div>


      <div class="mt-2 mb-2 w-[4/6]"> <!-- Filter Tag Chip Show Area -->
        <div class="w-full flex-wrap"> 
          <FilterTag v-for="(tag, index) in FilterTags" :key="index" :label="tag" @remove="removeTag(tag)"/>
        </div>
      </div>
                
      <div class="ml-2 flex flex-col gap-2 mt-2"> <!-- FilterClickOptions -->
                        <!-- Render the JSON Object Informations -->
        
      <div v-for="(section, index) in filterSections" :key="index">
                        <!-- Überprüfen, ob das Label "DIVIDER" ist -->
      <div v-if="section.label === 'DIVIDER'" class="w-full h-[0.5px] bg-darkGrey40 mb-4 mt-4"></div>
                        <!-- Wenn nicht, rendern Sie das span Element -->
      <span v-else class="ml-2 font-medium text-[1rem] select-none hover:underline hover:cursor-pointer" @click="addTag(section.label)">{{ section.label }}</span>
                        </div>
      </div>
</Sidebar>
      <!-- Trigger button -->
    <div class=" flex lg:hidden pl-4 pr-4 w-full cursor-pointer " @click="visibleFilterSidebar = true" >

          <div class="gap-8 bg-almostWhite rounded-[1rem] w-full h-[2rem] md:h-[3rem] items-center flex mb-3 border border-darkGrey40 border-[0.5px]">
                  <!-- Count Bubble Why tf ever it does not become round)-->
                  <div v-if="FilterTags.length > 0" class="ml-1 md:ml-2 rounded-full md:rounded-[0.75rem] bg-customBlueDarker bg-opacity-40 border border-[1px] border-customBlue h-6 w-12 md:h-8 text-[0.8rem] md:text-[1rem] font-semibold md:font-medium text-darkGrey100 items-center flex justify-center">
                  {{ FilterTags.length }}
                  </div>

                  <div class="flex items-center place-content-between w-full h-full"> <!-- Wrapper for filter right align-->

                    <div class="h-1 w-1 bg-transparent FILLER IGNORE"></div> <!-- Filler for space-between -->

                        <div class="flex flex-row mr-4"> <!-- Filter icon + text -->
                    <h1 class="mr-1 font-semibold text-[1.125rem] md:h-[1.5rem] text-darkGrey100">Filtern</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                        </div>

                  </div>
          </div>
    </div>

</div>
<!-- / Sidebar Filter -->
            
        <div class="flex justify-center"> <!-- Search / Result Area -->
            <div class="flex flex-row h-[100rem] w-full xl:w-[70rem] border-t border-darkGrey60">  
                <div class="hidden lg:flex h-full w-full lg:w-3/12 flex-col pr-4"> <!-- Filter Area > :lg-->
                
                <div class="w-full h-fit">
                        <div class="flex items-center">
                    <div class="flex flex-row gap-4 justify-center w-full items-center mt-4"> <!-- Slider Kilometer Range -->
                        <InputText v-model.number="valueSliderKM" class="w-4/6 flex justify-center ml-2 h-8 w-20"/>
                        <Slider min=0 max=100 v-model="valueSliderKM" class="w-[4rem] border border-px" />
                    </div>
                        </div>
                    <div class="mt-2 mb-2 lg:ml-2">
                        <FilterTag v-for="(tag, index) in FilterTags" :key="index" :label="tag" @remove="removeTag(tag)"/>
                    </div>
                </div>
                    <div class="ml-2 flex flex-col gap-2 mt-2"> <!-- FilterClickOptions -->
                        <!-- Render the JSON Object Informations -->
                        <div v-for="(section, index) in filterSections" :key="index">
                        <!-- Überprüfen, ob das Label "DIVIDER" ist -->
                        <div v-if="section.label === 'DIVIDER'" class="w-full h-[0.5px] bg-darkGrey40 mb-4 mt-4"></div>
                        <!-- Wenn nicht, rendern Sie das span Element -->
                        <span v-else class="ml-2 font-medium text-[1rem] select-none hover:underline hover:cursor-pointer" @click="addTag(section.label)">
                        {{ section.label }}
                        </span>
                        </div>
                </div>

                </div>
                <div class="w-full lg:w-9/12 h-full pl-4 pr-4"> <!-- Result Area -->
                    <div class="w-full h-[3.5rem] bg-transparent flex justify-between items-center"> <!-- Top Text Bar Results: / Sort by: ___  -->
                        <div>   <!-- Left side -->
                            <span class="font-bold text-[1rem]">Ergebnisse: </span>
                            <span class="font-medium text-[1rem]">168</span>
                        </div> 
                        <div class="flex flex-row items-center gap-1"> <!-- Right side -->
                            <span class="hidden sm:flex font-semilight text-[0.875rem] mr-2">Sortieren nach: </span>

                            <select class="select select-sm select-bordered w-[8rem] h-[2rem]"> <!-- Selector -->
                            <option>Neuste</option>
                            <option>Meist gesehen</option>
                            <option>Älteste</option>
                            </select>

                        </div>
                    
                    </div>
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
                        />

                    </div>
                </div>
            </div>
        </div>
        </div>

    </div> <!-- Wrapper -->
</template>
