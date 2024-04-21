<template>

<Dialog modal header="Header" :style="{ width: '35rem' }" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
    <template #header>
        <p></p>
        <!-- <div class="items-center justify-center flex">
            <p class="text-lg font-semibold text-darkGrey100">Anmelden</p>
        </div> -->
    </template>


    <div class="h-[24rem] flex justify-center items-center flex-col gap-2">
        <div class="w-full h-full justify-center flex flex-col items-center">

        <h1 class="font-medium text-[1.3rem] justify-center mb-3">Melde dich über Google an</h1>
            <GoogleLoginButton />
            <!-- Old Login Button Eigenes Design
                  <div class="flex items-center justify-center bg-white hover:opacity-80 mb-12" :disabled="!isReady" @click="() => login()">
                    <button class="btn flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-black focus:outline-none">
                        <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="-0.5 0 48 48" version="1.1"> <title>Google-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-401.000000, -860.000000)"> <g id="Google" transform="translate(401.000000, 860.000000)"> <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path> <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path> <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path> <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path> </g> </g> </g> </svg>
                    <span>Weiter mit Google</span>
                    </button>
                </div> -->
            

        </div>
        <div class="w-full h-full justify-center flex flex-col items-center">

        <h1 class="font-medium text-[1.3rem] justify-center mb-2">Oder bist du Unternehmer?</h1>
            <div class="flex-row flex">
        <span class="font-regular text-[0.875rem] justify-center mb-1">Melde dich als Unternehmen an</span>
        <span class="font-regular text-[0.875rem] justify-center mb-1">und schalte</span><span class="font-bold text-[0.875rem] justify-center mb-1 ml-1">Anzeigen</span>
            </div>
                <div class="flex items-center justify-center bg-white hover:opacity-80 ">
                    <button class="btn flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-black focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                        </svg>

                    <span>Anzeigen Schalten</span>
                    </button>
                </div>
        </div>
</div>

</Dialog>

</template>

<script setup>

</script>