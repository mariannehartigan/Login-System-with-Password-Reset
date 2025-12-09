<template>
  <div class="container">
    <div v-if="user">
      <div class="right">
        Welcome, {{ user.name }}
        &nbsp;
        <button class="button">
          <Link href="/logout" method="delete" as="button">Logout</Link>
        </button>
      </div>
    </div>
    <div v-else>
      <div class="center">
        <button class="button"><Link href="/login">Sign-In</Link></button>
        &nbsp;
        <button class="button"><Link href="/register">Register</Link></button>


      </div>
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