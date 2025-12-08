<template>
  <div>
    <p>If an account exists for <strong>{{ email }}</strong>, a reset link has been sent.</p>
    <p>Please check your email and follow the instructions to reset your password.</p>
    <p>Didn't get an email?</p>

    <form @submit.prevent="submit">
      <button type="submit">Resend Link</button>
    </form>

  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { watchEffect } from 'vue'
import { usePage } from '@inertiajs/vue3'

const props = defineProps({
  status: String,
  email: String,
})

const page = usePage()

const form = useForm({
  email: '',
})

watchEffect(() => {
  if (props.email) {
    form.email = props.email
  }
})

function submit() {
  form.post('/forgotpassword')
}
</script>
