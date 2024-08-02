require('./bootstrap');

import {
    createApp
} from 'vue';

import router from "./router"; //apni series mai ho to ek ./ de k likhty warna ../ de k pechy
import CompaniesIndex from "./components/companies/index.vue";

createApp({
    components: {           // k aapki ap ki app konsy components use kry gi 
        CompaniesIndex
    }
}).use(router).mount('#app'); //create app k andar pehly arguments aty and yeh ek router ko use kry ga  second yeh kis id par mount hoga 
