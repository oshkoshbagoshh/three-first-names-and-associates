<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  message: ''
})

const submit = () => {
  form.post(route('contact.send'), {
    preserveScroll: true,
    onSuccess: () => form.reset()
  })
}
</script>

<template>
  <form @submit.prevent="submit" class="space-y-6">
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input
          id="name"
          v-model="form.name"
          type="text"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input
          id="email"
          v-model="form.email"
          type="email"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      >
    </div>

    <div>
      <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
      <textarea
          id="message"
          v-model="form.message"
          rows="4"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
      ></textarea>
    </div>

    <button
        type="submit"
        :disabled="form.processing"
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
    >
      Send Message
    </button>
  </form>
</template>
