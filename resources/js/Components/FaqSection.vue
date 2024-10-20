<template>
    <div class="bg-gradient-to-br from-purple-900 to-blue-900 p-8 text-white">
        <h2 class="text-4xl font-bold text-center mb-8">FAQS</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div v-for="(faq, index) in faqs" :key="index" class="bg-purple-700 rounded-lg overflow-hidden">
                <div class="bg-purple-600 p-4">
                    <h3 class="text-xl font-semibold">{{ faq.question }}</h3>
                </div>
                <div class="p-4 bg-white text-purple-900">
                    <p>{{ faq.answer }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const faqs = ref([
    {
        question: "What is the advantage of hiring a consultant instead of doing it in-house?",
        answer: "Having an FAQ section is a great way to present information about your product or service. Using the question-and-answer format makes it more relatable to your users."
    },
    {
        question: "What kind of deliverables are to be expected?",
        answer: "Having an FAQ section is a great way to present information about your product or service. Using the question-and-answer format makes it more relatable to your users."
    },
    {
        question: "How long will the project take and how long until results can be measured?",
        answer: "Having an FAQ section is a great way to present information about your product or service. Using the question-and-answer format makes it more relatable to your users."
    }
]);
</script>
