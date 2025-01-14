<template>
  <header class="ctv-header">
    <div class="wave-container">
      <div v-for="i in 5" :key="i" class="wave" :class="`wave-${i}`"></div>
    </div>
    <div class="header-content">
      <h1 class="title is-1 has-text-centered">
        Three First Names & Associates
      </h1>
      <p class="subtitle is-4 has-text-centered">
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

<style lang="scss">
// Custom variables - you can put these in a separate _variables.scss file
$primary-color: #40E0D0; // Turquoise
$secondary-color: #4169E1; // Royal Blue
$accent-color: #8A2BE2; // Purple
$text-color: #FFFFFF;

// Gradient variables
$gradient-start: $primary-color;
$gradient-middle: $secondary-color;
$gradient-end: $accent-color;

.ctv-header {
  position: relative;
  width: 100%;
  height: 300px;
  overflow: hidden;
  background: linear-gradient(
          135deg,
          $gradient-start 0%,
          $gradient-middle 50%,
          $gradient-end 100%
  );

  // Header content styling
  .header-content {
    position: relative;
    z-index: 2;
    padding: 2rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    .title {
      color: $text-color;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      margin-bottom: 1rem;

      @include mobile {
        font-size: 2rem;
      }
    }

    .subtitle {
      color: rgba($text-color, 0.9);
      letter-spacing: 2px;
      font-weight: 500;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);

      @include mobile {
        font-size: 1rem;
      }
    }
  }

  // Wave animation container
  .wave-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.2;
  }

  // Wave styling
  .wave {
    position: absolute;
    width: 200%;
    height: 100%;
    background: repeating-linear-gradient(
            45deg,
            transparent,
            transparent 80px,
            rgba(255, 255, 255, 0.1) 80px,
            rgba(255, 255, 255, 0.1) 160px
    );
    animation: wave-animation 12s linear infinite;

    @for $i from 1 through 5 {
      &.wave-#{$i} {
        animation-duration: #{12 + $i * 2}s;
        top: #{$i * 20}%;
        left: #{-$i * 10}%;
      }
    }
  }
}

// Animation keyframes
@keyframes wave-animation {
  0% {
    transform: translateX(0) translateY(0) rotate(0);
  }
  100% {
    transform: translateX(-50%) translateY(0) rotate(0);
  }
}

// Responsive mixins (if not already provided by Bulma)
@mixin mobile {
  @media screen and (max-width: 768px) {
    @content;
  }
}
</style>
