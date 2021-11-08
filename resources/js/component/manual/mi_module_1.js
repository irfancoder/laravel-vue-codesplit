import Vue from "vue";
/* Manual Injection Module 1 */
window.addEventListener("load", function () {
    console.log("Hello from module_1.js");
    if (window.root !== undefined && window.root !== null) {
        console.log("Root app (Vue Instance) exists!");

        // Vue.component("component-1", require("../component-1.vue").default);
        // Vue.component("component-2", require("../component-2.vue").default);
        window.root = new Vue({
            el: "#app",
            components: {
                "component-1": () => import("../component-1"),
                "component-2": () => import("../component-2"),
            },
        });

        console.log(window.root.$options.components);
    }
});
