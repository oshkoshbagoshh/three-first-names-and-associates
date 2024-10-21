<template>
    <footer class="bg-purple-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">Three First Names & Associates</h3>
                    <p class="mt-2">Innovative solutions for your business needs</p>
                </div>
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-cyan-300 transition-colors duration-300">Home</a></li>
                        <li><a href="/services" class="hover:text-cyan-300 transition-colors duration-300">Services</a></li>
                        <li><a href="/about" class="hover:text-cyan-300 transition-colors duration-300">About Us</a></li>
                        <li><a href="/contact" class="hover:text-cyan-300 transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h4 class="text-lg font-semibold mb-2">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="/privacy-policy" class="hover:text-cyan-300 transition-colors duration-300">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions" class="hover:text-cyan-300 transition-colors duration-300">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-4 border-t border-purple-800 text-center">
                <p>&copy; {{ new Date().getFullYear() }} Three First Names & Associates. All rights reserved.</p>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'AppFooter'
}
</script>
