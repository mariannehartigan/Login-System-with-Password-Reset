<template>
  <div class="authContainer">
    <form @submit.prevent="submit">
      
      <p class="title">Forgot Password</p>

      <span class="label">Email:</span>
      <input v-model="form.email" type="email" />
      <div v-if="form.errors.email">{{ form.errors.email }}</div>
      <div class="centerAlign">
      <button type="submit" class="button" style="margin-top: 3vh;">Send Reset Link</button>
      </div>

      <div v-if="status">{{ status }}</div>
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

<style src="../../../css/auth.css" scoped></style>