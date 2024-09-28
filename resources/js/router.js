import Home from '../js/Pages/Profile/main/Home.vue'
import AboutMe from '../js/Pages/Profile/main/AboutMe.vue'
import Projects from '../js/Pages/Profile/main/Projects.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Contact from '../js/Pages/Profile/main/Contact.vue'

const routes =  [
    {path: '/', name: 'Home', component: Home},
    {path: '/about', name: 'About', component: AboutMe},
    {path: '/projects', name: 'Projects', component: Projects},
    {path: '/contact', name: 'Contact', component: Contact},
]


const router = createRouter({
    history: createWebHistory(),
    routes
})


export default router
