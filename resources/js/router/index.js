import { createRouter, createWebHistory } from "vue-router";
import SideMenu from "../layouts/SideMenu.vue";
import LoginLayout from "../layouts/LoginLayout.vue";
import AdminLogin from "../pages/auth/login.vue"
import AdminDashboard from "../pages/admin/AdminDashboard.vue";
import Teachers from "../pages/admin/Teachers.vue";
import News from "../pages/admin/News.vue";
import store from "../stores";
import Reports from "../pages/admin/Reports.vue";
import Users from "../pages/admin/Users.vue";
import Event from "../pages/admin/Event.vue";

// Web Pages
import Home from "../pages/Home.vue";
import AboutUs from "../pages/web/AboutUs.vue";
import Domestic from "../pages/web/Domestic.vue";
import Contact from "../pages/web/Contact.vue";
import Mongolia from "../pages/web/Mongolia.vue";
import Myanmar from "../pages/web/Myanmar.vue";
import Internship from "../pages/web/Internship.vue";
import Recruit from "../pages/web/Recruit.vue";


import MainLayout from "../layouts/MainLayout.vue";
import IntroCard from "../pages/admin/IntroCard.vue";
import Optimized from "../pages/admin/Optimized.vue";
import Clients from "../pages/admin/Clients.vue";
import NotFound from "../pages/NotFound.vue";

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: "active active-class",
    linkExactActiveClass: "exact-active",
    routes: [
        {
            path: "/",
            component: MainLayout,
            children: [
                {
                    path: "/",
                    name: "Home",
                    component: Home,
                    meta: { openAlways: true },
                },
                {
                    path: "/aboutus",
                    name: "AboutUs",
                    component: AboutUs,
                    meta: { openAlways: true },
                },
                {
                    path: "/contact",
                    name: "Contact",
                    component: Contact,
                    meta: { openAlways: true },
                },
                {
                    path: "/myanmar",
                    name: "Myanmar",
                    component: Myanmar,
                    meta: { openAlways: true },
                },
                {
                    path: "/mongolia",
                    name: "Mongolia",
                    component: Mongolia,
                    meta: { openAlways: true },
                },
                {
                    path: "/domestic",
                    name: "Domestic",
                    component: Domestic,
                    meta: { openAlways: true },
                },
                {
                    path: "/internship",
                    name: "Internship",
                    component: Internship,
                    meta: { openAlways: true },
                },
                {
                    path: "/recruit",
                    name: "Recruit",
                    component: Recruit,
                    meta: { openAlways: true },
                }
            ],
        },
        
        {
            path: "/admin/login/",
            component: LoginLayout,
            children: [
                {
                    path: "",
                    name: "AdminLogin",
                    component: AdminLogin,
                    meta: { openAlways: true },
                },
            ],
        },

        {
            path: "/admin/",
            component: SideMenu,
            meta: { requiresAuth: true },
            children: [
                {
                    path: "dashboard",
                    name: "AdminDashboard",
                    component: AdminDashboard,
                    meta: { requiresAuth: true },
                },
                {
                    path: "teachers",
                    name: "Teachers",
                    component: Teachers,
                    meta: { requiresAuth: true },
                },
                {
                    path: "news",
                    name: "News",
                    component: News,
                    meta: { requiresAuth: true },
                },
                {
                    path: "report",
                    name: "Reports",
                    component: Reports,
                    meta: { requiresAuth: true },
                },
                {
                    path: "users",
                    name: "Users",
                    component: Users,
                    meta: { requiresAuth: true },
                },
                {
                    path: "event",
                    name: "Event",
                    component: Event,
                    meta: { requiresAuth: true },
                },
                {
                    path: "intro-card",
                    name: "IntroCard",
                    component: IntroCard,
                    meta: { requiresAuth: true },
                },
                {
                    path: "optimized-living",
                    name: "Optimized",
                    component: Optimized,
                    meta: { requiresAuth: true },
                },
                {
                    path: "clients",
                    name: "Clients",
                    component: Clients,
                    meta: { requiresAuth: true },
                },
            ],
        },

        {
            path: "/:catchAll(.*)",
            redirect: {
                name: "NotFound",
                component: NotFound,
                meta: { openAlways: true },
            },
        },
    ],
});

router.beforeEach((to, from, next) => {
    store.dispatch("SET_ROUTE_NAME", to);
    store.dispatch("AUTH_CHECK").then(function () {
        if (to.meta.openAlways){
            next(() => {
                document.title = to.meta.title;
            });
        } else {
            if (store.getters.isLoggedIn){
                if (to.meta.requiresAuth) {
                    next();
                } else {
                    next("/");
                }
            } else {
                if (to.name != "LoginLayout") {
                    next("/");
                } else {
                    next();
                }
            }
        }
    })
})
export default router;
