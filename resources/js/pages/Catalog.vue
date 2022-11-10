<template>
    <Navbar/>
    <div class="container xl:mx-auto pt-5">
        <p>Я продукт</p>
    </div>
    <Footer/>
</template>

<script>

import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";

export default {
    name: "Catalog",
    components: {Navbar, Footer},
    mounted() {
        this.getCatalog()
        document.title = 'Каталог'
    },
    methods: {
        getCatalog() {

        }
    }
}
</script>

<style scoped>

</style>
