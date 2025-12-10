<template>
  <div class="centerPartition">
    <Item v-if="user"/>
  </div>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import { computed } from "vue"
import Item from './Item/Item.vue'

const page = usePage()
const user = computed(
  () => page.props.user,
)
</script>