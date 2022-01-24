import Vue from "vue";
import * as Components from "irfanvue-test";

Object.entries(Components).forEach(([name, component]) => {
    Vue.component(name, component);
});

// OLD METHOD OF IMPORTING
// Vue.component('component-1', require('./component-1.vue').default)

/* Direct Import */
window.addEventListener("load", function () {
    window.app = new Vue({
        el: "#app",
    });
});
