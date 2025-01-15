<template>
  <div class="bg-opacity-20 bg-blue-700 p-6 rounded-lg border border-indigo-900">
    <p class="text-lg mb-4">{{ testimonial.quote }}</p>
    <p class="text-black-400 font-semibold">
      {{ testimonial.author }}, <span class="font-normal">{{ testimonial.company }}</span>
    </p>
  </div>
</template>

<script setup>
defineProps({
  testimonial: {
    type: Object,
    required: true
  }
})
</script>