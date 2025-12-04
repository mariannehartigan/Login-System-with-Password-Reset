<template>
  <form @submit.prevent="register">
    <div>
      <span>Your Name</span>
      <input
        id="name" v-model="form.name" type="text"
        class="input"
      />
      <div v-if="form.errors.name" class="input-error">
        {{ form.errors.name }}
      </div>
    </div>
    
    <span>E-mail</span>
    <input
      id="email" v-model="form.email" type="text"
      class="input"
    />
    <div v-if="form.errors.email" class="input-error">
      {{ form.errors.email }}
    </div>

    <div>
      <span>Password</span>
      <input
        :type="showPassword ? 'text' : 'password'"
        v-model="form.password"
        class="input"
        autocomplete="new-password"
      />
      <button
        type="button"
        class="toggle-password"
        @click="showPassword = !showPassword"
      >
        {{ showPassword ? 'Hide' : 'Show' }}
      </button>
      <div v-if="form.errors.password" class="input-error">
        {{ form.errors.password }}
      </div>
    </div>

    <button type="submit">
      Create Account
    </button>
  </form>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
const form = useForm({
  name: null,
  email: null,
  password: null,
})
const showPassword = ref(false)
const register = () => form.post('/register')
</script>

<style scoped>
form {
  padding: 5vw;
}
input {
  border-bottom: 1px solid black !important;
}
button {
  border: 1px solid black !important;
  padding: 0.2vw;
}
</style>