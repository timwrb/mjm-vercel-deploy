<template>

    <div>
        <h1 class="font-semibold text-customBlue text-[1.5rem] flex justify-center w-full">Kontaktformular</h1>
    </div>

    <div class="mt-4 ">
        <div class="flex w-full flex-col gap-2 justify-center"> <!-- E-Mail -->
        <label for="email" class="text-[0.9rem] sm:text-[1.1rem] text-darkGrey100">E-Mail Adresse</label>
        <InputText class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="email" v-model="email" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>
    </div>
</template>

<script>
const name = ref('');
</script>