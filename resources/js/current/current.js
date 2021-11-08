require("./bootstrap");

import Vue from "vue";
import "../component/direct.js";

/* Single App */
window.addEventListener("load", function () {
    window.app = new Vue({
        el: "#app",
    });
});
