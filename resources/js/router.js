import * as VueRouter from "vue-router";

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('./pages/Home.vue')
        },
        {
            path: '/links',
            name: 'links',
            component: () => import('./components/links/Show.vue'),
        }
        ,
        {
            path: '/links/create',
            name: 'links.create',
            component: () => import('./components/links/Create.vue'),
        },
        {
            path: '/links/:id/edit',
            name: 'links.edit',
            component: () => import('./components/links/Edit.vue')
        }
    ]

})

export default router
