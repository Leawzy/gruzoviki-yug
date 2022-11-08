<template>
    <swiper
        :slidesPerView="3"
        :spaceBetween="50"
        :pagination="{
      clickable: true,
    }"
        :modules="modules"
        class="mySwiper"
    >
        <swiper-slide>
            <router-link :to="{name: 'Catalog'}">
                <img src="/img/card-1.svg" alt="card-1">
            </router-link>
        </swiper-slide>
        <swiper-slide>
            <a href="#">
                <img src="/img/card-2.svg" alt="card-1">
            </a>
        </swiper-slide>
        <swiper-slide>
            <a href="#">
                <img src="/img/card-3.svg" alt="card-1">
            </a>
        </swiper-slide>
        <swiper-slide>
            <a href="#">
                <img src="/img/card-2.svg" alt="card-1">
            </a>
        </swiper-slide>
        <swiper-slide>
            <a href="#">
                <img src="/img/card-1.svg" alt="card-1">
            </a>
        </swiper-slide>
    </swiper>
</template>
<script>

import {Swiper, SwiperSlide} from "swiper/vue";

import "swiper/css";

import "swiper/css/pagination";


import {Pagination} from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Pagination],
        };
    },
};
</script>
<style>

.swiper {
    width: 100%;
}

.swiper-slide {
    margin-bottom: 40px;
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

</style>
