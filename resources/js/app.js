
require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});

/* import { createApp } from "vue";
import App from "./components/ExampleComponent.vue";
createApp(App).mount("#app"); */
