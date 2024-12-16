<template>
    <div class="min-h-screen bg-smokyBlack text-white font-openSans">
      <header class="bg-indigo text-center py-8">
        <h1 class="text-4xl font-rubik">TFN Media & Music Services</h1>
      </header>
      <main class="p-8">
        <form @submit.prevent="submitForm" class="max-w-lg mx-auto bg-blueViolet p-6 rounded-lg">
          <div class="mb-4">
            <label for="name" class="block text-sm font-bold">Name</label>
            <input type="text" v-model="form.name" id="name" class="w-full p-2 rounded" />
          </div>
          <div class="mb-4">
            <label for="email" class="block text-sm font-bold">Email</label>
            <input type="email" v-model="form.email" id="email" class="w-full p-2 rounded" />
          </div>
          <div class="mb-4">
            <label for="company" class="block text-sm font-bold">Company</label>
            <input type="text" v-model="form.company" id="company" class="w-full p-2 rounded" />
          </div>
          <div class="mb-4">
            <label for="service" class="block text-sm font-bold">Service</label>
            <select v-model="form.service" id="service" class="w-full p-2 rounded">
              <option value="Media Solutions">Media Solutions</option>
              <option value="Music Services">Music Services</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="message" class="block text-sm font-bold">Message</label>
            <textarea v-model="form.message" id="message" class="w-full p-2 rounded"></textarea>
          </div>
          <button type="submit" class="bg-electricBlue text-smokyBlack px-4 py-2 rounded">Submit</button>
        </form>
      </main>
    </div>
  </template>

  <script>
  import { ref } from 'vue';
  import { useForm } from '@inertiajs/vue3';

  export default {
    setup() {
      const form = useForm({
        name: '',
        email: '',
        company: '',
        service: '',
        message: '',
      });

      const submitForm = () => {
        form.post('/submit-form');
      };

      return { form, submitForm };
    },
  };
  </script>
