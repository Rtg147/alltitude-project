<!-- That's our home component where the user will be by default. It seems a bit redundant for now with the MainManagement app but if in the future the app has to evolve it is cleaner to have a Home that will have whatever it is decided to be the Homepage -->
<template>
	<main-user-management-app></main-user-management-app>
</template>

<script>
	import MainUserManagementApp from './MainUserManagementApp';
	export default{
		components: { MainUserManagementApp },
	};
</script>
