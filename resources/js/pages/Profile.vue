<template>
    <Navbar/>
    <div class="container xl:mx-auto pt-5" v-if="user">
        <h1>Profile</h1>
            <p>Имя: {{ user.first_name }}</p>
            <p>Фамилия: {{ user.last_name }}</p>
            <p>Почта: {{ user.email }}</p>

            <button @click.prevent="logout">Logout</button>
    </div>
    <Footer/>
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
            axios.get('/api/logout',{
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${localStorage.getItem('token')}`
                }
            })
                .then((res) => {
                    if (res.status === 200){
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

</style>
