<template>
    <nav>
        <button>Helldivers 2 Loadouts</button>
        <p v-if="user">Herro {{ user.name }}</p>
        <button @click="loginModal = !loginModal">Login</button>
        <button @click="logout">Logout</button>
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