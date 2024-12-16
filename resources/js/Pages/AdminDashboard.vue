<!-- AdminDashboard.vue -->
<template>
    <div class="min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 w-64 bg-blue-800 text-white">
            <div class="p-4">
                <h2 class="text-2xl font-bold">Admin Panel</h2>
            </div>

            <nav class="mt-8">
                <div class="px-4 space-y-2">
                    <router-link v-for="item in navigationItems" :key="item.name" :to="item.route"
                        class="flex items-center px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <component :is="item.icon" class="w-5 h-5 mr-3" />
                        {{ item.name }}
                    </router-link>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="ml-64">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-8 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>

                    <!-- User Menu -->
                    <div class="relative">
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-700">{{ user.name }}</span>
                            <img :src="user.avatar" :alt="user.name"
                                class="w-10 h-10 rounded-full border-2 border-gray-200">
                            <button @click="logout" class="text-sm text-red-600 hover:text-red-800">
                                Logout
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="p-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div v-for="stat in stats" :key="stat.name" class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <component :is="stat.icon" class="w-12 h-12 text-blue-600" />
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">{{ stat.name }}</h3>
                                <p class="text-2xl font-semibold">{{ stat.value }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-4">Recent Activity</h2>
                        <div class="space-y-4">
                            <div v-for="activity in recentActivity" :key="activity.id"
                                class="flex items-center p-4 border-b last:border-0">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-800">{{ activity.description }}</p>
                                    <p class="text-sm text-gray-500">{{ activity.time }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue'
import {
    HomeIcon,
    UsersIcon,
    ChartBarIcon,
    CogIcon,
    DocumentTextIcon,
    ShoppingCartIcon,
    UserGroupIcon,
    CurrencyDollarIcon
} from '@heroicons/vue/24/outline'

export default {
    name: 'AdminDashboard',

    setup() {
        const user = ref({
            name: 'John Doe',
            avatar: 'https://ui-avatars.com/api/?name=John+Doe'
        })

        const navigationItems = [
            { name: 'Dashboard', icon: HomeIcon, route: '/' },
            { name: 'Users', icon: UsersIcon, route: '/users' },
            { name: 'Analytics', icon: ChartBarIcon, route: '/analytics' },
            { name: 'Settings', icon: CogIcon, route: '/settings' },
        ]

        const stats = [
            { name: 'Total Users', value: '1,234', icon: UserGroupIcon },
            { name: 'Total Revenue', value: '$12,345', icon: CurrencyDollarIcon },
            { name: 'Active Projects', value: '12', icon: DocumentTextIcon },
            { name: 'New Orders', value: '89', icon: ShoppingCartIcon },
        ]

        const recentActivity = [
            {
                id: 1,
                description: 'New user registration',
                time: '5 minutes ago'
            },
            {
                id: 2,
                description: 'Project "Marketing Campaign" created',
                time: '2 hours ago'
            },
            {
                id: 3,
                description: 'Monthly report generated',
                time: '1 day ago'
            },
        ]

        const logout = () => {
            // Implement logout logic here
            console.log('Logging out...')
        }

        return {
            user,
            navigationItems,
            stats,
            recentActivity,
            logout
        }
    }
}
</script>
