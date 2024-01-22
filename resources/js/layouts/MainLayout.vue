<template>
    <Navbar />
    <RouterView />
    <Footer />
</template>

<script>
import Navbar from "@/pages/web/components/Navbar.vue";
import Footer from "@/pages/web/components/Footer.vue";
export default {
name: "ClientDashboard",
components: {Navbar, Footer}
}
</script>

<style scoped>

</style>
