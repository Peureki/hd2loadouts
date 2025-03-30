<template>
    <nav>
        <router-link to="/">Helldivers 2 Loadouts</router-link>
        <router-link to="/loadouts">Loadouts</router-link>
        <p v-if="user">Herro {{ user.name }}</p>
        <button v-if="!user" @click="loginModal = !loginModal">Login</button>
        <button v-if="user" @click="logout">Logout</button>
    </nav>
</template>

<script setup>
import { loginModal, user } from '@/js/vue/composables/Global';
import { getAuthUser, logout } from '@/js/vue/composables/Authentication';
import { onMounted } from 'vue';

onMounted(async () => {
    if (!user.value){
        getAuthUser(); 
    }
})

</script>

<style scoped>

nav{
    display: flex;
    justify-content: space-between;
    padding-inline: var(--padding-website-inline);
    padding-block: var(--padding-nav-block);
    background-color: var(--color-nav);
    color: var(--color-text);
}

</style>