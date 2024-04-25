<template>
  <div class="hidden lg:flex">
        <div class="flex-col flex justify-start md:justify-center items-center">
      <span class="font-bold text-[3rem] bg-gradientBlue bg-clip-text text-transparent">Minijobs</span>
        <NuxtLink to="/search?searchTerm=&city=&tags=Minijob">
          <div class="hidden md:flex btn hover:bg-almostBlack hover:opacity-85 cursor-pointer select-none mt-[1.063rem] w-[13.438rem] h-[3.5rem] bg-almostBlack items-center justify-center flex font-medium text-[1.5rem] rounded-full text-white">Entdecken</div>
        </NuxtLink>
    </div>
  </div>

  <div class="flex lg:hidden ml-6 items-center">
    <div class="hidden sm:flex h-px w-[4rem] bg-gray-300 ml-4 mr-8 mt-1"></div>
    <span class=" font-bold text-[2rem] sm:text-[2.5rem] bg-gradientBlue bg-clip-text text-transparent">Minijobs</span>
    <div class="h-px flex-grow bg-gray-300 ml-4 mr-8 mt-1"></div>
  </div>
</template>