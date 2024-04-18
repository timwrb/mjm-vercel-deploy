<template>
<div>
    <div class="flex justify-center"> <!-- Wrapper w -->
    <div class="w-full md:w-[80%] lg:w-[80%]"> <!-- Wrapper w -->

    <div class="navbar bg-transparent">
  <div class="navbar-start">

<Sidebar v-model:visible="visible" >
      <template #header>
        <div class="flex items-center">
          <LOGOmjm />
        </div>
      </template>
<div class="flex flex-col gap-2 bg-almostWhite rounded-xl p-4">
<h1 class="hover:font-semibold cursor-pointer">Job Finden</h1>
<h1 class="hover:font-semibold cursor-pointer">Favoriten</h1>
<h2 class="hover:font-semibold cursor-pointer">Gespeicherte Jobs</h2>
<h2 class="hover:font-semibold cursor-pointer">Favoriten</h2>
<h1 class="hover:font-semibold cursor-pointer">Über uns</h1>

<h1 class="font-bold text-darkGrey100 mt-2">Anzeige Schalten</h1>
<h1>Anmelden</h1>
</div>
</Sidebar>
      <!-- Trigger button -->
    <div class=" flex md:hidden ml-2 mr-4 cursor-pointer hover:bg-almostWhite" @click="visible = true" >
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
                <LOGOmjm />
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
    <NuxtLink to="http://127.0.0.1:8000/admin"><a class="btn btn-sm btn-ghost">Anzeige Schalten</a></NuxtLink>
    <a class="btn btn-sm">Anmelden</a>
  </div>
</div>
</div> <!-- Wrapper w -->
</div> <!-- Wrapper w -->

    <div>
        <slot />
    </div>
<div class="w-full h-[0.5px] bg-darkGrey40"></div>
    <footer class="footer p-10 bg-transparent text-base-content">
  <aside>
    <div class="flex flex-col gap-[0.5rem]">
                <div class="mt-[0.5rem] select-none cursor-pointer">   
                  <LOGOmjmSPAN />
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
</template>

<script setup>

import { ref } from 'vue';
const visible = ref(false);
</script>