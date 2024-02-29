<template>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container">
			<Link class="navbar-brand" href="/">Portfolio.</Link>

			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse"
				aria-controls="navbarCollapse"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ms-auto" id="navbarNav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#home">
							Accueil
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">à Propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#works">Travaux</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
	name: "Navbar",

	components: {
		Link,
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.navbar {
	background: $bg_color;
}

.navbar-brand {
	line-height: 1;
	letter-spacing: 1.5px;
	font-size: 22px;
	font-weight: 600;
	color: $brand_color;
	transition: color 0.3s;

	&:hover {
		color: $text_color;
	}
}

.navbar-toggler {
	padding-left: 7px;
	padding-right: 7px;

	.navbar-toggler-icon {
		height: 1.35em;
	}
}

.navbar-nav {
	column-gap: 30px;
	margin-top: 7px;

	.nav-link {
		padding: {
			right: 0;
			left: 0;
		}
		font-weight: 600;
		transition: color 0.3s;

		&.active,
		&:hover {
			color: $brand_color;
		}
	}
}

// Large Screen
@media (min-width: 992px) {
	.navbar-nav {
		margin-top: 0;

		.nav-link {
			padding-bottom: 5px;
			border-bottom: 3px solid transparent;

			&.active {
				border-bottom-color: $brand_color;
			}
		}
	}
}
</style>
