<template>
  <form @submit.prevent="submit">
    <h2>Forgot Password</h2>

    <input v-model="form.email" type="email" placeholder="Email" />
    <div v-if="form.errors.email">{{ form.errors.email }}</div>

    <button type="submit">Send Reset Link</button>

    <div v-if="status" class="text-green-600">{{ status }}</div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const status = computed(() => page.props.flash?.status)

const form = useForm({
  email: '',
})

function submit() {
  form.post('/forgotpassword')
}
</script>