import Vue from "vue";
import VueRouter from "vue-router";
 
Vue.use(VueRouter);
 
import ExampleComponent from "./components/ExampleComponent.vue";
import ExampleComponent2 from "./components/Ex2.vue";
 
const router = new VueRouter({
    mode: "history",
    routes: [
        {   
            path: "/f",
            name: "example",
            component: ExampleComponent
        },
        {   
            path: "/",
            name: "example2",
            component: ExampleComponent2
        },
    ]
});
 
export default router;