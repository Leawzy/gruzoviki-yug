<template>
    <section class="">
        <div class="grid grid-cols-4 gap-4">
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
        </div>
    </section>
</template>

<script>
import ProductCard from "./Card.vue";
export default {
    name: "Products",
    components: {ProductCard}

}
</script>

<style scoped>

</style>
