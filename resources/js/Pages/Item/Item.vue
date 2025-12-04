<template>
  Items:
  <div v-for="item in items" :key="item.id">
    <input v-model="updateForm[item.id].description" @change="update(item.id)" />
    <input v-model="updateForm[item.id].userId" />
    <Link :href="`/item/${item.id}`" method="delete">&nbsp;Delete</Link>
  </div>
  <br />
  Add an item: 
  <form @submit="create">
  <input v-model="createForm.description" type="text" style="border: 1px solid black !important;" />
  <button type="submit">&nbsp;+</button>
</form>

</template>

<script setup>
import { computed, reactive } from 'vue'
import { Link, useForm, usePage } from '@inertiajs/vue3'

const items = computed(() => usePage().props.items)

// CREATE
const createForm = useForm({
  description: null,
})
const create = () => { createForm.post('/item') }

// UPDATE
const updateForm = reactive({})
items.value.forEach(item => {
  updateForm[item.id] = useForm({
    description: item.description,
    userId: item.userId    
  })
})
const update = (id) => { updateForm[id].put(`/item/${id}`) }
</script>