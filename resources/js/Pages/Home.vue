<template>
    <main class="container mx-auto px-4 py-8">
        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">About Us</h2>
            <p>With nearly a decade of experience in media & advertising, Three First Names & Associates is a consulting firm dedicated to helping the ad industry excel in Connected TV (CTV). Our unique perspective spans traditional TV ad sales, distribution, media rights, and the technical intricacies of programmatic advertising for CTV.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Why Choose Us?</h2>
            <p>As CTV ad spend is projected to reach $44.3 billion by 2028, partnering with experts who understand both traditional TV and CTV is crucial. We help companies navigate the fragmented TV landscape, optimize their ad spend, and gain a competitive edge in the rapidly evolving world of CTV advertising.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div v-for="service in services" :key="service.title" class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
                    <component :is="service.icon" class="w-8 h-8 text-indigo dark:text-blue-violet mb-4" />
                    <h3 class="text-xl font-rubik font-semibold mb-2">{{ service.title }}</h3>
                    <p>{{ service.description }}</p>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Partnerships</h2>
            <p>We're proud to partner with Le Moyne Consulting for technical resources and ComplySAM for secure and compliant data handling.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">TFN Music Services</h2>
            <p>We're building a network to connect independent artists with music licensing opportunities, enhancing CTV ad experiences through personalized, context-matching music.</p>
        </section>

        <section class="text-center mt-8">
            <a href="#contact" class="inline-block bg-sapphire hover:bg-sapphire-dark dark:bg-blue-violet dark:hover:bg-indigo text-white font-rubik py-2 px-6 rounded transition duration-300">Contact Us</a>
        </section>
    </main>
</template>

<script>
import { defineComponent } from 'vue'
import { ChartBarIcon, CodeBracketIcon, ShieldCheckIcon } from '@heroicons/vue/24/outline'

export default defineComponent({
    name: 'Home',
    layout: undefined,
    setup() {
        const services = [
            {
                icon: ChartBarIcon,
                title: 'CTV Media Optimization',
                description: 'Maximize ROI with full-funnel, data-driven insights'
            },
            {
                icon: CodeBracketIcon,
                title: 'Technical Program Management',
                description: 'Get hands-on technical support, from troubleshooting coordination to API data integrations'
            },
            {
                icon: ShieldCheckIcon,
                title: 'Data Privacy Compliance',
                description: 'Stay ahead of privacy regulations and ensure compliant data strategies'
            }
        ]

        return {
            services
        }
    }
})
</script>
