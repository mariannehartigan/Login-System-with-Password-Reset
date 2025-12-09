<template>
  <div class="container">
    <form @submit.prevent="register">
      <p class="title">Register</p>
      <div>
        <span class="label">Your Name</span>
        <input
          id="name" v-model="form.name" type="text"
          class="input"
        />
        <div v-if="form.errors.name" class="input-error">
          {{ form.errors.name }}
        </div>
      </div>
      
      <span class="label">E-mail</span>
      <input
        id="email" v-model="form.email" type="text"
        class="input"
      />
      <div v-if="form.errors.email" class="input-error">
        {{ form.errors.email }}
      </div>

      <!-- Password -->
      <div class="passwordField">
        <span class="label">Password</span>
        <input
          :type="showPassword ? 'text' : 'password'"
          v-model="form.password"
          class="input"
          autocomplete="new-password"
        />
        <PasswordEye :show="showPassword" @toggle="showPassword = !showPassword" />

        <div v-if="form.errors.password" class="input-error">
          {{ form.errors.password }}
        </div>
      </div>

      <div class="center">
        <button type="submit" class="button">
          Create Account
        </button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import PasswordEye from './PasswordEye.vue'

const form = useForm({
  name: null,
  email: null,
  password: null,
})
const showPassword = ref(false)
const register = () => form.post('/register')
</script>