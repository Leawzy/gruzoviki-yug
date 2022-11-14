<template>
    <Navbar/>
    <div class="bg-gray-100" v-if="user">
        <div class="container mx-auto my-5 p-5 pb-0">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto"
                                 src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                 alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ user.first_name }}
                            {{ user.last_name }}</h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Грузовики-Юг</h3>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Алкоголик уже как 2 года</p>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Статус</span>
                                <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Активный</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Дата Регистрации</span>
                                <span class="ml-auto">14.11.22</span>
                            </li>
                            <li v-if="user" class="flex items-center py-3 hover:text-red-500" style="transition: .4s">
                                <button @click.prevent="logout">Выйти</button>
                            </li>
                        </ul>
                    </div>
                    <div class="my-4"></div>
                </div>
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </span>
                            <span class="tracking-wide">Информация о пользователе</span>
                        </div>
                        <div class="text-gray-700 mt-4">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Имя</div>
                                    <div class="px-4 py-2">{{ user.first_name }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Фамилия</div>
                                    <div class="px-4 py-2">{{ user.last_name }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Модель автомобиля</div>
                                    <div class="px-4 py-2">DAV</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Контактный номер телефона</div>
                                    <div class="px-4 py-2">7 989 633 82 46</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Адрес доставки</div>
                                    <div class="px-4 py-2">Beech Creek, PA, Pennsylvania</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Страна</div>
                                    <div class="px-4 py-2" v-if="user.country">{{ user.country }}</div>
                                    <div class="px-4 py-2" v-else>Добавить</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:{{user.email}}">{{ user.email }}</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">День рождения</div>
                                    <div class="px-4 py-2">Дата тут</div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">
                            Редактировать профиль
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto my-5 p-5 pt-0 mt-0">
            <div class="bg-white p-3 wp-3 shadow-sm rounded-sm">

                <div class="grid grid-cols-2">
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </span>
                            <span class="tracking-wide">Прошлые Заказы</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            <li>
                                <div class="text-teal-600">Заказ #41414141</div>
                                <div class="text-gray-500 text-xs">Дата покупки: 12.11.11</div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 7.65686C4 6.83935 4 6.4306 4.15224 6.06306C4.30448 5.69552 4.59351 5.40649 5.17157 4.82843L5.82843 4.17157C6.40649 3.59351 6.69552 3.30448 7.06306 3.15224C7.4306 3 7.83935 3 8.65685 3H15.3431C16.1606 3 16.5694 3 16.9369 3.15224C17.3045 3.30448 17.5935 3.59351 18.1716 4.17157L18.8284 4.82843C19.4065 5.40649 19.6955 5.69552 19.8478 6.06306C20 6.4306 20 6.83935 20 7.65685V17C20 18.8856 20 19.8284 19.4142 20.4142C18.8284 21 17.8856 21 16 21H8C6.11438 21 5.17157 21 4.58579 20.4142C4 19.8284 4 18.8856 4 17V7.65686Z"
                                            stroke="#333333" stroke-width="2"/>
                                        <path d="M4 7H20" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                        <path
                                            d="M9 11C9 11.7956 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7957 15 11"
                                            stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            <span class="tracking-wide">Активные закзаы</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            <li>
                                <div class="text-teal-600">Заказ #41414141</div>
                                <div class="text-gray-500 text-xs">Дата покупки: 12.11.11</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Footer from "../components/Footer.vue";
import Navbar from "../components/Navbar.vue";

export default {
    name: "Profile",
    components: {Navbar, Footer},
    data() {
        return {
            user: null,
            errors: {}
        }
    },

    mounted() {
        this.getUser()
        document.title = 'Профиль'
    },

    methods: {
        getUser() {
            axios.get('/api/profile', {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Profile': localStorage.getItem('token')
                }
            })
                .then((res) => {
                    this.user = res.data
                })
                .catch((error) => {
                    console.log("ERRRR:: ", error.response.data);
                })
        },
        logout() {
            axios.get('/api/logout', {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${localStorage.getItem('token')}`
                }
            })
                .then((res) => {
                    if (res.status === 200) {
                        localStorage.removeItem('token')
                        this.$router.push({name: "Home"})
                    }
                })
                .catch((error) => {
                    console.log("Error logout", error.response.data)
                })
        }
    }
}
</script>

<style scoped>
:root {
    --main-color: #4a76a8;
}

.bg-main-color {
    background-color: var(--main-color);
}

.text-main-color {
    color: var(--main-color);
}

.border-main-color {
    border-color: var(--main-color);
}
</style>
