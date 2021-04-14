<!-- This component contains everything that has to do with the list of users displayed and the sorting options that we might put on a child component if it starts to get more complex -->
<template>
	<div class="userDisplay">
		<h3 style="display:inline">Liste</h3>
		<button @click="sortAsc">Asc</button>
		<button @click="sortDesc">Desc</button><br />

		<select
			name="userNameList"
			class="userNameList"
			size="15"
			style="width:250px"
		>
			<option v-for="user in usersList" :key="user.userId"
				>{{ user }}</option
			>
		</select>
	</div>
</template>

<script>
export default {
	name: "UsersListDisplay",
	props: { usersList: Array },
	methods: {
		sortAsc() {
			this.$emit('sort-asc')
		},
		sortDesc() {
			this.$emit('sort-desc')
		},
	}
};
</script>
