<template>
  <NuxtLoadingIndicator />
  <div class="">

  <!-- <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem] -z-10"></div> -->
    <div class="">
<HeroShot />
    </div>
    <!--
<div class="ml-[68.75rem] absolute justify-center h-[22rem] -z-10">
  <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem]"></div>
</div>
-->

<div class="flex justify-center mt-[4rem] lg:mt-[6.25rem]">
<SearchBar />
</div>

<div>
  <div class="flex-col lg:flex-row w-full flex lg:justify-center mt-[9.375rem] gap-[1rem] sm:gap-[1.5rem] lg:gap-[5.313rem] lg:items-center">
    <HeroShotMinijob />
    <JobCard
      :company="'Shell Tankstellen'"
      :title="'Aushilfe Shell Tankstelle 538€  Basis (m / w / d)'"
      :date="'11 März, 2024'"
      :city="'Würzburg'"
      :street="'Nürnberger Straße'"
      :salary="'13,50€'"
    />
  </div>



<div class="flex-col md:flex-row w-full flex justify-center mt-[9.375rem] gap-[5.313rem] items-center">
<JobCard
      :company="'Shell Tankstellen'"
      :title="'Aushilfe Shell Tankstelle 538€ Basis (m / w / d)'"
      :date="'14 März, 2024'"
      :city="'Würzburg'"
      :street="'Schweinfurter Straße'"
      :salary="'12,50€'"
    />
    <HeroShotIntern />
</div>

</div>



<div class="mt-[16rem]">

<!-- inspired by tailwindcss.com -->
<ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-12 mb-[6rem] items-start p-8 lg:mr-[10rem] lg:ml-[10rem]">
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-2 text-darkGrey100 font-bold text-[1.2rem]">
                538€ Vertrag ( Minijob )
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum voluptatum, omnis nesciunt labore pariatur tempore laudantium consectetur ipsa veritatis reiciendis in aliquid aperiam? Aliquam hic quo quisquam maxime explicabo?</p>
            </div><a
                class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                href="">Zum Artikel
                <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
  <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
</a>
        </div>
        <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
    </li>
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-1 text-darkGrey100 font-bold text-[1.2rem]">
                Werkstudent Vertrag
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam dolorum voluptates quisquam laudantium officiis exercitationem, aperiam sunt culpa eius doloremque adipisci provident quod eaque, sed quidem ipsam optio. Labore, sapiente!</p>
            </div><a
                class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                href="">Zum Artikel
                <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
  <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
</a>
        </div>
        <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
    </li>
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-1 text-darkGrey100 font-bold text-[1.2rem]">
                Steuerliches & Wissenswertes
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi exercitationem minima, et itaque incidunt nesciunt perferendis beatae amet sequi inventore accusamus rem magnam, voluptatibus nam debitis sed odio. Consectetur?</p>
            </div><a
                class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                href="">Zum Artikel
                <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
  <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
</a>
        </div>
        <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
    </li>
</ul>

</div> 



<div>


</div>
<ScrollTop class="hidden lg:flex bg-black"/>
</div>
</template>

<style> @import url("/assets/css/base.css"); </style>