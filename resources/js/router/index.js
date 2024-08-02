//! is file mai sary component import hoty and routes likhy jaty  

import {
    createRouter,
    createWebHistory
} from "vue-router";

import CompaniesIndex from "../components/companies/index.vue";

const routes = [
    {
        name: 'comapanies.index',
        path: '/dashboard',
        component: CompaniesIndex,
    }
];
export default createRouter({
    history: createWebHistory(),
    routes
});
