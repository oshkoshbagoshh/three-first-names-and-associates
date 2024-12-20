<template>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">AdCreative</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header id="home" class="hero-section vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold">Creative Solutions for Your Brand</h1>
                        <p class="lead">Transform your brand with cutting-edge advertising strategies</p>
                        <b-button variant="primary" size="lg" class="mt-3">Get Started</b-button>
                    </div>
                </div>
            </div>
        </header>


        <!-- Services Section -->
        <section id="services" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Our Services</h2>
                <div class="row g-4">
                    <div class="col-md-4" v-for="service in services" :key="service.id">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i :class="service.icon + ' fa-3x mb-3'"></i>
                                <h5 class="card-title">{{ service.title }}</h5>
                                <p class="card-text">{{ service.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Portfolio Section -->

        <section id="portfolio" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Our Work</h2>
                <b-row>
                    <b-col md="4" v-for="project in portfolio" :key="project.id" class="mb-4">
                        <b-card :img-src="project.image" :img-alt="project.title" img-top>
                            <b-card-title>{{ project.title }}</b-card-title>
                            <b-card-text>{{ project.description }}</b-card-text>
                            <b-button variant="outline-primary">View Details</b-button>
                        </b-card>
                    </b-col>
                </b-row>
            </div>
        </section>



        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Contact Us</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <b-form @submit="onSubmit">
                            <b-form-group label="Name">
                                <b-form-input v-model="form.name" required></b-form-input>
                            </b-form-group>

                            <b-form-group label="Email">
                                <b-form-input type="email" v-model="form.email" required></b-form-input>
                            </b-form-group>

                            <b-form-group label="Message">
                                <b-form-textarea v-model="form.message" rows="5" required></b-form-textarea>
                            </b-form-group>

                            <b-button type="submit" variant="primary" class="w-100">
                                Send Message
                            </b-button>

                        </b-form>
                    </div>
                </div>
            </div>
        </section>




        <!-- Footer -->
        <footer class="bg-dark text-light py-4">
            <div class="container text-center">
                <p>&copy; 2024 AdCreative. All rights reserved.</p>
                <div class="social-links">
                    <a href="#" class="mx-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>


    </div>
</template>

<!-- Script -->
<script>
import { data } from 'autoprefixer';

export default {
    name: 'Sandbox',
    data() {
        return {
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
        onSubmit(event) {
            //TODO: handle form submission
            console.log('Form submitted:', this.form)
        }
    }

}
console.table(data);
</script>
<style>
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/public/images/Hero-bg-1.png');
    background-size: cover;
    background-position: center;
    color: white;
}

.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.social-links a {
    color: white;
    text-decoration: none;
}

.social-links a:hover {
    color: #007bff;
}

/* Add responsive styles */
@media (max-width: 768px) {
    .hero-section {
        text-align: center;
    }

    .display-4 {
        font-size: 2.5rem;
    }
}
</style>
