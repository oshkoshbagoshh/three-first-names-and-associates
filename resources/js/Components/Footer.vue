<template>
    <footer class="bg-gray-100 dark:bg-gray-800 py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ currentYear }} Three First Names & Associates. All rights reserved.</p>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',
    computed: {
        currentYear() {
            return new Date().getFullYear()
        }
    }
}
</script>
