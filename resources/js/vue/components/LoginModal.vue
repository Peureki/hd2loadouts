<template>
    <Transition name="fade">
        <div v-if="loginModal" class="modal-container">
            <div @click="loginModal = !loginModal" class="close-modal" title="Close"></div>

            <div class="login-container">
                <h2>Are you ready to defend Super Earth?</h2>

                <form @submit.prevent="handleLogin(name, email, password, remember)">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" v-model="name">

                    <label v-if="showEmailForm" for="email">Email</label>
                    <input v-if="showEmailForm" type="email" id="email" name="email" v-model="email">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" v-model="password">

                    <label for="remember">Remember Me</label>
                    <input type="checkbox" id="remember" name="remember" v-model="remember">

                    <input v-if="!showEmailForm" type="submit" value="FOR SUPER EARTH!!!">
                    <input v-if="showEmailForm" type="submit" value="ENLIST ME FOR SUPER EARTH">

                    <span class="or-register">
                        <p>Not a Helldiver yet?</p><button @click="showEmailForm = !showEmailForm">Register</button>
                    </span>
                    
                </form>
            </div>
        </div>
    </Transition>
    
</template>

<script setup>
import { ref } from 'vue'
import { loginModal } from '@/js/vue/composables/Global';
import { register ,login } from '@/js/vue/composables/Authentication';

const name = ref(null),
    email = ref(null), 
    password = ref(null),
    remember = ref(null);

const showEmailForm = ref(null);

const handleLogin = async (name, email, password, remember) => {
    if (showEmailForm.value){
        register(name, email, password, remember);
    } else {
        login(name, email, password, remember);
    }
    
}

</script>

<style scoped>

.modal-container{
    position: fixed;
    width: 100dvw;
    height: 100dvh;
    background-color: var(--color-bkg-modal); 
    z-index: 10000000000;
}
.close-modal{
    position: fixed;
    width: 100dvw;
    height: 100dvh; 
    z-index: 10000000000;
    cursor: pointer;
}
.login-container{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: var(--color-bkg-login);
    display: flex;
    flex-direction: column;
    gap: var(--gap-form);
    padding: var(--padding-login);
    color: var(--color-text);
    border: var(--border-general);
    max-width: clamp(30rem, 40vw, 38rem);
    z-index: 10000000001;
}
form {
    display: flex;
    flex-direction: column;
    color: var(--color-text);
    gap: var(--gap-form);
}
input[type="submit"]{
    margin-top: calc(var(--gap-form) * 2);
}

.or-register{
    display: flex;
    gap: var(--gap-form);
}
.or-register button{
    width: fit-content;
    font-family: var(--font-family-kode-mono);
    text-decoration: underline;
}

</style>