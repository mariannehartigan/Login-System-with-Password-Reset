<template>
  <div class="authContainer">
    <form @submit.prevent="submit">

      <p>If an account exists for <strong>{{ email }}</strong>, a reset link has been sent.</p>
      <br />
      <p>Please check your email and follow the instructions to reset your password.</p>
      <br />
      <br />
      <p>Didn't get an email?</p>
          <div class="center">
      <button type="submit" class="button">Resend Link</button>
      </div>
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
