import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/js/vue/views/HomeView.vue'
import LoadoutsView from '@/js/vue/views/LoadoutsView.vue';

const routes = [
    {
        path: '/',
        component: HomeView,
        name: 'home',
    },
    {
        path: '/loadouts',
        component: LoadoutsView,
        name: 'loadouts',
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router