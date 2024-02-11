<template>
	<button :class="class" :type="type">
		<slot />
		<i v-if="icon" :class="icon"></i>
	</button>
</template>

<script>
export default {
	name: "ButtonComp",

	props: {
		class: {
			type: String,
			required: true,
		},
		type: {
			type: String,
			required: true,
		},
		icon: {
			type: String,
			required: false,
		},
	},
};
</script>
