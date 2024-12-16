<template>
  <section 
    class="section py-16 px-4 md:px-8 relative overflow-hidden glass-effect"
    :class="{'bg-gradient-to-br from-purple-900/90 to-blue-900/90': hasGradient}"
  >
    <div class="container mx-auto max-w-7xl">
      <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center" 
          data-aos="fade-up">
        <slot name="title" />
      </h2>
      <div data-aos="fade-up" data-aos-delay="200">
        <slot />
      </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
  hasGradient: {
    type: Boolean,
    default: false
  }
})
</script>