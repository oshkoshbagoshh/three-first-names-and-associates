<template>
    <section id="partnerships" class="mb-8">
        <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">Partnerships</h2>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div v-for="partner in partners" :key="partner.id"
                class="p-6 transition-all duration-300 bg-gray-100 rounded-lg hover:shadow-lg dark:bg-gray-800">
                <div class="flex items-center mb-4 space-x-4">
                    <img v-if="partner.logo" :src="partner.logo" :alt="partner.name" class="w-12 h-12 rounded">
                    <h3 class="text-xl font-semibold font-rubik">{{ partner.name }}</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300">{{ partner.description }}</p>
                <a v-if="partner.website" :href="partner.website" target="_blank"
                    class="inline-block mt-4 text-indigo hover:text-blue-violet dark:text-blue-violet">
                    Learn More →
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
defineProps({
    partners: {
        type: Array,
        required: true,
        default: () => []
    }
});
</script>
