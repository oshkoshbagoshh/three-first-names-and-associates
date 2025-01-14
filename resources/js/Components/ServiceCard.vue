<!-- resources/js/Components/Services/ServiceCard.vue -->
<script setup>
import { Icon } from '@heroicons/vue';

defineProps({
  title: String,
  description: String,
  icon: String
})
</script>

<template>
  <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
    <Icon :name="icon" class="w-12 h-12 text-indigo-600 mb-4" />
    <h3 class="text-xl font-semibold mb-2">{{ title }}</h3>
    <p class="text-gray-600">{{ description }}</p>
  </div>
</template>
