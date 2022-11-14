<template>
    <Navbar/>
    <section class="container">
        <div class="catalog">
            <div class="catalog__list" id="filter">
                <article v-for="product in products" class="product" data-cat="pol">
                    <a href="#" class="product__image">
                        <div class="product__switch image-switch">
                            <div class="image-switch__item">
                                <div class="image-switch__img"><img src="img/product.svg" alt="Макбук"></div>
                            </div>
                        </div>
                        <ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
                    </a>
                    <h3 class="product__title">
                        <a href="#">{{ product.title }}</a>
                    </h3>
                    <div class="product__props">
                        <span class="product__rating">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.04894 0.92705C7.3483 0.00573924 8.6517 0.00573965 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58779 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z"
                                />
                            </svg>
                            4,9
                        </span>
                        <span class="product__testimonials">83 отзыва</span>
                    </div>
                    <div class="product__info">
                        <span class="product__id">Бренд: {{ product.brand }}</span>
                        <span class="product__term">Артикул: {{ product.art }}</span>
                        <span class="product__available">В наличии: {{ product.quantity }}</span>
                    </div>
                    <div class="product__price product-price">
                        <span class="product-price__current">{{ product.price }} ₽</span>
                    </div>
                    <button class="product__btn">Добавить в корзину</button>
                </article>
            </div>
        </div>
    </section>
    <Footer/>
</template>

<script>

import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";

export default {
    name: "Catalog",
    components: {Navbar, Footer},
    data() {
        return {
            products: []
        }
    },
    mounted() {
        this.getCatalog()
        document.title = 'Каталог'
    },
    methods: {
        getCatalog() {
            axios.get('/api/catalog')
                .then((res) =>{
                    console.log(res)
                    this.products = res.data.data
                });
        }
    }
}
</script>

<style scoped>
*,
*::before,
*::after {
    box-sizing: inherit;
}

:root {
    --color-dark: #4d4d4d;
    --color-light: #808080;
    --color-accent: deepskyblue;
}

.container {
    margin: 0 auto;
    width: 60%;
    box-sizing: border-box;
}

.container a {
    text-decoration: none;
    color: inherit;
}

.catalog__list {
    margin-top: 40px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-self: auto;
}

.product {

    width: 260px; /* для удобства */
    border: 1px solid #d9d9d9;
    border-radius: 4px;
    padding: 20px;
    padding-top: 9px;
    font-size: 14px;
    background-color: #fff;
    margin: 10px 20px 10px 0;
    box-shadow: 0px 0px 1px rgba(0,0,0,0.5);
}

.product__image {
    position: relative;
    overflow: hidden;
    display: block;
    height: 162px;
}

.image-switch {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 20;
    width: 100%;
    height: 100%;
    display: flex;
}

.image-switch__item {
    flex-grow: 1;
    cursor: pointer;
}

.image-switch__img {
    position: absolute;
    left: 50%;
    top: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    transform: translateX(-50%);
    pointer-events: none;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
}

.image-switch__img img {
    display: block;
    max-width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-switch__item:first-child .image-switch__img {
    opacity: 1;
    z-index: -1;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.image-switch__item:hover .image-switch__img {
    opacity: 1;
    z-index: -1;
    -webkit-transition: all 0.9s;
    -o-transition: all 0.9s;
    transition: all 0.9s;
}

.image-pagination {
    position: absolute;
    z-index: 30;
    bottom: 15px;
    width: 100%;
    display: flex;
    justify-content: center;
}

.image-pagination__item {
    display: block;
    width: 4px;
    height: 4px;
    border-radius: 100%;
    margin: 0 3px;
    background-color: #c4c4c4;
}

.image-pagination__item--active {
    background-color: var(--color-accent);
}

.product__title {
    font-family: "PT Sans","Helvetica","Arial",sans-serif;
    height: 40px;
    margin-bottom: 8px;
    font-weight: 400;
    font-size: 14px;
    line-height: 16px;
    color: var(--color-dark);
}

.product__props {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.product__rating {
    margin-right: 10px;
    display: inline-flex;
    align-items: center;
    color: orange;
    font-weight: 600;
}

.product__rating svg {
    fill: currentColor;
    margin-right: 8px;
}

.product__testimonials {
    color: var(--color-light);
}

.product__info {
    margin-bottom: 17px;
    font-size: 12px;
    color: var(--color-light);
}

.product__id {
    display: block;
    margin-bottom: 7px;
}

.product__term {
    display: block;
    margin-bottom: 7px;
}

.product__available {
    display: block;
}

.product-price {
    margin-bottom: 17px;
    display: flex;
    align-items: center;
}

.product-price__current {
    margin-right: 12px;
    font-size: 24px;
    color: var(--color-dark)
}

.product-price__old {
    font-size: 12px;
    color: var(--color-light);
    text-decoration: line-through;
}

.product__btn {
    font-family: 'Montserrat', sans-serif!important;
    border: none;
    padding: 14px 0;
    border-radius: 25px;
    width: 100%;
    color: #fff;
    background-color: deepskyblue;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.product__btn:hover {
    background-color: black;
    transition: background-color 0.3s ease-in-out;
}
</style>
