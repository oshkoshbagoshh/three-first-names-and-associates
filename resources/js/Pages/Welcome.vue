<template>
  <Head title="CTV Motion" />

  <div class="min-h-screen bg-gray-900">
    <div class="container mx-auto p-8">
      <CTVAnimatedLogo />
      <TypeWriter />
      <FeedbackForm /> 
    </div>
  </div>
</template>

<script>
import { Head } from '@inertiajs/vue3'
import CTVAnimatedLogo from '@/Components/CTVAnimatedLogo.vue'
import TypeWriter from '@/Components/TypeWriter.vue'
import FeedbackForm from '@/Components/FeedbackForm.vue'

export default {
  components: {
    Head,
    CTVAnimatedLogo,
    TypeWriter,
    FeedbackForm
  }
}
</script>
