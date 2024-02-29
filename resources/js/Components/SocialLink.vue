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
	width: 38px;
	height: 38px;
	border-radius: 50%;
	border: 2px solid $brand_color;
	text-decoration: none;
	font-size: 20px;
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

// Large Screen
@media (min-width: 992px) {
	a {
		width: 40px;
		height: 40px;
		font-size: 22px;
	}
}

// xLarge Screen
@media (min-width: 1200px) {
	a {
		width: 42px;
		height: 42px;
	}
}
</style>
