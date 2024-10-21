<template>
  <div class="bg-opacity-20 bg-purple-800 p-6 rounded-lg border border-purple-500">
    <p class="text-lg mb-4">{{ testimonial.quote }}</p>
    <p class="text-cyan-300 font-semibold">
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