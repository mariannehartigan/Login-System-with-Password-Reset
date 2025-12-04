<!-- <template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                Reset Your Password
            </h1>

            <div v-if="status" class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ status }}
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        New Password
                    </label>
                    <input
                        type="password"
                        v-model="password"
                        class="mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    <div v-if="errors.password" class="text-red-600 text-sm mt-1">
                        {{ errors.password }}
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        v-model="password_confirmation"
                        class="mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    <div v-if="errors.password_confirmation" class="text-red-600 text-sm mt-1">
                        {{ errors.password_confirmation }}
                    </div>
                </div>

                <button
                    @click="resetPassword"
                    class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition font-semibold"
                >
                    Reset Password
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { router, usePage } from '@inertiajs/vue3';

const props = defineProps({
    token: String,
    email: String,
});

const password = ref('');
const password_confirmation = ref('');
const errors = ref({});
const status = ref(null);

function resetPassword() {
    router.post('/reset-password', {
        token: props.token,
        email: props.email,
        password: password.value,
        password_confirmation: password_confirmation.value,
    }, {
        onError: (e) => errors.value = e,
        onSuccess: () => {
            status.value = "Your password has been reset successfully!";
        }
    });
}
</script> -->

<template>
  <form @submit.prevent="submit">
    <h2>Reset Password</h2>

    <input v-model="form.email" type="email" placeholder="Email" />
    <input v-model="form.password" type="password" placeholder="New password" />
    <input v-model="form.password_confirmation" type="password" placeholder="Confirm password" />

    <button type="submit">Reset Password</button>

    <div v-if="form.errors">{{ form.errors }}</div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  token: String,
  email: String
})

const form = useForm({
  token: props.token,
  email: props.email,
  password: '',
  password_confirmation: ''
})

function submit() {
  form.post('/resetpassword')
}
</script>