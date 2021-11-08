import Vue from "vue";

Vue.component("component-1", () =>
    import(/* webpackChunkName: "ll_module_1" */ "./component-1.vue")
);
Vue.component("component-2", () =>
    import(/* webpackChunkName: "ll_module_2" */ "./component-2.vue")
);
Vue.component("component-3", () =>
    import(/* webpackChunkName: "ll_module_2" */ "./component-3.vue")
);
Vue.component("component-4", () =>
    import(/* webpackChunkName: "ll_module_2" */ "./component-4.vue")
);
Vue.component("component-5", () =>
    import(/* webpackChunkName: "ll_module_2" */ "./component-5.vue")
);
Vue.component("component-6", () =>
    import(/* webpackChunkName: "ll_module_2" */ "./component-6.vue")
);
Vue.component("component-7", () =>
    import(/* webpackChunkName: "ll_module_3" */ "./component-7.vue")
);
Vue.component("component-8", () =>
    import(/* webpackChunkName: "ll_module_3" */ "./component-8.vue")
);
Vue.component("component-9", () =>
    import(/* webpackChunkName: "ll_module_4" */ "./component-9.vue")
);
Vue.component("component-10", () =>
    import(/* webpackChunkName: "ll_module_4" */ "./component-10.vue")
);

/* Webpack Code Splitting / Lazy Load */
window.addEventListener("load", function () {
    window.app = new Vue({
        el: "#app",
    });
});
