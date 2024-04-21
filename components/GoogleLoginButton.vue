<script setup lang="ts">
import {
  GoogleSignInButton,
  type CredentialResponse,
} from "vue3-google-signin";

// handle success event
const handleLoginSuccess = async (response: CredentialResponse) => {
  const { credential } = response;
  let user;

  if (credential) {
    user = await fetch("http://localhost:3000/api/login", {
      method: "POST",
      body: JSON.stringify({ token: credential }),
    }).then((res) => res.json());
  }
  console.log("Access Token", credential);
};

// handle an error event
const handleLoginError = () => {
  console.error("Login failed");
};
</script>

<template>
  <GoogleSignInButton
    @success="handleLoginSuccess"
    @error="handleLoginError"
  ></GoogleSignInButton>
</template>