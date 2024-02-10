<template>
	<header class="header" id="header">
		<div class="container">
			<Link href="/" class="logo">Portfolio.</Link>

			<nav class="navbar" id="navbar">
				<a href="#home" class="active">Accueil</a>
				<a href="#about">à Propos</a>
				<a href="#works">Travaux</a>
				<a href="#contact">Contact</a>
			</nav>
		</div>
	</header>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
	name: "PageHeader",

	components: {
		Link,
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	padding: 13px 0;
	background: $bg_color;
	z-index: 100;
}

.container {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.logo {
	line-height: 1;
	letter-spacing: 1.5px;
	font-size: 2.8rem;
	font-weight: 600;
	color: $brand_color;
	transition: color 0.3s;

	&:hover {
		color: $text_color;
	}
}

.navbar > a {
	margin-left: 4rem;
	padding-bottom: 5px;
	border-bottom: 2px solid transparent;
	text-transform: uppercase;
	font-size: 1.7rem;
	font-weight: 600;
	transition: color 0.3s;

	&.active {
		border-bottom-color: $brand_color;
		color: $brand_color;
	}

	&:hover {
		color: $brand_color;
	}
}
</style>
