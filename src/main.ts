import { createApp } from 'vue'
import App from './App.vue'
import { Vue } from 'vue-class-component';
import { store, key } from './store'
import 'bootstrap'
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'
import VueCookies from 'vue-cookies'

const app = createApp(App)
    .use(VueCookies)
    .use(store, key)
    .mount('#app')
app.$cookies.config('10y')
