<template>
  <NuxtLoadingIndicator />
  <div class="h-[151.25rem]">

  <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem] -z-10"></div>
    <div class="">
<HeroShot />
    </div>
<div class="ml-[68.75rem] absolute justify-center h-[22rem] -z-10">
  <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem]"></div>
</div>

<div class="flex justify-center mt-[4rem] lg:mt-[6.25rem]">
<SearchBar />
</div>



<div class="flex-col lg:flex-row w-full flex justify-center mt-[9.375rem] gap-[5.313rem] items-center">
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



<div class="flex-col lg:flex-row w-full flex justify-center mt-[9.375rem] gap-[5.313rem] items-center">
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



<div>

<div class="flex flex-row items-center mt-[13.125rem]">
  <div class="h-[0.031rem] flex-grow lg:w-1/2 xl:w-[6.25rem] bg-darkGrey40 mr-[2rem] ml-[2rem]"></div>
    <div class="flex flex-row gap-4 items-center">
      <span class="hidden lg:flex font-bold text-[3rem] text-darkGrey100 ">Suche</span>
      <span class="hidden lg:flex font-bold text-[3rem] text-darkGrey100 ">nach</span>
      <span class="flex flex-grow sm:flex font-bold text-[3rem] text-transparent bg-gradientBlue bg-clip-text">Branchen</span>
    </div>
    <div class="h-[0.5px] w-[2rem] lg:w-1/2 xl:w-[100px] bg-darkGrey40 mr-[2rem] ml-[2rem]"></div>
</div>

</div>
<ScrollTop class="hidden lg:flex bg-black"/>
</div>
</template>

<style> @import url("/assets/css/base.css"); </style>