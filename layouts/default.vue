<template>

  
<div>
    <div class="flex justify-center"> <!-- Wrapper w -->
    <div class="w-full md:w-[80%] lg:w-[80%]"> <!-- Wrapper w -->

    <div class="navbar bg-transparent">
  <div class="navbar-start">

<Sidebar v-model:visible="visible" >
      <template #header>
        <div class="flex items-center">
          <LogoMjmEB />
        </div>
      </template>
<div class="flex flex-col gap-4 bg-transparent rounded-xl p-4 text-[1.2rem]">
<h1 class="hover:font-semibold cursor-pointer">Job Finden</h1>
<h1 class="hover:font-semibold cursor-pointer">Unernehmen</h1>
<NuxtLink to="/general/contact?type=kontakt" @click="visible = false">
  <h2 class="hover:font-semibold cursor-pointer">Kontakt</h2>
</NuxtLink>
<h2 class="hover:font-semibold cursor-pointer">Über uns</h2>
<h1 class="hover:font-semibold cursor-pointer">für Arbeitgeber</h1>
<h1 class="hover:font-semibold cursor-pointer" @click="visible = false, visibleLoginModal = true">Anmelden</h1>


</div>
</Sidebar>
      <!-- Trigger button -->
    <div class=" flex lg:hidden ml-2 mr-4 cursor-pointer hover:bg-almostWhite" @click="visible = true" >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
      </svg>
    </div>
    <!--<div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Job finden</a></li>
        <li>
          <a>Favoriten</a>
          <ul class="p-2">
            <li><a>Gespeicherte Jobs</a></li>
            <li><a>Favoriten</a></li>
          </ul>
        </li>
        <li><a>Über uns</a></li>
        <li><a></a></li>
        <li><a class="font-bold text-indigo-400">Anzeige Schalten</a></li>
        <li><a class="text-emerald-600 font-bold">Anmelden</a></li>
      </ul>
    </div>
    -->
                <NuxtLink to="/" class="hover::opacity-60 select-none cursor-pointer">   
                <LogoMjmEB />
                </NuxtLink>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li>
        <details>
          <summary class="font-medium text-[1rem]">Unternehmen</summary>
          <ul class="p-2">
            <li><a><NuxtLink to="/company-info">Anzeigen Schalten</NuxtLink></a></li>
            <li><a>Unternehmen entdecken</a></li>
          </ul>
        </details>
      </li>
      <li>
        <a href="/general/contact?type=kontakt" class="font-medium text-[1rem]">Kontakt</a>
      </li>
      <li><a class="font-medium text-[1rem]">Über uns</a></li>
    </ul>
  </div>
  <div class="navbar-end gap-4 hidden md:flex">
    <!-- <NuxtLink to="http://127.0.0.1:8000/admin">
      <a class="btn btn-md bg-white border-gray-300">Anzeige Schalten</a>
    </NuxtLink> -->

    <div @click="visibleLoginModal = true">
      <div class="flex items-center justify-center bg-transparent hover:bg-gray-300 rounded-full h-[3rem] transition transition-all ease-in-out duration-150 hover:opacity-80 ">
        <button class=" flex items-center shadow-none bg-transparent rounded-full px-6 text-sm font-medium text-black focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          <span class="ml-2 text-[1rem]">Anmelden</span>
        </button>
      </div>
    </div>

    <LoginModal v-model:visible="visibleLoginModal" />
  </div>
</div>
</div> <!-- Wrapper w -->
</div> <!-- Wrapper w -->

    <div>
        <slot />
    </div>
    <footer class="footer p-10 bg-transparent backdrop-blur-xl text-base-content border border-t border-gray-300">
  <aside>
    <div class="flex flex-col gap-[0.5rem]">
                <div class="mt-[0.5rem] select-none cursor-pointer">   
                  <LogoMjmEB />
                </div>
                    <div class="mt-4">
                    <p class="font-semibold">miniJobMatch GmbH</p>
                    <p class="font-medium">Tolle Minijobs entdecken und Geld verdienen!</p>
                    </div>
    </div>
  </aside> 
  <nav>
    <h6 class="footer-title">Services</h6> 
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
    <a class="link link-hover">Advertisement</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Unternehmen</h6> 
    <a class="link link-hover">Über uns</a>
    <a href="/contact?type=kontakt" class="link link-hover">Kontakt</a>
    <p href="/contact?type=feedback" class="link link-hover">Feedback</p>
    <a class="link link-hover">Impressum</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Rechtlich</h6>
    <a href="/general/agb" class="link link-hover">A G B</a>
    <a href="/general/datenschutz" class="link link-hover">Datenschutz</a>
    <a href="/general/privacy" class="link link-hover">Privatsphäre</a>
    <a href="/general/cookies" class="link link-hover">Cookie Richtlinien</a>
  </nav>
</footer>

</div>


<!-- Background -->
</template>

<script setup>

import { ref } from 'vue';
const visible = ref(false);
const visibleLoginModal = ref(false);
</script>

<style scoped>

.animated-background {
    background-size: 400%;

    -webkit-animation: animation 6s ease infinite;
    -moz-animation: animation 6s ease infinite;
    animation: animation 6s ease infinite;
}

@keyframes animation {
    0%,
    100% {
        background-position: 0% 50%;
    }
    
    50% {
        background-position: 100% 50%;
    }
}
</style>

