<template>
  <div>
    <h1>Test API Backend</h1>
    <button @click="pingApi">Tester connexion</button>
    <div v-if="response">
      <strong>Réponse du backend :</strong> {{ response }}
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'

const response = ref('')

async function pingApi() {
  try {
    // Adapter l'URL si besoin (localhost:8000 par défaut Laravel)
    const res = await fetch('http://localhost:8000/api/ping')
    const data = await res.json()
    response.value = data.message
  } catch (e) {
    response.value = 'Erreur de connexion'
  }
}
</script>
