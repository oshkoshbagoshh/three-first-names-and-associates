<template>
  <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
      <img 
        src="https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" 
        alt="Hero Background" 
        class="w-full h-full object-cover"
        ref="heroImage"
      />
      <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-blue-900/90"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center px-4" ref="content">
      <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
        Transform Your Digital Presence
      </h1>
      <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
        Elevate your brand with cutting-edge CTV solutions and professional music services
      </p>
      
      <CallToAction />
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import { gsap } from 'gsap'
import CallToAction from '../CallToAction.vue'

const heroImage = ref(null)
const content = ref(null)

onMounted(() => {
  // Initial animation timeline
  const tl = gsap.timeline()
  
  tl.from(heroImage.value, {
    scale: 1.2,
    duration: 1.5,
    ease: 'power2.out'
  })
  
  tl.from(content.value.children, {
    y: 100,
    opacity: 0,
    duration: 0.8,
    stagger: 0.2,
    ease: 'power2.out'
  }, '-=1')
})
</script>