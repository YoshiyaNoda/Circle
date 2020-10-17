import Vue from "vue";
import VueRouter from "vue-router";
 
Vue.use(VueRouter);
 
import Top from "./components/Top.vue";
import Contact from "./components/Contact.vue";

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
            component: Contact
        },
    ]
});
 
export default router;