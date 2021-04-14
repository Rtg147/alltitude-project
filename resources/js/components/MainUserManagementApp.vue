<!-- That's our main business logic application parent component  -->
<template>
	<div>
		<new-user
			v-bind:hasErrors.sync="errors.has('userName')"
			v-bind:errorMsg.sync="errors.get('userName')"
			@add-to-list="addToList"
			@keydown="keyDown"
		></new-user>
		<users-list-display
			@sort-asc="sortAsc"
			@sort-desc="sortDesc"
			v-bind:usersList.sync="usersList"
		></users-list-display>
	</div>
</template>

<script>
import NewUser from "./NewUser";
import UsersListDisplay from "./UsersListDisplay";

/**
 *
 *		This class defines our error object with the errors given by our laravel User Controller
 *
 */
export class Errors {
	constructor() {
		this.errors = {};
	}
	has(field) {
		return this.errors.hasOwnProperty(field);
	}
	get(field) {
		if (this.errors[field]) {
			return this.errors[field][0];
		}
	}
	record(errors) {
		return (this.errors = errors);
	}
	clear(field){
		return delete this.errors[field];
	}
}

export default {
	name: "MainUserManagementApp",
	data() {
		return {
			usersList: [],
			errors: new Errors(),
		};
	},
	methods: {
		addToList(name) {
			axios
				.post("api/newUser", {
					userName: name,
				})
				.then((response) => alert("User added !"))
				.catch((error) =>
					this.errors.record(error.response.data.errors)
				); // getting errors from server to 																 data errors
			this.usersList.push(name);
		},
		keyDown(name){
			this.errors.clear(name);
		},
		sortAsc() {
			return this.usersList.sort();
		},
		sortDesc() {
			return this.usersList.sort().reverse();
		},
	},
	components: { NewUser, UsersListDisplay },
	created() {
		axios.get("http://alltit.test/api/usersList").then(({ data }) => {
			this.usersList = data;
		});
	},
};
</script>
