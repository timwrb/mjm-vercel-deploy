<template>
        <div class="flex justify-center items-center mt-4 px-4 pb-4"> <!-- Login Form -->

<div class="flex w-full justify-center flex-col gap-4 sm:gap-8">
    <div class="flex justify-center"> <!-- Headline -->
        
        <h1 class="font-bold text-[1.2rem] sm:text-[1.6rem] text-customBlue select-none">Einloggen</h1>
       
    </div>

    <div class="flex w-full flex-col gap-2 justify-center"> <!-- E-Mail -->
        <label for="email" class="text-[0.9rem] sm:text-[1.1rem] text-customBlue">E-Mail Adresse</label>
        <InputText class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="email" v-model="email" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>

    <div class="flex w-full flex-col gap-2 justify-center"> <!-- Password -->
        <label for="password" class="text-[0.9rem] sm:text-[1.1rem] text-customBlue">Passwort</label>
        <Password :feedback="false" class="w-full font-light h-[2rem] sm:h-[2.5rem] mb-1" id="password" v-model="password" toggleMask/>
        <div class="flex place-content-between">
            <div class="flex flex-row items-center">
                <Checkbox v-model="rememberUser" inputId="rememberUser" name="rememberUser" value="rememberUser" />
                <label for="rememberUser" class="flex sm:hidden ml-2 text-customBlue select-none"> Merken </label>
                <label for="rememberUser" class="hidden sm:flex ml-2 text-customBlue select-none"> Eingeloggt bleiben </label>
            </div>
            <a href="${pwforgot}" id="password-forgot" class="text-[0.8rem] text-customBlue hover:underline select-none">Password vergessen?</a> 
        </div>
    </div>

    <div>
        <div class="flex flex-col gap-2 sm:gap-4">
            <div @:click="handleLogin" class="btn btn-md hover:bg-customBlue hover:text-white hover:bg-opacity-90 rounded-full bg-customBlue text-white w-full text-[0.9rem] sm:text-[1.1rem]">Einloggen</div>
                
            <div class="flex items-center flex-row mt-4">
                <div class="rounded-full h-[1px] flex flex-grow mr-2 bg-gray-300"></div>
                <p class="font-light text-[1rem] select-none">Oder</p>
                <div class="rounded-full h-[1px] flex flex-grow ml-2 bg-gray-300"></div>

            </div>

            <div class="flex flex-row gap-2 items-center justify-center mb-4">
                <div class="cursor-pointer btn btn-md hover:border-darkGrey100 hover:bg-opacity-90 rounded-full border-gray-300 hover:bg-white bg-white text-darkGrey100 flex flex-row items-center">
                    <IconGoogle />
                    <label class="cursor-pointer">Google</label>
                </div>
                <div class="cursor-pointer btn btn-md hover:border-darkGrey100 hover:bg-opacity-90 rounded-full border-gray-300 hover:bg-white bg-white text-darkGrey100 flex flex-row items-center">
                    <IconApple />
                    <label class="cursor-pointer">Apple</label>
                </div>
                <div class="cursor-pointer btn btn-md hover:border-darkGrey100 hover:bg-opacity-90 rounded-full border-gray-300 hover:bg-white bg-white text-darkGrey100 flex flex-row items-center">
                    <IconX />
                    <label class="cursor-pointer">Twitter</label>
                </div>

            </div>

            <div class="flex justify-center">
                    <p class="font-light text-[1rem] select-none">Du hast noch kein Konto?</p>
                </div>
            <div @:click="handleRegister" class="btn btn-md border-1 border-darkGrey100 hover:bg-white hover:border-customBlue hover:text-customBlue hover:text-darkGrey100 hover:bg-opacity-90 rounded-full bg-white text-darkGrey100 w-full text-[0.9rem] sm:text-[1.1rem]">Registrieren</div>
            
            <div class="w-full pl-4 sm:pl-6 pr-4 sm:pr-6 text-block flex justify-center flex-col">
                <p class="text-center mt-4 font-normal text-darkGrey60 text-[0.8rem] select-none">Sobald du einen Button klickst, der eine Anmeldung oder Registrierung einleitet akzeptierst du</p>
                <a class="text-center mt-4 font-normal text-customBlue hover:underline text-[0.8rem] select-none">Unsere Nutzungsbedingungen & Datenschutzerklärung</a>
            </div> 

        </div>
    </div>


</div>

</div>
</template>

<script setup>
const email = ref('');
const password = ref('');
const rememberUser = ref(false)

const pwforgot = "#";

const handleLogin = () => {
    console.log('Login');
}

const handleRegister = () => {
    console.log('Register');
}

const handleGoogleLogin = () => {
    console.log('Google Login');
}
</script>