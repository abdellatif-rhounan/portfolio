<template>
	<a :class="class" :href="href" :target="target">
		<slot />
		<i v-if="icon" :class="icon"></i>
	</a>
</template>

<script>
export default {
	name: "AnchorComp",

	props: {
		class: {
			type: String,
			required: true,
		},
		href: {
			type: String,
			required: true,
		},
		icon: {
			type: String,
			required: false,
		},
		target: {
			type: String,
			required: false,
		},
	},
};
</script>
