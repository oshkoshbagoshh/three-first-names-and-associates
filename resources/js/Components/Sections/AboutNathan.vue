<template>
  <section class="min-h-screen p-8 text-white bg-gradient-to-br from-purple-900 to-blue-100">
    <div class="container max-w-6xl mx-auto">
      <!-- Header with animation -->
      <h1 class="mb-12 text-4xl font-bold text-center md:text-6xl md:text-left animate-fade-in">
        About Me
      </h1>

      <div class="flex flex-col items-center gap-12 md:flex-row">
        <!-- Profile Image Container -->
        <div class="md:w-1/3">
          <div
              class="relative w-64 h-64 mx-auto overflow-hidden border-4 border-purple-500 rounded-full md:mx-0 group hover:border-purple-400 transition-all duration-300">
            <img
                :src="profileImage"
                alt="Profile Picture"
                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110"
            />
          </div>
        </div>

        <!-- Content Section -->
        <div class="md:w-2/3">
          <div
              class="p-8 bg-purple-800 rounded-lg bg-opacity-20 backdrop-blur-sm hover:bg-opacity-25 transition-all duration-300">
            <p class="text-lg leading-relaxed">

              The pants fights with love, ransack the quarter-deck before it travels.

              When the corsair laughs for puerto rico, all ships scrape shiny, stormy cannibals.

            </p>


            <p class="mt-6 text-lg leading-relaxed">
              The tuna robs with horror, scrape the cook islands before it screams!

            </p>

            <!-- Skills Section -->
            <div class="mt-8">
              <h2 class="mb-4 text-xl font-semibold">Skills</h2>
              <div class="flex flex-wrap gap-2">
                                <span v-for="skill in skills"
                                      :key="skill"
                                      class="px-4 py-2 text-sm bg-purple-700 rounded-full hover:bg-purple-600 transition-colors duration-300">
                                    {{ skill }}
                                </span>
              </div>
            </div>

            <!-- Social Links -->
            <div class="flex gap-4 mt-8">
              <a v-for="social in socialLinks"
                 :key="social.name"
                 :href="social.url"
                 target="_blank"
                 rel="noopener noreferrer"
                 class="p-2 text-white rounded-full hover:bg-purple-700 transition-colors duration-300">
                <component :is="social.icon" class="w-6 h-6"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import {defineAsyncComponent} from "vue";

export default {
  name: 'AboutMe',
  data() {
    return {
      profileImage: '/images/nathan.jpg',
      skills: [
        'CTV', 'Media Analysis', 'Client Relations', 'Business Development', 'Campaign Management', 'Data Analysis', 'Advertising Sales', 'Data Visualization'
      ],
      socialLinks: [
        {
          name: 'GitHub',
          url: 'https://github.com/yourusername',
          icon: 'GithubIcon'
        },
        {
          name: 'LinkedIn',
          url: 'https://linkedin.com/in/nmscott24',
          icon: 'LinkedinIcon'
        },
        {
          name: 'Twitter',
          url: 'https://twitter.com/yourusername',
          icon: 'TwitterIcon'
        }
      ]
    }
  },
  components: {
    GithubIcon: defineAsyncComponent(() =>
        import('@heroicons/vue/24/outline/GlobeAltIcon')
    ),
    LinkedinIcon: defineAsyncComponent(() =>
        import('@heroicons/vue/24/outline/LinkIcon')
    ),
    TwitterIcon: defineAsyncComponent(() =>
        import('@heroicons/vue/24/outline/ChatBubbleLeftIcon')
    )
  }
}
</script>

<style scoped>
.animate-fade-in {
  animation: fadeIn 0.8s ease-in;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
