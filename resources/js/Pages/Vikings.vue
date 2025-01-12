<script setup>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        tfn: {
          indigo: '#440381',
          'blue-violet': '#8338EC',
          'electric-blue': '#51E5FF',
          sapphire: '#0056BF',
          'smoky-black': '#100B00'
        }
      },
      fontFamily: {
        'open-sans': ['"Open Sans"', 'sans-serif'],
        'rubik': ['Rubik', 'sans-serif'],
      }
    }
  }
}

</script>

<template>
<!--  <main class="container px-4 py-8 mx-auto">-->

<!--  TODO: FIX THE HEADERS-->
  <body class="font-open-sans text-tfn-smoky-black overflow-x-hidden">
  <!-- Navigation -->
<!--  <nav class="fixed w-full bg-white/90 backdrop-blur-md z-50 shadow-sm">-->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <div class="flex items-center">
          <span class="text-2xl font-bold font-rubik text-tfn-indigo tracking-wider">TFN</span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-8">
            <a href="#" class="text-tfn-smoky-black hover:text-tfn-indigo transition-colors duration-300 font-semibold">Home</a>
            <a href="#" class="text-tfn-smoky-black hover:text-tfn-indigo transition-colors duration-300 font-semibold">Services</a>
            <a href="#" class="text-tfn-smoky-black hover:text-tfn-indigo transition-colors duration-300 font-semibold">About</a>
            <a href="#" class="text-tfn-smoky-black hover:text-tfn-indigo transition-colors duration-300 font-semibold">Contact</a>
            <a href="#" class="bg-tfn-sapphire text-white px-6 py-3 rounded-full hover:bg-tfn-indigo transition-colors duration-300 font-rubik">Get Started</a>
          </div>
        </div>
      </div>
    </div>


  <!-- Hero Section with Blobs -->
  <div class="relative min-h-screen gradient-bg overflow-hidden">
    <!-- Animated Blobs -->
    <div class="blob animate-float" style="top: 10%; left: 5%; width: 600px; height: 600px; background: radial-gradient(circle at center, rgba(81, 229, 255, 0.3), transparent 70%);"></div>
    <div class="blob animate-float" style="animation-delay: -2s; top: 40%; right: -10%; width: 500px; height: 500px; background: radial-gradient(circle at center, rgba(131, 56, 236, 0.3), transparent 70%);"></div>
    <div class="blob animate-pulse-slow" style="bottom: -10%; left: 30%; width: 400px; height: 400px; background: radial-gradient(circle at center, rgba(0, 86, 191, 0.3), transparent 70%);"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32">
      <div class="text-white max-w-3xl">
        <h1 class="font-rubik text-5xl md:text-6xl font-bold mb-6 leading-tight">
          Building The Network of Tomorrow
        </h1>
        <p class="text-xl mb-8 opacity-90">
          Transform your digital infrastructure with our cutting-edge networking solutions designed for the future.
        </p>
        <div class="space-x-4">
          <a href="#" class="bg-white text-tfn-indigo px-8 py-4 rounded-full inline-block hover:bg-tfn-electric-blue hover:text-white transition-colors duration-300 font-rubik font-bold">
            Start Your Journey
          </a>
          <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full inline-block hover:bg-white hover:text-tfn-indigo transition-colors duration-300 font-rubik font-bold">
            Learn More
          </a>
        </div>
      </div>
    </div>

    <!-- Wave Shape Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden">
      <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-24">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              fill="#ffffff"></path>
      </svg>
    </div>
  </div>

  <!-- Features Section with Organic Shapes -->
  <section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Shapes -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-tfn-electric-blue/10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-tfn-blue-violet/10 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold font-rubik text-tfn-indigo mb-4">Why Choose TFN</h2>
        <p class="text-xl text-tfn-smoky-black/80">Experience the next generation of networking technology</p>
      </div>
      <div class="grid md:grid-cols-3 gap-12">
        <div class="bg-white/50 backdrop-blur-md p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-tfn-blue-violet/10 rounded-full blur-xl transform translate-x-1/2 -translate-y-1/2"></div>
          <div class="relative">
            <div class="w-14 h-14 bg-tfn-blue-violet rounded-2xl mb-6 flex items-center justify-center transform rotate-3">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="font-rubik text-xl font-bold text-tfn-indigo mb-4">High Performance</h3>
            <p class="text-tfn-smoky-black/80">Experience lightning-fast speeds and unmatched reliability with our advanced network infrastructure.</p>
          </div>
        </div>
        <div class="bg-white/50 backdrop-blur-md p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-tfn-sapphire/10 rounded-full blur-xl transform translate-x-1/2 -translate-y-1/2"></div>
          <div class="relative">
            <div class="w-14 h-14 bg-tfn-sapphire rounded-2xl mb-6 flex items-center justify-center transform -rotate-3">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
              </svg>
            </div>
            <h3 class="font-rubik text-xl font-bold text-tfn-indigo mb-4">Enterprise Security</h3>
            <p class="text-tfn-smoky-black/80">Protected by state-of-the-art security measures ensuring your data remains safe and private.</p>
          </div>
        </div>
        <div class="bg-white/50 backdrop-blur-md p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-tfn-electric-blue/10 rounded-full blur-xl transform translate-x-1/2 -translate-y-1/2"></div>
          <div class="relative">
            <div class="w-14 h-14 bg-tfn-electric-blue rounded-2xl mb-6 flex items-center justify-center transform rotate-3">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
              </svg>
            </div>
            <h3 class="font-rubik text-xl font-bold text-tfn-indigo mb-4">Smart Scaling</h3>
            <p class="text-tfn-smoky-black/80">Automatically adapt to your needs with our intelligent scaling technology.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Curved Shape Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden">
      <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-24">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
              fill="#440381" opacity=".25"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
              fill="#440381" opacity=".5"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
              fill="#440381"></path>
      </svg>
    </div>
  </section>
  </body>
</template>


<style>
/* Base Animations */
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px);
  }
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

.animate-pulse-slow {
  animation: pulse 4s ease-in-out infinite;
}

.gradient-bg {
  background: linear-gradient(135deg, #440381 0%, #8338EC 100%);
}

.blob {
  position: absolute;
  filter: blur(40px);
  opacity: 0.7;
  mix-blend-mode: screen;
  pointer-events: none;
}
</style>
åΩx