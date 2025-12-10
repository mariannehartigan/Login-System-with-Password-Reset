<template>
  <div class="authContainer">
    <form @submit.prevent="login">
      
    <p class="title">Sign In</p>
      <span class="label">Email:</span>
      <input
        v-model="form.email"
        type="text"
      />
      <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
      <br />
      <span class="label">Password:</span>
      <input
        v-model="form.password"
        type="password"
        autocomplete="new-password"
      />
      <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>

      <div>
        <Link href="/forgotpassword">Forgot password?</Link>
      </div>

      <div class="buttonContainer">
        <button type="submit" class="button">
          Log In
        </button>
        <span class="changeToLoginOrRegister">
          <Link href="/register">Register</Link>
        </span>
      </div>

    </form>
  </div>
</template>

<script setup>
import { watch } from 'vue'
import { Link, useForm } from '@inertiajs/vue3'
import { useAuthStore } from '../../Stores/auth'

const auth = useAuthStore()

const form = useForm({
  email: '',
  password: '',
})

watch(() => form.email, (value) => {
  auth.setEmail(value)
})

const login = () => form.post('/login')
</script>

<style src="../../../css/auth.css" scoped></style>