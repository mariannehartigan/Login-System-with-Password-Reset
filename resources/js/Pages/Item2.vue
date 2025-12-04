<template>
  Multiple URL's page
  <br /><br />
  Item2s:
  <div v-for="item2 in item2s" :key="item2.id">
    <input v-model="updateForm[item2.id].description" @change="update(item2.id)" />
    <input v-model="updateForm[item2.id].userId" />
    <Link :href="`/item2/${item2.id}`" method="delete">&nbsp;Delete</Link>
  </div>
  <br />
  Add an item2: 
  <form @submit="create">
  <input v-model="createForm.description" type="text" style="border: 1px solid black !important;" />
  <button type="submit">&nbsp;+</button>
</form>

</template>

<script setup>
import { computed, reactive } from 'vue'
import { Link, useForm, usePage } from '@inertiajs/vue3'

const item2s = computed(() => usePage().props.item2s)

// CREATE
const createForm = useForm({
  description: null,
})
const create = () => { createForm.post('/item2') }

// UPDATE
const updateForm = reactive({})
item2s.value.forEach(item2 => {
  updateForm[item2.id] = useForm({
    description: item2.description,
    userId: item2.userId    
  })
})
const update = (id) => { updateForm[id].put(`/item2/${id}`) }
</script>