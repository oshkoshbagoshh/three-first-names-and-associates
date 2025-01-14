<template>
    <div class="min-h-screen bg-gradient-to-br from-purple-900 to-blue-900 text-white p-8">
        <div class="container mx-auto max-w-4xl bg-white bg-opacity-10 p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold mb-6 pb-4 border-b-2 border-cyan-300">Terms and Conditions</h1>
            <p class="mb-4 text-cyan-300">Last updated: September 07, 2024</p>

            <div class="space-y-6 text-gray-100">
                <section v-for="(section, index) in sections" :key="index" class="mb-8">
                    <h2 class="text-2xl font-semibold mb-4 text-cyan-300">{{ index + 1 }}. {{ section.title }}</h2>
                    <div v-html="section.content" class="prose prose-sm prose-invert max-w-none"></div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TermsAndConditions',
    data() {
        return {
            sections: [
                {
                    title: "AGREEMENT TO OUR LEGAL TERMS",
                    content: `
            <p>We are Three First Names & Associates ("Company," "we," "us," "our"), a company registered in Illinois, United States at 2811 N Bell Ave, 208, Chicago, IL 60618.</p>
            <p>We operate the website tfnms.co (the "Site"), as well as any other related products and services that refer or link to these legal terms (the "Legal Terms") (collectively, the "Services").</p>
            <p>You can contact us by phone at 773 710 3016, email at hello@tfnms.co, or by mail to 2811 N Bell Ave, 208, Chicago, IL 60618, United States.</p>
            <p>These Legal Terms constitute a legally binding agreement made between you, whether personally or on behalf of an entity ("you"), and Three First Names & Associates, concerning your access to and use of the Services. You agree that by accessing the Services, you have read, understood, and agreed to be bound by all of these Legal Terms. IF YOU DO NOT AGREE WITH ALL OF THESE LEGAL TERMS, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SERVICES AND YOU MUST DISCONTINUE USE IMMEDIATELY.</p>
          `
                },
                {
                    title: "OUR SERVICES",
                    content: `
            <p>The information provided when using the Services is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Services from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.</p>
          `
                },
                // Add more sections here...
            ]
        }
    }
}
</script>

<style scoped>
/* Add any component-specific styles here */
</style>
