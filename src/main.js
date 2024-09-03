import { createApp } from 'vue';
import App from './App.vue';
import router from './router'; // Import the router instance

import './index.css';


const app = createApp(App);

app.use(router); // Use the router instance

app.mount('#app');