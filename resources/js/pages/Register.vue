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
                                    Ваша Фамилия
                                </label>
                                <input
                                    v-model="FirstName"
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="first_name"
                                    type="text"
                                    placeholder="Иванов"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Ваше Имя
                                </label>
                                <input
                                    v-model="LastName"
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Иван"
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
            FirstName: '1',
            LastName: '2',
            email: 'dsadd4dsasa@mail.ru',
            PhoneNumber: '4',
            password: '5',
            password_confirmation: '5',
            errors: {},
        }

    },
    methods: {
        register() {
            console.log('123');
            axios.post('/api/register', {
                name: "name",
                first_name: this.FirstName,
                last_name: this.LastName,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
                .then(res => {
                    if (res.status === 201){
                        localStorage.setItem('token', res.data.token)
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
