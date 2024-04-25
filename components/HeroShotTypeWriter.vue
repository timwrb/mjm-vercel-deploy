class="typed-text bg-gradientBlue text-transparent bg-clip-text ml-2"
<template>
<div class="mb-[6rem]">

    <div class="justify-center flex">
      <div class="md:mt-[5rem] mt-[3.75rem] w-full lg:w-9/12  text-[1.5rem] sm:text-[2.2rem] md:text-[3rem] font-extrabold">
    <div class="flex-col md:flex-row">

        <div class="justify-center flex flex-col md:flex-row items-center">
        <h1 class="flex text-darkGrey100">Entdecke die besten </h1>
          <!-- Typewriter classes -->
              <div class="flex flex-row items-center">
                <h1 :class="typeClass">{{ typeValue }}</h1>
                <span class="blinking-cursor text-darkGrey100 font-light opacity-40 text-[2.5rem] sm:text-[3.6rem] md:text-[5rem]">|</span>
                <span class="cursor" :class="{ typing: typeStatus }">&nbsp;</span>
              </div>
          <!-- / END Typewriter classes -->
      </div>

      <div class="flex justify-center mb-[1.5rem]"> <!-- Small Text -->
        <h2 class="w-3/4 text-center font-normal text-gray-700 text-[0.65rem] sm:text-[0.8rem] md:text-[1.3rem]">
          Egal ob Schüler, Student oder Berufseinsteiger, Hier findest du die besten Minijobs und Praktika
        </h2>
      </div>

        <div class="justify-center flex">

          <NuxtLink to="http://127.0.0.1:8000/admin">
            <div class="cursor-pointer bg-transparent border border-gray-300 rounded-full flex items-center flex-row transition-all duration-250 ease-in-out hover:border-customBlue hover:shadow-sm">
              <span class="ml-6 mr-1 mt-1 mb-1 flex text-transparent bg-clip-text bg-gradientBlue font-medium text-[0.725rem] md:text-[1rem]">
              Anzeige Schalten? Hier entlang</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4A7D91" class="w-4 h-4 md:w-6 md:h-6 mr-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" /></svg>
            </div>
          </NuxtLink>

        </div>
    </div>
      </div>
      </div>

</div>

</template>

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




