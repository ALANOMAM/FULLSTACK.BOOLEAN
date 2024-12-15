import { createApp } from 'vue'
import './style.scss'
import App from './App.vue'

// importiamo il file router.js
import { router } from './router' 

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'



createApp(App).use(router).mount('#app')
