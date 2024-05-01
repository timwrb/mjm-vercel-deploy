<template>
    <div class="CompanyBG absolute w-screen h-full pointer-events-none"></div>

    <div class="flex w-full h-full bg-transparent z-10">
        <div class="flex flex-col w-full h-full justify-center items-center mb-[6rem]">

    <!-- Hero Section --> <div class="z-20 md:mt-[3rem] mt-[3.75rem] w-full lg:w-9/12  text-[1.7rem] sm:text-[2.2rem] md:text-[3rem] font-extrabold">
        <div class="justify-center flex flex-col md:flex-row items-center ">
        <h1 class="flex text-gray-200 drop-shadow-xl">Die beste Zielgruppe für </h1>
          <!-- Typewriter classes -->
              <div class="flex flex-row items-center">
                <h1 :class="typeClass" class="z-20 white-shadow-xl bg-transparent">{{ typeValue }}</h1>
                <span class="blinking-cursor text-darkGrey100 font-light opacity-40 text-[2.5rem] sm:text-[3.6rem] md:text-[5rem]">|</span>
                <span class="cursor" :class="{ typing: typeStatus }">&nbsp;</span>
              </div>
          <!-- / END Typewriter classes -->
      </div>

    </div>
<NuxtLink to="http://127.0.0.1:8000/dashboard" class="z-20">
    <div class="mt-[1rem] z-20"> <!-- Company Panel/Dashboard Card -->
        <div class="transition-all duration-200 ease-in-out group flex h-[3rem] rounded-full bg-companyLightGrey bg-opacity-80 backdropblur-[1rem] border border-companyBorderGrey items-center justify-center px-8 hover:border-customBlue hover:shadow-xl cursor-pointer">
            <h1 class="font-semibold text-white mr-2 text-[1.1rem]">
                Erstelle jetzt ein Unternehmensprofil
            </h1>
            <svg class="hidden group-hover:flex transition-all duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.5C15.8284 1.5 16.5 2.17157 16.5 3L16.5 16.5C16.5 17.3284 15.8284 18 15 18H9C8.17157 18 7.5 17.3284 7.5 16.5V12.75C7.5 12.3358 7.16421 12 6.75 12C6.33579 12 6 12.3358 6 12.75V16.5C6 18.1569 7.34315 19.5 9 19.5H15C16.6569 19.5 18 18.1569 18 16.5L18 3C18 1.34315 16.6569 -8.9407e-08 15 0L9 2.68221e-07C7.34315 3.12924e-07 6 1.34315 6 3V6.75C6 7.16421 6.33579 7.5 6.75 7.5C7.16421 7.5 7.5 7.16421 7.5 6.75V3C7.5 2.17157 8.17157 1.5 9 1.5L15 1.5ZM9.96967 6.21967C9.67677 6.51256 9.67677 6.98744 9.96967 7.28033L11.6893 9L0.749999 9C0.335785 9 -1.43051e-06 9.33579 -1.43051e-06 9.75C-1.43051e-06 10.1642 0.335785 10.5 0.749999 10.5L11.6893 10.5L9.96967 12.2197C9.67678 12.5126 9.67678 12.9874 9.96967 13.2803C10.2626 13.5732 10.7374 13.5732 11.0303 13.2803L14.0303 10.2803C14.3232 9.98744 14.3232 9.51256 14.0303 9.21967L11.0303 6.21967C10.7374 5.92678 10.2626 5.92678 9.96967 6.21967Z" fill="white"/></svg>
        </div>
    </div>
</NuxtLink>
<!-- Pricing Cards --><div class="z-20 mt-[4rem] px-12 py-8 border border-companyBorderGrey rounded-[1rem] flex flex-col md:flex-row gap-8 bg-companyLightGrey shadow-gray-900/20">


<div
  class="ring-companyBorderGrey ring-[1px] flex flex-col bg-clip-border rounded-xl bg-darkGrey40 border-gray-300 text-white shadow-gray-900/20 shadow-md w-full max-w-[20rem] p-8">
  <div
    class="relative pb-8 m-0 mb-8 overflow-hidden text-center text-gray-700 bg-transparent border-b rounded-none shadow-none bg-clip-border border-white/10">
    <p class="block font-sans text-sm antialiased font-normal leading-normal text-white uppercase">
      Basisplan
    </p>
    <h1 class="flex justify-center gap-1 mt-6 font-sans antialiased font-normal tracking-normal text-white text-7xl">
      <span class="mt-2 text-4xl">€</span>49
      <!-- <span class="self-end text-4xl">/mo</span> -->
    </h1>
  </div>
  <div class="p-0">
    <ul class="flex flex-col gap-4">
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc1
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
          desc2
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc3
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc4
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc5
        </p>
      </li>
    </ul>
  </div>
  <div class="p-0 mt-12">
    <button
      class="btn hover:opacity-80 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm py-3.5 px-7 rounded-lg bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02] focus:scale-[1.02] active:scale-100"
      type="button">
      Anzeige Schalten
    </button>
  </div>
