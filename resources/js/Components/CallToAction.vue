<template>
  <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
    <button
      @click="scrollToSection('contact')"
      class="px-8 py-4 bg-blue-violet hover:bg-sapphire text-white font-bold rounded-full transform transition-all hover:scale-105 hover:shadow-lg"
      ref="ctaButtonRef"
    >
      {{ primaryButtonText }}
    </button>

    <button
      @click="scrollToSection('services')"
      class="px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-blue-violet font-bold rounded-full transform transition-all hover:scale-105"
    >
      {{ secondaryButtonText }}
    </button>
  </div>
</template>

<script setup>
import { ref } from 'vue'

// Reactive references
const ctaButtonRef = ref(null)
const primaryButtonText = ref('Schedule a Consultation')
const secondaryButtonText = ref('Explore Services')

// Methods
const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId)
  if (element) {
    element.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  }
}
</script>

<style scoped>
/* Add any component-specific styles */
</style>
