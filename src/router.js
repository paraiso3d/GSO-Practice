import { createRouter, createWebHistory } from 'vue-router';

// Import your components
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contact from './pages/Contact.vue';


// Define your routes
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/about',
    name: 'About',
    component: About,
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact,
  },
];

// Create the router instance
const router = createRouter({
  history: createWebHistory(), // Use HTML5 History API for clean URLs
  routes,
});

export default router;