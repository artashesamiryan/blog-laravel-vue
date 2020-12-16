import Vue from "vue";
import VueRouter from "vue-router";

import MainLayout from '../../layouts/MainLayout';

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: "/",
            name: 'main',
            component: () => import('../../layouts/MainLayout'), //requiresAuth: true,
            children: [
                {
                    path: "/",
                    component: () => import("../components/Index.vue")
                    // meta: {
                    //   requiresAuth: true
                    // },
                },
                {
                    path: "/login",
                    component: () => import("../components/logn.vue")
                    // meta: {
                    //   requiresAuth: true
                    // },
                },
                
                {
                    path: "/register",
                    component: () => import("../components/registerForm.vue")
                    // meta: {
                    //   requiresAuth: true
                    // },
                },
                
            ]
        }
    ]
});
