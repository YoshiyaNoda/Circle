import Vue from "vue";
import VueRouter from "vue-router";
 
Vue.use(VueRouter);
 
import ExampleComponent from "./components/ExampleComponent.vue";
 
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/books",
            name: "example",
            component: ExampleComponent
        },
    ]
});
 
export default router;