<template>
  <div class="container">
    <form @submit.prevent="submit">
      
      <p class="title">Forgot Password</p>

      <span class="label">Email:</span>
      <input v-model="form.email" type="email" />
      <div v-if="form.errors.email">{{ form.errors.email }}</div>
      <div class="center">
      <button type="submit" class="button">Send Reset Link</button>
      </div>

      <div v-if="status" class="text-green-600">{{ status }}</div>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { useAuthStore } from '../../Stores/auth'

const auth = useAuthStore()

const page = usePage()
const status = computed(() => page.props.flash?.status)

const form = useForm({
  email: auth.email ?? '',
})

function submit() {
  form.post('/forgotpassword')
}
</script>