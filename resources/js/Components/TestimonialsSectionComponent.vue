<template>
  <section class="min-h-screen bg-gradient-to-br from-purple-900 to-blue-900 text-white p-8">
    <div class="container mx-auto max-w-6xl">
      <h1 class="text-6xl font-bold mb-12">TESTIMONIALS</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <TestimonialCard v-for="(testimonial, index) in testimonials" :key="index" :testimonial="testimonial" />
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'
import TestimonialCard from './TestimonialCard.vue'

const testimonials = ref([
  {
    quote: "Testimonials are short quotes from people who love your brand. It's a great way to convince customers to try your services.",
    author: "Aaron Loeb",
    company: "Tully and Drive"
  },
  {
    quote: "Testimonials are short quotes from people who love your brand. It's a great way to convince customers to try your services.",
    author: "Rosa Maria Aguado",
    company: "Beal and Harlow"
  },
  {
    quote: "Testimonials are short quotes from people who love your brand. It's a great way to convince customers to try your services.",
    author: "Aaron Loeb",
    company: "Tully and Drive"
  },
  {
    quote: "Testimonials are short quotes from people who love your brand. It's a great way to convince customers to try your services.",
    author: "Saira Kohli",
    company: "The Plew"
  }
])
</script>

<style scoped>
/* Add any additional styles here if needed */
</style>