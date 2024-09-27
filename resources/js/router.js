import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/purses/',
        component: () => import('./components/views/Purse/Index.vue'),
        name: 'purse.index'
    },
    {
        path: '/purses/create',
        component: () => import('./components/views/Purse/Create.vue'),
        name: 'purse.create'
    },
    {
        path: '/purses/:id/edit',
        component: () => import('./components/views/Purse/Edit.vue'),
        name: 'purse.edit'
    },
    {
        path: '/users/create',
        name: 'user.create',
        component: () => import('./components/views/User/Create.vue')
    },
    {
        path: '/users/edit',
        name: 'user.edit',
        component: () => import('./components/views/User/Edit.vue')
    }
]

const router= createRouter({
    history: createWebHistory(),
    routes
})

export default router;
