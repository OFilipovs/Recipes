import './bootstrap';

import {createApp} from 'vue'
import VueAwesomePaginate from "vue-awesome-paginate";
import "vue-awesome-paginate/dist/style.css";
import App from './App.vue'
import router from "./route/index.js"

createApp(App)
    .use(router)
    .mount("#app")

