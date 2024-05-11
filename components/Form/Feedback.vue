<template>

    <div>
        <h1 class="font-semibold text-customBlue text-[1.5rem] flex justify-center w-full">
        Feedback geben</h1>
    </div>

    <div class="mt-4 ">
        <div class="flex w-full flex-col gap-2 justify-center"> <!-- E-Mail -->
        <label for="email" class="text-[0.9rem] sm:text-[1.1rem] text-darkGrey100">E-Mail Adresse</label>
        <InputText class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="email" v-model="email" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>
    </div>
</template>

<script setup lang="ts">

interface ContactForm {
    email: string;
    content: string;
    category: string;
    device: string;
    browser: string;
}
const validated = ref(false);

const email = ref('');
const content = ref('');


const checkValidation = () => {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email.value)) {
        alert('Bitte geben Sie eine gültige E-Mail-Adresse ein.');
        return;
    }

    if (content.value.trim() === '') {
        alert('Der Inhalt darf nicht leer sein.');
        return;
    }
}

const handleSubmit = () => {
    checkValidation();
    if (validated.value = true) {
        sendData();
    }
    
}

const sendData = async () => {
    const data: ContactForm = {
        email: email.value,
        content: content.value,
        category: 'Kontaktanfrage',
        device: navigator.userAgent,
        browser: navigator.appVersion
    }

    try {
        const response = await fetch('http://localhost:3000/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        if (response.ok) {
            alert('Ihre Nachricht wurde erfolgreich versendet.');
        } else {
            alert('Ihre Nachricht konnte nicht versendet werden.');
        }
    } catch (error) {
        console.error('Fehler beim senden:', error);
    }
}
</script>