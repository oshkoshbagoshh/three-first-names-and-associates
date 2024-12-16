<!-- CalendlyWidget.vue -->
<template>
    <div class="calendly-inline-widget" :data-url="calendlyUrl" :style="widgetStyle"></div>
</template>

<script>
import { defineComponent, onMounted } from 'vue';

export default defineComponent({
    name: 'CalendlyWidget',
    props: {
        url: {
            type: String,
            default: 'https://calendly.com/ajavadi202/'
        },
        height: {
            type: String,
            default: '700px'
        }
    },
    setup(props) {
        const calendlyUrl = props.url;
        const widgetStyle = {
            minWidth: '320px',
            height: props.height
        };

        onMounted(() => {
            const script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://assets.calendly.com/assets/external/widget.js';
            script.async = true;
            document.head.appendChild(script);
        });

        return {
            calendlyUrl,
            widgetStyle
        };
    }
});
</script>
