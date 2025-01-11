<!-- ProfileBanner.vue -->
<template>
    <div class="max-w-4xl mx-auto">
      <!-- Main Banner Container -->
      <div class="flex flex-col items-center gap-6 p-8 rounded-lg bg-pink-50 md:flex-row md:items-start">
        <!-- Profile Image -->
        <div class="w-24 h-24 md:w-32 md:h-32">
          <img
            src="/public/images/Nathan.jpg"
            alt="Profile"
            class="object-cover w-full h-full rounded-full"
          />
        </div>

        <!-- Content Container -->
        <div class="flex-1 text-center md:text-left">
          <!-- Header Text -->
          <h1 class="mb-2 text-xl text-gray-800">
            Hey, I'm <span class="font-medium text-purple-600">Matt</span>
            <span class="inline-block ml-2">
              <svg class="inline w-6 h-6" fill="red" viewBox="0 0 24 24">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
              </svg>
            </span>
          </h1>
          <p class="mb-4 text-gray-700">
            the creator behind SVG Backgrounds. I produce free and paid resources every month, sign up for alerts.
          </p>

          <!-- Buttons -->
          <div class="flex flex-wrap justify-center gap-4 md:justify-start">
            <button
              class="px-6 py-2 text-white transition-colors bg-purple-600 rounded-full hover:bg-purple-700"
              @click="getFreebies"
            >
              Get freebies
            </button>
            <a
              href="#"
              class="py-2 text-purple-600 transition-colors hover:text-purple-700"
              @click.prevent="seeLatestReleases"
            >
              See latest releases
            </a>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="mt-4">
        <ul class="flex flex-wrap justify-center gap-6 text-purple-600 md:justify-start">
          <li v-for="item in navigationItems" :key="item">
            <a
              href="#"
              class="hover:text-purple-800"
              @click.prevent="navigate(item.toLowerCase())"
            >
              {{ item }}
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </template>

  <script>
  export default {
    name: 'ProfileBanner',
    data() {
      return {
        navigationItems: [
          'Subscribe',
          'Login',
          'Home',
          'Demo',
          'Blog',
          'License',
          'Privacy',
          'Contact'
        ]
      }
    },
    methods: {
      getFreebies() {
        // Handle freebies button click
        console.log('Getting freebies')
      },
      seeLatestReleases() {
        // Handle latest releases link click
        console.log('Viewing latest releases')
      },
      navigate(route) {
        // Handle navigation
        console.log(`Navigating to: ${route}`)
      }
    }
  }
  </script>
