<template>
	<a :href="href" :title="title" target="_blank">
		<i :class="icon"></i>
	</a>
</template>

<script>
export default {
	name: "SocialLink",

	props: {
		href: {
			type: String,
			required: true,
			default() {
				return "";
			},
		},
		icon: {
			type: String,
			required: true,
		},
		title: {
			type: String,
			required: true,
		},
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

a {
	position: relative;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	width: 4.3rem;
	height: 4.3rem;
	border-radius: 50%;
	border: 0.2rem solid $brand_color;
	font-size: 2.2rem;
	color: $brand_color;
	z-index: 1;
	overflow: hidden;
	transition: color 0.3s;

	&::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 0;
		height: 100%;
		background: $brand_color;
		z-index: -1;
		transition: width 0.3s;
	}

	&:hover {
		color: $bg_color;

		&::before {
			width: 100%;
		}
	}
}
</style>
