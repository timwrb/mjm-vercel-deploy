
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
                <div class="w-scree  h-[4rem] lg:hidden border border-px">
                    <span class="flex justify-center mt-4">Filter Options // Reveal Button</span>
                </div>
                
            
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
                    <div class="mt-2 mb-2">
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
