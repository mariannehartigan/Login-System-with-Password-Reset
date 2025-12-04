<template>
  <form @submit.prevent="login">
    <span>Email:</span>
    <input
      v-model="form.email"
      type="text"
    />
    <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
    <br />
    <span>Password:</span>
    <input
      v-model="form.password"
      type="password"
      autocomplete="new-password"
    />
    <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
    <br /><br />
    <button type="submit">Login</button>

    <div style="margin-top: 10px">
      <Link href="/forgotpassword">Forgot password?</Link>
    </div>
  </form>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3'

const form = useForm({
  email: '',
  password: '',
})

const login = () => form.post('/login')
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