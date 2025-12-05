<template>
  <form @submit.prevent="submit">
    <h2>Reset Password</h2>

    <!-- Email -->
    <input
      v-model="form.email"
      type="email"
      class="input"
      autocomplete="email"
      placeholder="Email"
    />
    <div v-if="form.errors.email" class="input-error">
      {{ form.errors.email }}
    </div>

    <!-- Password -->
    <div class="password-wrapper">
      <input
        :type="showPassword ? 'text' : 'password'"
        v-model="form.password"
        class="input"
        autocomplete="new-password"
        placeholder="New Password"
      />

      <!-- Eye Icon Toggle -->
      <button
        type="button"
        class="toggle-password"
        @click="showPassword = !showPassword"
      >
        <!-- Eye Open -->
        <svg
          v-if="!showPassword"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          class="icon"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>

        <!-- Eye Closed -->
        <svg
          v-else
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          class="icon"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 012.374-4.568m3.181-2.475A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.98 9.98 0 01-4.043 5.166M9.878 9.878A3 3 0 0114.12 14.12M3 3l18 18" />
        </svg>
      </button>
    </div>

    <div v-if="form.errors.password" class="input-error">
      {{ form.errors.password }}
    </div>

    <button type="submit" class="submit-btn">
      Reset Password
    </button>
  </form>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  token: String,
  email: String,
})

const showPassword = ref(false)

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
form {
  padding: 5vw;
}

.input {
  width: 100%;
  border-bottom: 1px solid black !important;
  padding: 0.5rem 0;
  margin-bottom: 1rem;
  outline: none;
}

.password-wrapper {
  display: flex;
  align-items: center;
}

.toggle-password {
  border: none;
  background: transparent;
  cursor: pointer;
  padding: 4px;
  margin-left: 8px;
  display: flex;
  align-items: center;
}

.icon {
  width: 20px;
  height: 20px;
}

.submit-btn {
  border: 1px solid black !important;
  padding: 0.4rem 1rem;
  background: white;
  cursor: pointer;
}

.input-error {
  color: red;
  font-size: 0.85rem;
  margin-top: -0.5rem;
  margin-bottom: 1rem;
}
</style>





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

<!-- <template>
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
</script> -->