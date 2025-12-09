<template>
  <div class="container">
    <form @submit.prevent="submit">
      <p class="title">Reset Password</p>
      <!-- Email -->
      <br /><br />
      <span class="label">Email: </span>
      <input
        v-model="form.email"
        type="email"
        autocomplete="email"
        placeholder="Email"
      />
      <div v-if="form.errors.email" class="input-error">
        {{ form.errors.email }}
      </div>
      <br /><br /><br />
      <p>Your new password will be shown by default.</p>

      <!-- Password -->
      <div class="passwordField">
        <span class="label">New Password: </span>
        <input
          :type="showPassword ? 'text' : 'password'"
          v-model="form.password"
          autocomplete="new-password"
        />
        <PasswordEye :show="showPassword" @toggle="showPassword = !showPassword" />
      </div>

      <div v-if="form.errors.password" class="input-error">
        {{ form.errors.password }}
      </div>
      <br /><br /><br />
      <div class="center">
        <button type="submit" class="button">Reset Password</button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import PasswordEye from './PasswordEye.vue'

const props = defineProps({
  token: String,
  email: String,
})

const showPassword = ref(true)

const form = useForm({
  token: props.token,
  email: props.email,
  password: '',
})

function submit() {
  form.post('/resetpassword')
}
</script>

<style scoped>
.input-error {
  color: red;
  font-size: 0.85rem;
  margin-top: -0.5rem;
  margin-bottom: 1rem;
}
</style>
