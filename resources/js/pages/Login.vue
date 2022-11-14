<template>
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg img-register"></div>
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Авторизуйтесь в свой профиль</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Ваш E-mail
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="emailexample@mail.ru"
                                v-model="email"
                            />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Ваш пароль
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="password"
                                type="password"
                                placeholder="******************"
                                v-model="password"
                            />
                            <p class="text-xs italic text-red-500">Впишите свой пароль в поле</p>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="button" @click.prevent="login">
                                Создать аккаунт
                            </button>
                        </div>
                        <hr class="mb-6 border-t"/>
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800">
                                Забыли свой пароль?
                            </a>
                        </div>
                        <div class="text-center">
                            <router-link :to="{name: 'Register'}" class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800">
                                Нет аккаунта? Тогда зарегистрируйся!
                            </router-link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Register",
    data() {
        return {
            email: null,
            password: null,
            errors: {},
        }

    },
    methods: {
        login() {
            axios.post('/api/login', {
                email: this.email,
                password: this.password,
            })
                .then(res => {
                    if (res.status === 200){
                        localStorage.setItem('token', res.data.token)
                        this.$router.push({name: "Home"})
                    }
                })
                .catch((error) => {
                    console.log("ERRRR:: ", error.response.data);
                })
        }
    },
    mounted() {
        document.title = 'Авторизироваться'
    }
}
</script>


<style scoped>
.img-register {
    background: url("https://i.natgeofe.com/n/c9107b46-78b1-4394-988d-53927646c72b/1095_3x2.jpg") no-repeat center;
    background-size: cover;
}
</style>
