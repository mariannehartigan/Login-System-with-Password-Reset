<template>
  <form @submit.prevent="submit">
    <h2>Reset Password</h2>

    <input v-model="form.email" type="email" placeholder="Email" />
    <input v-model="form.password" type="password" placeholder="New password" />
    <input v-model="form.password_confirmation" type="password" placeholder="Confirm password" />

    <button type="submit">Reset Password</button>

    <div v-if="form.errors">{{ form.errors }}</div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  token: String,
  email: String
})

const form = useForm({
  token: props.token,
  email: props.email,
  password: '',
  password_confirmation: ''
})

function submit() {
  form.post('/resetpassword')
}
</script>