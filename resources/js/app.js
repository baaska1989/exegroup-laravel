
import './bootstrap';
import { createApp } from 'vue'
import { createPinia } from "pinia";
import App from "./App.vue";
import router from "./router";
import "../css/app.css";
import store from "./stores";
import ViewUIPlus from "view-ui-plus";
import "view-ui-plus/dist/styles/viewuiplus.css";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import Vue3Lottie from "vue3-lottie";
import { createI18n } from 'vue-i18n';
const i18n = createI18n({
    // something vue-i18n options here ...
  })
createApp(App)
    .use(router)
    .use(store)
    .use(ViewUIPlus)
    .use(createPinia())
    .use(VueSweetalert2)
    .use(Vue3Lottie)
    .use(i18n)
    .mount("#app");
