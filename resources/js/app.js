import { createApp } from 'vue';
import App from './components/App.vue';
import router from "./router.js";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import {BootstrapVue3} from "bootstrap-vue-3";

const app = createApp(App);
app.use(BootstrapVue3);
app.use(router);
app.mount('#app');
