<template>

    <div class="">
<Toast />
    <div class="flex flex-col md:flex-row gap-4">

        <div class="flex w-full flex-col gap-2 justify-center"> <!-- first_name -->
        <label for="first_name" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100">Vorname</label>
        <InputText :invalid="first_nameInvalid" class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="first_name" v-model="first_name" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
        </div>

        <div class="flex w-full flex-col gap-2 justify-center"> <!-- last_name -->
        <label for="last_name" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100">Nachname</label>
        <InputText :invalid="last_nameInvalid" class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="last_name" v-model="last_name" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
        </div>

    </div>

    <div class="flex flex-col md:flex-row gap-4">

    <div class="flex w-full flex-col gap-2 justify-center mt-4"> <!-- E-Mail -->
        <label for="email" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100">E-Mail Adresse</label>
        <InputText :invalid="emailInvalid" class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="email" v-model="email" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>

    <div class="flex w-full flex-col gap-2 justify-center mt-4"> <!-- phone -->
        <label for="phone" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100">Telefonnummer (optional)</label>
        <InputText :invalid="phoneInvalid" class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="phone" v-model="phone" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>

    </div>

    <div class="flex w-full flex-col gap-2 justify-center mt-4"> <!-- title -->
        <label for="title" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100">Betreff</label>
        <InputText :invalid="titleInvalid" class="w-full font-light h-[2rem] sm:h-[2.5rem] pl-4" id="title" v-model="title" />
        <!-- <small id="emailadresse-help" class="text-[0.8rem]">Gib deine E-Mail Adresse ein</small> -->
    </div>


    <div class="gap-2 flex flex-col">
        <label for="category" class="text-[0.9rem] sm:text-[1rem] text-darkGrey100 mt-4">Inhalt</label>
        <Textarea :invalid="contentInvalid" class="w-full font-light h-[6rem] sm:h-[8rem] pl-4 resize-none text-[0.9rem] sm:text-[1rem]" v-model="content" />
    </div>

    <div @:click="handleSubmit" class="mt-6 mb-4 btn btn-md hover:bg-customBlue hover:text-white hover:bg-opacity-90 rounded-full bg-customBlue text-white w-full text-[0.9rem] sm:text-[1.1rem]">Abschicken</div>

    </div>
</template>

<script setup lang="ts">
import { useToast } from "primevue/usetoast";
const toast = useToast();

interface ContactForm {
    first_name: string;
    last_name: string;
    phone: string;
    title: string;
    email: string;
    content: string;
    category: string;
    device: string;
    browser: string;
}

const email = ref('');
const phone = ref('');
const first_name = ref('');
const last_name = ref('');
const content = ref('');
const title= ref('');

const emailInvalid = ref(false);
const first_nameInvalid = ref(false);
const last_nameInvalid = ref(false);
const phoneInvalid = ref(false);
const contentInvalid = ref(false);
const titleInvalid = ref(false);

const checkValidation = () => {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    emailInvalid.value = !emailRegex.test(email.value);

    const nameRegex = /^[a-zA-Z]{2,}$/;
    first_nameInvalid.value = !nameRegex.test(first_name.value);
    last_nameInvalid.value = !nameRegex.test(last_name.value);

    const phoneRegex = /^\+?[0-9]+$/;
    phoneInvalid.value = !phoneRegex.test(phone.value);

    titleInvalid.value = title.value.trim() === '';

    contentInvalid.value = content.value.trim() === '';

    const invalidFields = [];
    if (first_nameInvalid.value) invalidFields.push('Vorname');
    if (last_nameInvalid.value) invalidFields.push('Nachname');
    if (emailInvalid.value) invalidFields.push('Email');
    if (phoneInvalid.value) invalidFields.push('Telefon');
    if (contentInvalid.value) invalidFields.push('Inhalt');
    if (titleInvalid.value) invalidFields.push('Betreff');

    if (invalidFields.length > 0) {
        const message = invalidFields.join(', ') + ' ungültig';
        toast.add({ severity: 'error', summary: 'Überprüfe deine Eingaben', detail: message, life: 5000 });
    }
};

const handleSubmit = () => {
    checkValidation();
    if (!emailInvalid.value && !first_nameInvalid.value && !last_nameInvalid.value && !phoneInvalid.value && !contentInvalid.value && !titleInvalid.value) {
        sendData();
    }
}

const sendData = async () => {
    const data: ContactForm = {
        first_name: first_name.value,
        last_name: last_name.value,
        phone: phone.value,
        title: title.value,
        email: email.value,
        content: content.value,
        category: 'Kontaktanfrage',
        device: navigator.userAgent,
        browser: navigator.appVersion
    }

    try {
        const response = await fetch('http://mjmbackend.test/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        if (response.ok) {
            console.log('Ihre Nachricht wurde erfolgreich versendet.');
            toast.add({ severity: 'success', summary: 'Anfrage Abgeschickt!', detail: "Deine Kontaktanfrage wurde erfolgreich übermittelt.", life: 5000 });
        } else {
            console.log('Ihre Nachricht konnte nicht versendet werden.');
            toast.add({ severity: 'warn', summary: 'Fehler beim Abschicken', detail: "Deine Kontaktanfrage konnte nicht übermittelt werden. Bitte versuch es noch einmal", life: 5000 });

        }
    } catch (error) {
        console.error('Fehler beim senden:', error);
        toast.add({ severity: 'error', summary: 'Fehler beim Abschicken', detail: "Die Kontaktanfrage kann zur Zeit nicht übermittelt werden, bitte versuche es später noch einmal.", life: 5000 });

    }
}
</script>