<template>
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg img-register"></div>
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Создайте свой личный профиль</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" @submit.prevent="register">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Ваше Имя
                                </label>
                                <input
                                    v-model="first_name"
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="first_name"
                                    type="text"
                                    placeholder="Иван"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Ваша фамилия
                                </label>
                                <input
                                    v-model="last_name"
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="last_name"
                                    type="text"
                                    placeholder="Иванов"
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Ваш E-mail
                            </label>
                            <input
                                v-model="email"
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="emailexample@mail.ru"
                            />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
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
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                    Повторите свой пароль
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="c_password"
                                    type="password"
                                    placeholder="******************"
                                    v-model="password_confirmation"
                                />
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="button" @click.prevent="register">
                                Создать аккаунт
                            </button>
                        </div>
                        <hr class="mb-6 border-t"/>
                        <div class="text-center">
                            <router-link :to="{name: 'Login'}" class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800">
                                Вы уже были тут? Тогда авторизуйтесь!
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
    name: "Registration",

    data() {
        return {
            first_name: null,
            last_name: null,
            email: null,
            password: null,
            password_confirmation: null,
            errors: {},
        }

    },
    methods: {
        register() {
            axios.post('/api/register', {
                first_name: this.first_name,
                last_name: this.last_name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
                .then(res => {
                    if (res.status === 204){
                        localStorage.setItem('token', res.data.token)
                        this.$router.push({name: "Home"})
                    }
                    console.log(res);
                })
                .catch((error) => {
                    console.log("ERRRR:: ", error.response.data);
                })
        }
    }
}
</script>


<style scoped>
.img-register {
    background: url("https://i.imgflip.com/17j4qm.jpg?a462816") center;
}
</style>
