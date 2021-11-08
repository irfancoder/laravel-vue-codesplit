import Vue from "vue";

Vue.component("component-1", require("./component-1.vue").default);
Vue.component("component-2", require("./component-2.vue").default);
Vue.component("component-3", require("./component-3.vue").default);
Vue.component("component-4", require("./component-4.vue").default);
Vue.component("component-5", require("./component-5.vue").default);
Vue.component("component-6", require("./component-6.vue").default);
Vue.component("component-7", require("./component-7.vue").default);
Vue.component("component-8", require("./component-8.vue").default);
Vue.component("component-9", require("./component-9.vue").default);
Vue.component("component-10", require("./component-10.vue").default);

/* Direct Import */
window.addEventListener("load", function () {
    window.app = new Vue({
        el: "#app",
    });
});
