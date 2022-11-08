<template>
    <footer>
        <ul class="flex justify-content-center pt-4 mt-5">
            <li class="footer-link pr-4 pl-4">
                <a href="#">Подбор Товара</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Доставка</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Как купить</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Оплата</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Договор оферты</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Политика конфиденциальности</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Реквизиты</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Контакты</a>
            </li>
            <li class="footer-link pr-4 pl-4">
                <a href="#">Акции</a>
            </li>
        </ul>
        <ul class="flex justify-content-center mt-3">
            <li class="pl-2 pr-2">
                <a href="">
                    <img src="img/footer/Instagram.svg" alt="">
                </a>
            </li>
            <li class="pl-2 pr-2">
                <a href="">
                    <img src="img/footer/Whatsapp.svg" alt="">
                </a>
            </li>
            <li class="pl-2 pr-2">
                <a href="">
                    <img src="img/footer/Vkontakte.svg" alt="">
                </a>
            </li>
        </ul>
        <p class="footer-bottom text-center mt-4">Грузовики-Юг© 2022-2024</p>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

.footer-bottom {
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 20px;
    color: #777777;
}

footer {
    background-color: #F0F0F0;
    height: 160px;
}
.footer-link > a {
    font-weight: 700;
    font-size: 15px;
    line-height: 20px;
}
</style>
