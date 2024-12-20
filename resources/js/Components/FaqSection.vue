<template>
  <section id="faq" class="mb-8">
    <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Frequently Asked Questions</h2>
    <div v-for="(item, index) in faqs" :key="index" class="mb-4">
      <button @click="toggle(index)" class="w-full text-left p-4 bg-gray-200 dark:bg-gray-700 rounded-lg">
        {{ item.question }}
      </button>
      <transition name="fade">
        <p v-if="isOpen(index)" class="p-4 bg-gray-100 dark:bg-gray-800 rounded-lg">{{ item.answer }}</p>
      </transition>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const faqs = [
  { question: 'What is CTV advertising?', answer: 'Connected TV advertising refers to ads served on internet-connected devices...' },
  { question: 'How can I measure success?', answer: 'Success can be measured through various KPIs such as impressions, clicks...' },
  { question: 'How can I measure success?', answer: 'Success can be measured through various KPIs such as impressions, clicks...' },
  // Add more FAQs as needed
];

const openIndex = ref(null);

const toggle = (index) => {
  openIndex.value = openIndex.value === index ? null : index;
};

const isOpen = (index) => openIndex.value === index;
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
