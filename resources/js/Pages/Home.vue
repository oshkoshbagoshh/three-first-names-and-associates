<template>
    <main class="container px-4 py-8 mx-auto">
        <HeroSection />

        <section id="tfn-media-services" class="mb-8">
            <AboutTfnMediaServices />
        </section>
        <hr>
        <section id="tfn-music-services" class="mb-8">
            <AboutTfnMusicServices />
        </section>
        <hr>
        <!--  HOLDER FOR SERVICES       -->
        <div>
            <ServicesSection />
        </div>
        <hr>
        <section id="faq" class="mb-8">
            <div>
                <FaqSection />
            </div>
        </section>
        <hr>
        <section id="aboutnathan" class="mb-8">
            <div>
                <AboutNathan />
            </div>
        </section>
        <hr>
        <section id="testimonials" class="mb-8">
            <div>
                <TestimonialsSectionComponent />
            </div>
        </section>
        <hr>

        <section id="about" class="mb-8">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">About Us</h2>
            <p>With nearly a decade of experience in media & advertising, Three First Names & Associates is a consulting
                firm dedicated to helping the ad industry excel in Connected TV (CTV). Our unique perspective spans
                traditional TV ad sales, distribution, media rights, and the technical intricacies of programmatic
                advertising for CTV.</p>
        </section>
        <hr>
        <section class="mb-8">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">Why Choose Us?</h2>
            <p>As CTV ad spend is projected to reach $44.3 billion by 2028, partnering with experts who understand both
                traditional TV and CTV is crucial. We help companies navigate the fragmented TV landscape, optimize
                their ad spend, and gain a competitive edge in the rapidly evolving world of CTV advertising.</p>
        </section>
        <hr>
        <section id="services" class="mb-8">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">Our Services</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div v-for="service in services" :key="service.title"
                    class="p-6 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <component :is="service.icon" class="w-8 h-8 mb-4 text-indigo dark:text-blue-violet" />
                    <h3 class="mb-2 text-xl font-semibold font-rubik">{{ service.title }}</h3>
                    <p>{{ service.description }}</p>
                </div>
            </div>
        </section>
        <hr>
        <section id="partnerships" class="mb-8">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">Partnerships</h2>
            <p>We're proud to partner with Le Moyne Consulting for technical resources and ComplySAM for secure and
                compliant data handling.</p>
        </section>

        <section id="music" class="mb-8">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">TFN Music Services</h2>
            <p>TFN Music Services offers expert guidance in audio production, mixing, and mastering for CTV and
                advertisements. We leverage our deep understanding of audio technology and industry standards to ensure
                your content sounds impeccable across all platforms.</p>
        </section>


        <section id="contact" class="mt-8 text-center">
            <h2 class="mb-4 text-2xl font-semibold font-rubik text-indigo dark:text-blue-violet">Contact Us</h2>
            <p>Ready to elevate your CTV advertising strategy? Get in touch with us today.</p>
            <CalendlyWidget url="https://calendly.com/ajavadi202/" height="700px" />
        </section>
    </main>
</template>

<script setup>
import HeroSection from '@/Components/HeroSection.vue'
import AboutTfnMusicServices from "@/Components/AboutTfnMusicServices.vue"
import AboutTfnMediaServices from "@/Components/AboutTfnMediaServices.vue"
import FaqSection from "@/Components/FaqSection.vue"
import ServicesSection from "@/Components/ServicesSection.vue"
import AboutNathan from "@/Components/AboutNathan.vue"
import TestimonialsSectionComponent from "@/Components/TestimonialsSectionComponent.vue"
import { ChartBarIcon, CodeBracketIcon, ShieldCheckIcon } from '@heroicons/vue/24/outline'
import CalendlyWidget from "@/Components/CalendlyWidget.vue"

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
</script>

<style scoped>
/* Add any component-specific styles here */
</style>
