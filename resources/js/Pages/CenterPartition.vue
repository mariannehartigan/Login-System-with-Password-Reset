<template>Center Section
  <div class="centerPartition">Center Section</div>
  
  <!-- <Item v-if="user"/> -->
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import { computed } from "vue"
import Header from './Header.vue'
import LeftPartition from './LeftPartition.vue'
import CenterPartition from './CenterPartition.vue'
import Item from './Item/Item.vue'
import RightPartition from './RightPartition.vue'
import Footer from './Footer.vue'

const page = usePage()
const user = computed(
  () => page.props.user,
)
</script>