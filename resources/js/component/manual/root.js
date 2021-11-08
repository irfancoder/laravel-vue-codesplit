import Vue from "vue";

/* Root App */
// Vue.component("component-3", require("../component-3.vue").default);
// Vue.component("component-4", require("../component-4.vue").default);

window.root = new Vue({
    el: "#app",
    components: {
        "component-3": require("../component-3.vue").default,
        "component-4": require("../component-4.vue").default,
    },
});

console.log(window.root.$options.components);
