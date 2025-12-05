<template>
  <div>
    <p>Thank you.</p>
    <p> If an account exists for <strong>{{ email }}</strong>, a reset link has been sent.</p>
    <p>Please check your email and follow the instructions to reset your password.</p>
    <p>Have a great day!</p>
  </div>
</template>

<script setup>
defineProps({
  status: String,
  email: String,
})
</script>
