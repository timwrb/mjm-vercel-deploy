<template>

  <div class="bg-companyDarkGrey -z-20 text-white">
<div class="bg-companyDarkGrey -z-20">
    <div class="flex justify-center"> <!-- Wrapper w -->
    <div class="w-full md:w-[80%] lg:w-[80%] bg-companyDarkGrey"> <!-- Wrapper w -->

    <div class="navbar bg-transparent">
  <div class="navbar-start">

<Sidebar v-model:visible="visible" >
      <template #header>
        <div class="flex items-center">
          <LogoMjmCompany />
        </div>
      </template>
<div class="flex flex-col gap-2 bg-darkGrey100 rounded-xl p-4">
<h1 class="hover:font-semibold cursor-pointer">Job Finden</h1>
<h1 class="hover:font-semibold cursor-pointer">Favoriten</h1>
<h2 class="hover:font-semibold cursor-pointer">Gespeicherte Jobs</h2>
<h2 class="hover:font-semibold cursor-pointer">Favoriten</h2>
<h1 class="hover:font-semibold cursor-pointer">Über uns</h1>
      <div class="mt-12 mb-12 flex justify-center">
        <GoogleLoginButton />
      </div>
        <div class="flex items-center justify-center hover:opacity-80 ">
          <NuxtLink to="http://127.0.0.1:8000/admin">
              <button class="btn flex items-center bg-transparent border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-black focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                </svg>
              <span>Anzeigen Schalten</span>
            </button>
          </NuxtLink>
        </div>

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
                <LogoMjmCompany />
                </NuxtLink>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a class="font-medium text-[1rem]">Job finden</a></li>
      <li>
        <details>
          <summary class="font-medium text-[1rem]">Favoriten</summary>
          <ul class="p-2">
            <li><a>Gespeicherte Jobs</a></li>
            <li><a>Option 2</a></li>
          </ul>
        </details>
      </li>
      <li><a class="font-medium text-[1rem]">Über uns</a></li>
    </ul>
  </div>
  <div class="navbar-end gap-4 hidden md:flex">
    <!-- <NuxtLink to="http://127.0.0.1:8000/admin">
      <a class="btn btn-md bg-white border-gray-300">Anzeige Schalten</a>
    </NuxtLink> -->

    <NuxtLink to="http://127.0.0.1:8000/dashboard">
      <div class="flex items-center justify-center bg-transparent backdrop-blur-[10rem] hover:opacity-80 ">
        <button class="btn btn-md hover:bg-transparent flex items-center bg-transparent border border-[0.5px] border-gray-300 rounded-lg px-6 text-sm font-medium text-black focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.5C15.8284 1.5 16.5 2.17157 16.5 3L16.5 16.5C16.5 17.3284 15.8284 18 15 18H9C8.17157 18 7.5 17.3284 7.5 16.5V12.75C7.5 12.3358 7.16421 12 6.75 12C6.33579 12 6 12.3358 6 12.75V16.5C6 18.1569 7.34315 19.5 9 19.5H15C16.6569 19.5 18 18.1569 18 16.5L18 3C18 1.34315 16.6569 -8.9407e-08 15 0L9 2.68221e-07C7.34315 3.12924e-07 6 1.34315 6 3V6.75C6 7.16421 6.33579 7.5 6.75 7.5C7.16421 7.5 7.5 7.16421 7.5 6.75V3C7.5 2.17157 8.17157 1.5 9 1.5L15 1.5ZM9.96967 6.21967C9.67677 6.51256 9.67677 6.98744 9.96967 7.28033L11.6893 9L0.749999 9C0.335785 9 -1.43051e-06 9.33579 -1.43051e-06 9.75C-1.43051e-06 10.1642 0.335785 10.5 0.749999 10.5L11.6893 10.5L9.96967 12.2197C9.67678 12.5126 9.67678 12.9874 9.96967 13.2803C10.2626 13.5732 10.7374 13.5732 11.0303 13.2803L14.0303 10.2803C14.3232 9.98744 14.3232 9.51256 14.0303 9.21967L11.0303 6.21967C10.7374 5.92678 10.2626 5.92678 9.96967 6.21967Z" fill="white"/></svg>
          <span class="text-white">Dashboard</span>
        </button>
      </div>
    </NuxtLink>

    <LoginModal v-model:visible="visibleLoginModal" />
  </div>
</div>
</div> <!-- Wrapper w -->
</div> <!-- Wrapper w -->

    <div>
        <slot />
    </div>
<div class="w-full h-[0.5px] bg-gray-700"></div>
    <footer class="footer p-10 bg-transparent backdrop-blur-xl text-base-content text-gray-300">
  <aside>
    <div class="flex flex-col gap-[0.5rem]">
                <div class="mt-[0.5rem] select-none cursor-pointer">   
                  <LogoMjmCompany />
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
    <a class="link link-hover">Kontakt</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Impressum</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Rechtlich</h6>
    <a class="link link-hover">A G B</a>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav>
</footer>

</div>
</div>

<!-- Background -->
</template>

<script setup>

import { ref } from 'vue';
const visible = ref(false);
const visibleLoginModal = ref(false);
</script>

<style scoped>


</style>

