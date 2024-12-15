<template>
  <div class="h-full bg-white dark:bg-smoky-black text-smoky-black dark:text-white font-sans">
    <!-- -->


    <!-- Navigation -->
    <Header/>
    <!-- Navigation -->
    <nav class="bg-gray-100 dark:bg-gray-800 py-4">
      <div class="container mx-auto px-4 flex items-center justify-between">
        <!--                HOME LOGO -->
        <LogoHome/>
        <ul class="flex justify-center space-x-6">
          <li><a @click.prevent="scrollToSection('about')" href="#about"
                 class="text-indigo dark:text-blue-violet hover:text-sapphire dark:hover:text-sapphire">About</a></li>
          <li><a @click.prevent="scrollToSection('services')" href="#services"
                 class="text-indigo dark:text-blue-violet hover:text-sapphire dark:hover:text-sapphire">Services</a>
          </li>
          <li><a @click.prevent="scrollToSection('partnerships')" href="#partnerships"
                 class="text-indigo dark:text-blue-violet hover:text-sapphire dark:hover:text-sapphire">Partnerships</a>
          </li>
          <li><a @click.prevent="scrollToSection('music')" href="#music"
                 class="text-indigo dark:text-blue-violet hover:text-sapphire dark:hover:text-sapphire">Music
            Services</a></li>
          <li><a @click.prevent="scrollToSection('contact')" href="#contact"
                 class="text-indigo dark:text-blue-violet hover:text-sapphire dark:hover:text-sapphire">Contact</a></li>
        </ul>
      </div>
    </nav>


    <!--        Main content -->
    <slot></slot>
    <!--        -->
    <Footer/>

    <ScrollToTop/>
    <!-- Dark Mode Toggle Button -->
    <!--        <button @click="toggleDarkMode" class="fixed top-4 right-4 z-50 p-2 bg-gray-200 dark:bg-gray-800 rounded-full"></button>-->
  </div>
</template>

<script>
import {ref} from 'vue'
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
import LogoHome from "@/Components/LogoHome.vue";
import ScrollToTop from "@/Components/ScrollToTop.vue";


export default {
  name: 'MainLayout',
  components: {
    ScrollToTop,
    LogoHome,
    Header,
    Footer
  },
  setup() {
    const darkMode = ref(false)

    const toggleDarkMode = () => {
      darkMode.value = !darkMode.value
    }

    const scrollToSection = (sectionId) => {
      const element = document.getElementById(sectionId)
      if (element) {
        element.scrollIntoView({behavior: 'smooth'})
      }

    }

    return {
      darkMode,
      toggleDarkMode,
      scrollToSection
    }
  }
}
</script>
