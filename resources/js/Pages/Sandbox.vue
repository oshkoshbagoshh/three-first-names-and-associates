<template>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar is-light is-fixed-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">AdCreative</a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                        @click="isNavActive = !isNavActive">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" :class="{ 'is-active': isNavActive }">
                    <div class="navbar-end">
                        <a class="navbar-item" href="#home">Home</a>
                        <a class="navbar-item" href="#services">Services</a>
                        <a class="navbar-item" href="#portfolio">Portfolio</a>
                        <a class="navbar-item" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="hero is-fullheight hero-section">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <h1 class="title is-1 has-text-white">Creative Solutions for Your Brand</h1>
                            <p class="subtitle is-3 has-text-white">Transform your brand with cutting-edge advertising
                                strategies</p>
                            <button class="button is-primary is-large">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section">
            <div class="container">
                <h2 class="title is-2 has-text-centered mb-6">Our Services</h2>
                <div class="columns is-multiline">
                    <div class="column is-4" v-for="service in services" :key="service.id">
                        <div class="card">
                            <div class="card-content has-text-centered">
                                <span class="icon is-large">
                                    <i :class="service.icon + ' fa-3x'"></i>
                                </span>
                                <h5 class="title is-5 mt-4">{{ service.title }}</h5>
                                <p>{{ service.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="section has-background-light">
            <div class="container">
                <h2 class="title is-2 has-text-centered mb-6">Our Work</h2>
                <div class="columns is-multiline">
                    <div class="column is-4" v-for="project in portfolio" :key="project.id">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img :src="project.image" :alt="project.title">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="title is-4">{{ project.title }}</p>
                                <p class="subtitle is-6">{{ project.description }}</p>
                                <button class="button is-outlined is-primary">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section">
            <div class="container">
                <h2 class="title is-2 has-text-centered mb-6">Contact Us</h2>
                <div class="columns is-centered">
                    <div class="column is-half">
                        <form @submit.prevent="onSubmit">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" v-model="form.name" required>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input" type="email" v-model="form.email" required>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Message</label>
                                <div class="control">
                                    <textarea class="textarea" v-model="form.message" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary is-fullwidth">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer has-background-dark has-text-white">
            <div class="container has-text-centered">
                <p>&copy; 2024 AdCreative. All rights reserved.</p>
                <div class="mt-4">
                    <a href="#" class="mx-2 has-text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="mx-2 has-text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mx-2 has-text-white"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="mx-2 has-text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: 'Sandbox',
    data() {
        return {
            isNavActive: false,
            services: [
                {
                    id: 1,
                    icon: 'fas fa-digital',
                    title: 'Digital Marketing',
                    description: 'Strategic digital marketing solutions to grow your online presence'
                },
                {
                    id: 2,
                    icon: 'fas fa-paint-brush',
                    title: 'Creative Design',
                    description: 'Eye-catching designs that capture your brand essence'
                },
                {
                    id: 3,
                    icon: 'fas fa-chart-line',
                    title: 'Brand Strategy',
                    description: 'Comprehensive brand development and marketing strategies'
                }
            ],
            portfolio: [
                {
                    id: 1,
                    title: 'Brand Revolution',
                    description: 'Complete brand overhaul for Pagac, Stanton and Daugherty',
                    image: '/public/images/project1.jpg',
                },
                {
                    id: 2,
                    title: 'Digital Campaign',
                    description: 'Award-winning digital campaign for Inc,and Sons,LLC,Group',
                    image: '/public/images/project2.jpg'
                },
                {
                    id: 3,
                    title: 'Social Media Success',
                    description: 'Viral social media campaign for Funk - Quigley',
                    image: '/public/images/project3.jpg'
                }
            ],
            form: {
                name: '',
                email: '',
                message: '',
            }
        }
    },
    methods: {
        onSubmit() {
            console.log('Form submitted:', this.form)
        }
    }
}
</script>

<style>
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/public/images/Hero-bg-1.png');
    background-size: cover;
    background-position: center;
}

.card {
    height: 100%;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.footer a {
    transition: color 0.3s ease;
}

.footer a:hover {
    color: #3273dc !important;
}

.mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}

/* Add responsive styles */
@media screen and (max-width: 768px) {
    .title.is-1 {
        font-size: 2.5rem;
    }
}
</style>
