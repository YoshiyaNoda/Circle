import Vue from "vue";
import VueRouter from "vue-router";
 
Vue.use(VueRouter);
 
import ExampleComponent from "./components/ExampleComponent.vue";
import Top from "./components/Top.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {   
            path: "/",
            name: "top",
            component: Top
        },
        {   
            path: "/contact",
            name: "contact",
            component: ExampleComponent
        },
    ]
});
 
export default router;