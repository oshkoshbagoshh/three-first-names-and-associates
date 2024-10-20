<template>
    <div class="bg-gradient-to-br from-purple-900 to-blue-900 p-8 text-white">
        <h2 class="text-4xl font-bold text-center mb-4">THREE FIRST NAMES</h2>
        <h3 class="text-2xl font-semibold text-center mb-8">MEDIA SOLUTIONS & MUSIC SERVICES</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div v-for="service in services" :key="service.title" class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img :src="service.image" :alt="service.title" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-bold text-purple-900 mb-2 flex items-center">
                        <component :is="service.icon" class="w-6 h-6 mr-2" />
                        {{ service.title }}
                    </h4>
                    <p class="text-gray-700 mb-4">{{ service.description }}</p>
                    <p class="text-sm text-gray-500">Give a detailed description of the service being provided here.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { VideoCameraIcon, ChartBarIcon, MusicalNoteIcon } from '@heroicons/vue/24/solid'

const services = ref([
    {
        title: "Technical CTV Vendor Management & Support",
        image: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80",
        description: "Comprehensive management and support for Connected TV vendors.",
        icon: VideoCameraIcon
    },
    {
        title: "TV/Video Media Insights & Optimization",
        image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80",
        description: "In-depth analysis and optimization strategies for TV and video media.",
        icon: ChartBarIcon
    },
    {
        title: "Custom Music Samples for Commercial Use",
        image: "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80",
        description: "Tailored music samples created specifically for commercial applications.",
        icon: MusicalNoteIcon
    }
]);
</script>
