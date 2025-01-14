<template>
  <header class="relative w-full h-48 overflow-hidden bg-gradient-to-r from-cyan-400 via-blue-600 to-purple-600">
    <!-- Animated wave background -->
    <div class="absolute inset-0 opacity-20">
      <div
          v-for="i in 5"
          :key="i"
          class="absolute w-[200%] h-48 animate-wave"
          :style="{
          background: `repeating-linear-gradient(
            45deg,
            transparent,
            transparent 80px,
            rgba(255, 255, 255, 0.1) 80px,
            rgba(255, 255, 255, 0.1) 160px
          )`,
          animation: `wave ${12 + i * 2}s linear infinite`,
          top: `${i * 20}%`,
          left: `-${i * 10}%`
        }"
      />
    </div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full px-4 text-center">
      <h1 class="mb-2 text-4xl font-bold tracking-wider text-cyan-300 md:text-5xl lg:text-6xl">
        Three First Names & Associates
      </h1>
      <p class="text-sm font-medium tracking-widest text-cyan-100 md:text-base">
        EMPOWERING BRANDS & AGENCIES TO STRIKE GOLD WITH CTV ADVERTISING
      </p>
    </div>
  </header>
</template>

<script>
export default {
  name: 'CTVHeader'
}
</script>
