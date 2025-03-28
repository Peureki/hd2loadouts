import './bootstrap.js';
import { createApp } from 'vue';
import App from '@/js/vue/App.vue'
import router from '@/js/vue/router.js'

createApp(App).use(router).mount('#app')