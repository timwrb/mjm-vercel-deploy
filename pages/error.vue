<template>
    <div>
      <h1>{{ $route.error.statusCode }}</h1>
      <p v-if="$route.error.statusCode === 404">Diese Seite wurde nicht gefunden</p>
      <p v-else>Ein Fehler ist aufgetreten</p>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CustomErrorPage',
    setup() {
      const { error } = useRoute();
      return { error };
    },
  };
  </script>