<template>
  <footer class="bg-purple-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-xl font-bold mb-4">Three First Names & Associates</h3>
          <p>Innovative solutions for your business needs</p>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Home</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Services</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">About Us</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-2">Legal</h4>
          <ul class="space-y-2">
            <li><a href="#" @click.prevent="showPrivacyPolicy = true" class="hover:text-cyan-300 transition-colors duration-300">Privacy Policy</a></li>
            <li><a href="#" @click.prevent="showTerms = true" class="hover:text-cyan-300 transition-colors duration-300">Terms and Conditions</a></li>
            <li><a href="#" @click.prevent="showCookiePolicy = true" class="hover:text-cyan-300 transition-colors duration-300">Cookie Policy</a></li>
            <li><a href="#" @click.prevent="showDisclaimer = true" class="hover:text-cyan-300 transition-colors duration-300">Disclaimer</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-2">Connect</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Facebook</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Twitter</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">LinkedIn</a></li>
            <li><a href="#" class="hover:text-cyan-300 transition-colors duration-300">Instagram</a></li>
          </ul>
        </div>
      </div>
      <div class="mt-8 pt-4 border-t border-purple-800 text-center">
        <p>&copy; {{ new Date().getFullYear() }} Three First Names & Associates. All rights reserved.</p>
      </div>
    </div>

    <!-- Modals -->
    <Modal :show="showPrivacyPolicy" title="Privacy Policy" @close="showPrivacyPolicy = false">
      <div class="text-gray-700">
        <h2 class="text-xl font-semibold mb-2">1. Introduction</h2>
        <p class="mb-4">This Privacy Policy explains how Three First Names & Associates collects, uses, and protects your personal information.</p>

        <h2 class="text-xl font-semibold mb-2">2. Information We Collect</h2>
        <ul class="list-disc list-inside mb-4">
          <li>Personal information you provide to us</li>
          <li>Information we collect automatically</li>
          <li>Information from third parties</li>
        </ul>

        <!-- Add more sections as needed -->

        <h2 class="text-xl font-semibold mb-2">10. Contact Us</h2>
        <p>If you have any questions about this Privacy Policy, please contact us at:</p>
        <p>Email: privacy@threefirstnames.com</p>
        <p>Address: 123 Main St, Anytown, USA 12345</p>
      </div>
    </Modal>

<!--TODO: ADD TERMS AND CONDITIONS ETC -->
<!--      TODO: HAVE SAM LOOK OVER LEGAL STUFF -->
    <Modal :show="showTerms" title="Terms and Conditions" @close="showTerms = false">
      <!-- Add Terms and Conditions content here -->
      <p class="text-gray-700">This is where you would put your Terms and Conditions content.</p>
    </Modal>

    <Modal :show="showCookiePolicy" title="Cookie Policy" @close="showCookiePolicy = false">
      <!-- Add Cookie Policy content here -->
      <p class="text-gray-700">This is where you would put your Cookie Policy content.</p>
    </Modal>

    <Modal :show="showDisclaimer" title="Disclaimer" @close="showDisclaimer = false">
      <!-- Add Disclaimer content here -->
      <p class="text-gray-700">This is where you would put your Disclaimer content.</p>
    </Modal>
  </footer>
</template>

<script>
import Modal from './Modal.vue'

export default {
  name: 'Footer',
  components: {
    Modal
  },
  data() {
    return {
      showPrivacyPolicy: false,
      showTerms: false,
      showCookiePolicy: false,
      showDisclaimer: false
    }
  }
}
</script>
