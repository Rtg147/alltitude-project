<!-- This component contains the businesss logic that has to do with the creation of a New username -->
<template>
	<div class="addUser">
		<input
			@keyup.enter="addUser"
			@keydown="keyDown($event.target.name)"
			type="text"
			name="userName"
			v-model="userName"
			placeholder="Name"
		/>
		<button @click="addUser">ADD</button><br>
		<span v-if="hasErrors" class="error" v-text="errorMsg"></span>
	</div>
</template>

<script>
export default {
	name: 'NewUser',
	props: { errorMsg: String,
			 hasErrors: Boolean
	 },
	data(){
		return {
			userName: "",
		}
	},
	methods: {
		addUser() {
			this.$emit('add-to-list',this.userName)
		},
		keyDown(name){
			this.$emit('keydown',name)
		}
	}
}
</script>