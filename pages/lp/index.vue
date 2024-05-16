<template>
    <NuxtLoadingIndicator />
    <div class="">
  <!-- Left Gradient Light Bulb-->
      <div class="hidden lg:flex">
     <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem] -z-10"></div>
  </div>
  <!-- Right Gradient Light Bulb -->
  <div class="hidden xl:flex">
     <div class="ml-[68.75rem] absolute justify-center h-[22rem] -z-10">
    <div class="absolute w-[7.813rem] h-[21.875rem] bg-gradientBlueLight blur-[9.375rem]"></div>
  </div>
  
  </div>
      <div class="h-full w-full flex justify-center">
  <LPHeroSection />
      </div>
      
  
  
  <!-- 
  <div class="flex justify-center mt-[4rem] lg:mt-[6.25rem]">
  <SearchBarNewJoined />
  </div> -->
  
  <div>
    <div class="flex-col lg:flex-row w-full flex lg:justify-center mt-[9.375rem] gap-[1rem] sm:gap-[1.5rem] lg:gap-[5.313rem] lg:items-center">
      <!-- Minijob Shot Desktop -->
      <div class="hidden lg:flex">
          <div class="flex-col flex justify-start md:justify-center items-center">
        <span class="font-bold text-[3rem] text-customBlue">Minijobs</span>
          <NuxtLink to="/search?searchTerm=&city=&tags=Minijob">
            <div class="hidden md:flex btn hover:border-customBlue hover:border-2 hover:opacity-85 hover:text-darkGrey100 hover:bg-transparent cursor-pointer shadow-none select-none mt-[1.063rem] w-[13.438rem] h-[3.5rem] bg-transparent items-center justify-center flex font-medium text-[1.4rem] rounded-lg text-darkGrey100 border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" /></svg>
                Entdecken</div>
          </NuxtLink>
      </div>
    </div>
    <!-- Minijob Shot Mobile -->
    <div class="flex lg:hidden ml-6 items-center">
      <div class="hidden sm:flex h-px w-[4rem] bg-gray-300 ml-4 mr-8 mt-1"></div>
      <span class=" font-bold text-[2rem] sm:text-[2.5rem] bg-gradientBlue bg-clip-text text-transparent">Minijobs</span>
      <div class="h-px flex-grow bg-gray-300 ml-4 mr-8 mt-1"></div>
    </div>
  
      <JobCard
        :company="'Shell Tankstellen'"
        :title="'Aushilfe Shell Tankstelle 538€  Basis (m / w / d)'"
        :date="'11 März, 2024'"
        :city="'Würzburg'"
        :street="'Nürnberger Straße'"
        :salary="'13,50€'"
      />
    </div>
  
  
  
    <div class="flex-col lg:flex-row w-full flex lg:justify-center mt-[5rem] md:mt-[9.375rem] gap-[1rem] sm:gap-[1.5rem] lg:gap-[5.313rem] lg:items-center">
  <!-- Internshot Mobile -->
          <div class="flex lg:hidden mr-6 items-center">
              <div class="h-px flex-grow bg-gray-300 ml-4 mr-8 mt-1"></div>
                  <span class=" font-bold text-[2rem] sm:text-[2.5rem] bg-gradientBrown bg-clip-text text-transparent">Praktikum</span>
              <div class="hidden sm:flex h-px w-[4rem] bg-gray-300 ml-4 mr-8 mt-1"></div>
          </div>
      
      <JobCard
        :company="'Shell Tankstellen'"
        :title="'Aushilfe Shell Tankstelle 538€ Basis (m / w / d)'"
        :date="'14 März, 2024'"
        :city="'Würzburg'"
        :street="'Schweinfurter Straße'"
        :salary="'12,50€'"
      />
      <!-- Internshot Desktop -->
          <div class="hidden lg:flex">
                <div class="flex-col flex justify-start md:justify-center items-center">
                  <span class="font-bold text-[3rem] bg-gradientBrown bg-clip-text text-transparent">Praktikum</span>
                      <NuxtLink to="/search?searchTerm=&city=&tags=Praktikum">
                          <div class="hidden md:flex btn hover:bg-transparent hover:opacity-85 cursor-pointer select-none mt-[1.063rem] w-[13.438rem] h-[3.5rem] bg-transparent items-center justify-center flex font-medium text-[1.4rem] rounded-lg text-darkGrey100 hover:text-darkGrey100 border border-gray-300 hover:border-customBlue hover:border-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" /></svg>
                            Entdecken</div>
                      </NuxtLink>
                </div>
          </div>
      
  </div>
  
  </div>
  
  
  <section>
  <div class="mt-[8rem]">
  <!-- Header Articles -->
  <div class="flex justify-center mb-4 items-center">
      <div class="h-px flex-grow bg-gray-300 ml-12 mr-4"></div>
          <h1 class="font-bold text-[1.5rem] sm:text-[2rem] ">Entdecke Artikel</h1>
      <div class="h-px flex-grow bg-gray-300 ml-4 mr-12"></div>
  </div>
  <!-- inspired by tailwindcss.com -->
  <div class="w-full flex justify-center">
  <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-8 mb-[6rem] items-start p-8 lg:mr-[10rem] lg:ml-[10rem] max-w-[74rem] flex justify-center">
      
      <!-- Card 1-->
      <li class="border border-gray-200 rounded-[1.5rem] hover:shadow-lg hover:border-customBlue border-2 p-[1.2rem] hover:p-[1.1rem] transition-all duration-250 ease-in-out relative flex flex-col sm:flex-row xl:flex-col items-start">
          <div class="order-1 sm:ml-6 xl:ml-0">
              <h3 class="mb-2 text-darkGrey100 font-bold text-[1.2rem]">
                  538€ Vertrag ( Minijob )
              </h3>
              <div class="prose prose-slate prose-sm text-slate-600 line-clamp-5">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum voluptatum, omnis nesciunt labore pariatur tempore laudantium consectetur ipsa veritatis reiciendis in aliquid aperiam? Aliquam hic quo quisquam maxime explicabo?</p>
              </div><a
                  class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-lg text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                  href="">Zum Artikel
                  <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
  </svg>
  </a>
          </div>
          <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-[1rem] bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
      </li>
  
  <!-- Card 2 -->
      <li class="border border-gray-200 rounded-[1.5rem] hover:shadow-lg hover:border-customBlue border-2 p-[1.2rem] hover:p-[1.1rem] transition-all duration-250 ease-in-out relative flex flex-col sm:flex-row xl:flex-col items-start">
          <div class="order-1 sm:ml-6 xl:ml-0">
              <h3 class="mb-2 text-darkGrey100 font-bold text-[1.2rem]">
                  538€ Vertrag ( Minijob )
              </h3>
              <div class="prose prose-slate prose-sm text-slate-600 line-clamp-5">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum voluptatum, omnis nesciunt labore pariatur tempore laudantium consectetur ipsa veritatis reiciendis in aliquid aperiam? Aliquam hic quo quisquam maxime explicabo?</p>
              </div><a
                  class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-lg text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                  href="">Zum Artikel
                  <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
  </svg>
  </a>
          </div>
          <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-[1rem] bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
      </li>
  
  <!-- Card 3 -->
  <li class="border border-gray-200 rounded-[1.5rem] hover:shadow-lg hover:border-customBlue border-2 p-[1.2rem] hover:p-[1.1rem] transition-all duration-250 ease-in-out relative flex flex-col sm:flex-row xl:flex-col items-start">
          <div class="order-1 sm:ml-6 xl:ml-0">
              <h3 class="mb-2 text-darkGrey100 font-bold text-[1.2rem]">
                  538€ Vertrag ( Minijob )
              </h3>
              <div class="prose prose-slate prose-sm text-slate-600 line-clamp-5">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum voluptatum, omnis nesciunt labore pariatur tempore laudantium consectetur ipsa veritatis reiciendis in aliquid aperiam? Aliquam hic quo quisquam maxime explicabo?</p>
              </div><a
                  class="btn btn-sm btn-outline hover:text-darkGrey100 group inline-flex items-center h-9 rounded-lg text-sm font-semibold whitespace-nowrap px-3 focus:outline-none bg-white text-slate-700 hover:bg-almostWhite mt-6"
                  href="">Zum Artikel
                  <span class="sr-only">, Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
  </svg>
  </a>
          </div>
          <img src="public/images/kassierer.jpg" alt="" class="mb-6 shadow-md rounded-[1rem] bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="640" height="446">
      </li>
  
  
  </ul>
</div>

  </div> 
  </section>
  
  
  
  <div>
  
  
  </div>
  <ScrollTop class="hidden lg:flex bg-black"/>
  </div>
  </template>
  
  <style> @import url("/assets/css/base.css"); </style>