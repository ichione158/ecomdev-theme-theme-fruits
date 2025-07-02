<script setup>
    import { Head } from '@inertiajs/vue3'
    import { computed } from 'vue'

    import { baseURL, appTitleSuffix } from '@ThemeFruits/src/config'
    import Header from './Header.vue'
    import Footer from './Footer.vue'

    const props = defineProps({ title: String })

    const appTitle = computed(() => {
        return (props.title ?? 'Trang chủ') + appTitleSuffix
    })
</script>

<template>
    <Head :title="appTitle" />

    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <Header />
    <!-- Header Section End -->

    <!-- Content from Inertia page -->
    <slot />

    <!-- Footer Section Begin -->
    <Footer />
    <!-- Footer Section End -->
</template>