</div> 

<div
  class="ring-companyBorderGrey ring-[1px]  flex flex-col bg-clip-border rounded-xl bg-darkGrey60 border-gray-300 text-white shadow-gray-900/20 shadow-md w-full max-w-[20rem] p-8">
  <div
    class="relative pb-8 m-0 mb-8 overflow-hidden text-center text-gray-700 bg-transparent border-b rounded-none shadow-none bg-clip-border border-white/10">
    <p class="block font-sans text-sm antialiased font-normal leading-normal text-white uppercase">
      Standartplan
    </p>
    <h1 class="flex justify-center gap-1 mt-6 font-sans antialiased font-normal tracking-normal text-white text-7xl">
      <span class="mt-2 text-4xl">€</span>59
      <!-- <span class="self-end text-4xl">/mo</span> -->
    </h1>
  </div>
  <div class="p-0">
    <ul class="flex flex-col gap-4">
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc1
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
          desc2
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc3
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc4
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc5
        </p>
      </li>
    </ul>
  </div>
  <div class="p-0 mt-12">
    <button
      class="btn hover:opacity-80 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm py-3.5 px-7 rounded-lg bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02] focus:scale-[1.02] active:scale-100"
      type="button">
      Anzeige Schalten
    </button>
  </div>
</div> 

<div
  class="ring-white ring flex flex-col bg-clip-border rounded-xl bg-customBlue border-gray-300 text-white shadow-gray-900/20 shadow-md w-full max-w-[20rem] p-8">
  <div
    class="relative pb-8 m-0 mb-8 overflow-hidden text-center text-gray-700 bg-transparent border-b rounded-none shadow-none bg-clip-border border-white/10">
    <p class="block font-sans text-sm antialiased font-normal leading-normal text-white uppercase">
      Premiumplan
    </p>
    <h1 class="flex justify-center gap-1 mt-6 font-sans antialiased font-normal tracking-normal text-white text-7xl">
      <span class="mt-2 text-4xl">€</span>79
      <!-- <span class="self-end text-4xl">/mo</span> -->
    </h1>
  </div>
  <div class="p-0">
    <ul class="flex flex-col gap-4">
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc1
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
          desc2
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc3
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc4
        </p>
      </li>
      <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
            desc5
        </p>
      </li>
    </ul>
  </div>
  <div class="p-0 mt-12">
    <button
      class="btn hover:opacity-80 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm py-3.5 px-7 rounded-lg bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02] focus:scale-[1.02] active:scale-100"
      type="button">
      Anzeige Schalten
    </button>
  </div>
</div> 
            </div>

        </div>
    </div>
</template>

<script setup>
definePageMeta({
  layout: 'company'
})
</script>

<script>
export default {
  data: () => {
    return {
      typeValue: "",
      typeStatus: false,
      displayTextArray: ["Minijobs", "Praktika"],
      typingSpeed: 100,
      erasingSpeed: 100,
      newTextDelay: 2000,
      displayTextArrayIndex: 0,
      charIndex: 0,
    };
  },
  methods: {
    typeText() {
      if (this.charIndex < this.displayTextArray[this.displayTextArrayIndex].length) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue += this.displayTextArray[this.displayTextArrayIndex].charAt(
          this.charIndex
        );
        this.charIndex += 1;
        setTimeout(this.typeText, this.typingSpeed);
      } else {
        this.typeStatus = false;
        setTimeout(this.eraseText, this.newTextDelay);
      }
    },
    eraseText() {
      if (this.charIndex > 0) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue = this.displayTextArray[this.displayTextArrayIndex].substring(
          0,
          this.charIndex - 1
        );
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
      } else {
        this.typeStatus = false;
        this.displayTextArrayIndex += 1;
        if (this.displayTextArrayIndex >= this.displayTextArray.length)
          this.displayTextArrayIndex = 0;
        setTimeout(this.typeText, this.typingSpeed + 1000);
      }
    },
  },
  created() {
    setTimeout(this.typeText, this.newTextDelay + 200);
  },
  computed: {
    typeClass() {
      return [
        'typed-text',
        'text-transparent',
        'bg-clip-text',
        'ml-2',
        this.displayTextArrayIndex === 0 ? 'bg-gradientBlue' : 'bg-gradientBrown'
      ];
    }
  },
};
</script>

<style scoped>
.CompanyBG {
    background: linear-gradient(215deg, rgba(0, 0, 0, 0.00) 24.7%, #4D8399 27.83%, rgba(0, 0, 0, 0.00) 33.01%);
filter: blur(400px);
}

.white-shadow-xl {
  text-shadow: 6px 6px 25px 0px rgba(255, 255, 255, 0.8);
}

.blinking-cursor {
  font-weight: 100;
  color: #2c3e50;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
  position: relative;
  left: -0.5rem;
  
  /* not perfectly moved to -x on mobile */
}
@keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-webkit-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-ms-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-o-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
</style>