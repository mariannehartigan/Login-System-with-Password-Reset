<template>
  <div class="container">
    <div v-if="user">
      <div>{{ user.name }}</div>
      <Link href="/logout" method="delete" as="button">Logout</Link>
    </div>
    <div v-else>
      <Link href="/register">Register</Link>
      <Link href="/login">Sign-In</Link>
    </div>
    <br />
    <Item v-if="user"/>
  </div>
</template>
 
<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from "vue"
import Item from './Item/Item.vue'

const page = usePage()
const user = computed(
  () => page.props.user,
)
</script>

<style scoped>
.container {
  padding: 3vw;
}
</style>