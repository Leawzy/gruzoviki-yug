import { createRouter, createWebHistory } from "vue-router";

import Catalog from '../pages/Catalog.vue'
import Home from '../pages/Home.vue'
import Register from '../pages/Register.vue'
import Login from '../pages/Login.vue'

const routes = [
    {
        path: "/catalog",
        name: "Catalog",
        component: Catalog,
    },
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
