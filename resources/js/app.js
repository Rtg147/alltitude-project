import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";

import axios from 'axios';

import '../css/app.css'

// Setting our axios library for our futures AJAX queries
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
*
* This is our main app page where all our app components will be.
*
*/
Vue.use(VueRouter);

let app = new Vue({
	el: "#app",
	data: {
	},
	methods: {
	},
	router: new VueRouter(routes),
});
