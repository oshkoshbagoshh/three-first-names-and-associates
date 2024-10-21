<template>
  <button 
    @click="scrollToTop" 
    class="fixed bottom-5 right-5 bg-purple-900 text-white p-2 rounded-full shadow-lg hover:bg-purple-700 transition-colors duration-300"
    :class="{ 'opacity-0': !showButton, 'opacity-100': showButton }"
  >
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
  </button>
</template>

<script>
export default {
  name: 'BackToTop',
  data() {
    return {
      showButton: false
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll)
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    handleScroll() {
      this.showButton = window.scrollY > 200
    },
    scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      })
    }
  }
}
</script>