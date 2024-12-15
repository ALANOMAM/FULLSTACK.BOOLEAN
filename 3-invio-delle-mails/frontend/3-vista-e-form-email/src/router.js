import { createRouter, createWebHistory } from "vue-router";

// components

// qui importo le mie viste 
import HomePage from './pages/HomePage.vue';
import SinglePage from './pages/SinglePage.vue';
import ContactMe from './pages/ContactMe.vue';

const router = createRouter({
    history: createWebHistory(),

    // qui definisco le rotte delle mie viste 
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/posts/:id',
            name: 'single-post',
            component: SinglePage
        },
        {
            path: '/contact-me',
            name: 'contact-me',
            component: ContactMe
        }
    ]
});

export { router };