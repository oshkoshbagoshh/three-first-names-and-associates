<template>
    <transition name="fade">
        <button
            v-show="showButton"
            @click="scrollToTop"
            class="fixed bottom-5 right-5 bg-indigo dark:bg-blue-violet text-white p-2 rounded-full shadow-lg hover:bg-sapphire dark:hover:bg-sapphire-dark transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            aria-label="Scroll to top"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
    </transition>
</template>

<script>
import { ref, onMounted, onUnmounted } from 'vue'

export default {
    name: 'ScrollToTop',
    setup() {
        const showButton = ref(false)

        const checkScroll = () => {
            showButton.value = window.pageYOffset > 300
        }

        const scrollToTop = () => {
            window.scrollTo({ top: 0, behavior: 'smooth' })
        }

        onMounted(() => {
            window.addEventListener('scroll', checkScroll)
        })

        onUnmounted(() => {
            window.removeEventListener('scroll', checkScroll)
        })

        return {
            showButton,
            scrollToTop
        }
    }
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.3s;
}
.fade-enter-from, .fade-leave-to {
    opacity: 0;
}
</style>
