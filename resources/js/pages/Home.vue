<template>
    <router-view/>
    <Navbar />
    <main class="container mx-auto">
        <Slider/>
        <Button />
        <Products />
    </main>
    <Footer />
</template>

<script>
import Slider from "../components/Slider.vue";
import Button from "../components/Other/Button.vue";
import Products from "../components/Product/Products.vue";
import Footer from "../components/Footer.vue";
import Navbar from "../components/Navbar.vue";

export default {
    name: "Home",
    components: {Navbar, Footer, Products, Button, Slider},
    mounted() {
        document.title = 'Главная страница'
    }
}
</script>

