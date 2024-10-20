<template>
    <main class="container mx-auto px-4 py-8">
        <section id="about" class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">About Us</h2>
            <p>With nearly a decade of experience in media & advertising, Three First Names & Associates is a consulting firm dedicated to helping the ad industry excel in Connected TV (CTV). Our unique perspective spans traditional TV ad sales, distribution, media rights, and the technical intricacies of programmatic advertising for CTV.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Why Choose Us?</h2>
            <p>As CTV ad spend is projected to reach $44.3 billion by 2028, partnering with experts who understand both traditional TV and CTV is crucial. We help companies navigate the fragmented TV landscape, optimize their ad spend, and gain a competitive edge in the rapidly evolving world of CTV advertising.</p>
        </section>

        <section id="services" class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div v-for="service in services" :key="service.title" class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
                    <component :is="service.icon" class="w-8 h-8 text-indigo dark:text-blue-violet mb-4" />
                    <h3 class="text-xl font-rubik font-semibold mb-2">{{ service.title }}</h3>
                    <p>{{ service.description }}</p>
                </div>
            </div>
        </section>

        <section id="partnerships" class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Partnerships</h2>
            <p>We're proud to partner with Le Moyne Consulting for technical resources and ComplySAM for secure and compliant data handling.</p>
        </section>

        <section id="music" class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">TFN Music Services</h2>
            <p>TFN Music Services offers expert guidance in audio production, mixing, and mastering for CTV and advertisements. We leverage our deep understanding of audio technology and industry standards to ensure your content sounds impeccable across all platforms.</p>
        </section>

        <section id="contact" class="text-center mt-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Contact Us</h2>
            <p>Ready to elevate your CTV advertising strategy? Get in touch with us today.</p>
            <!-- Add your contact form or contact information here -->
        </section>
    </main>
</template>

<script>
import { defineComponent } from 'vue'
import { ChartBarIcon, CodeBracketIcon, ShieldCheckIcon } from '@heroicons/vue/24/outline'

export default defineComponent({
    name: 'Home',
    setup() {
        const services = [
            {
                title: 'CTV Strategy Consulting',
                description: 'Develop comprehensive strategies to maximize your CTV advertising impact.',
                icon: ChartBarIcon
            },
            {
                title: 'Technical Integration',
                description: 'Seamlessly integrate CTV advertising technologies into your existing infrastructure.',
                icon: CodeBracketIcon
            },
            {
                title: 'Compliance & Security',
                description: 'Ensure your CTV advertising meets all regulatory requirements and security standards.',
                icon: ShieldCheckIcon
            }
        ]

        return {
            services
        }
    }
})
</script>

<style scoped>
/* Add any component-specific styles here */
</style>
