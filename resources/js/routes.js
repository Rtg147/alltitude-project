import Home from './components/Home.vue';
import NotFound from './components/NotFound'

export default{
	mode: 'history',

	routes: [

		{
			path:'*',
			component: NotFound
		},
		{
			path:'/',
			component: Home
		}

	]	
}