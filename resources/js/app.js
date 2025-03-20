import './bootstrap.js';
import { createApp } from 'vue';
import App from './vue/App.vue'
import router from './vue/router.js'

createApp(App).use(router).mount('#app')