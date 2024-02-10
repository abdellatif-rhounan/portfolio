<template>
	<footer class="footer">
		<div class="container">
			<div class="text">
				Tous les droits sont réservés &copy; {{ currentYear }}
				<span>Abdellatif RHOUNAN</span>
			</div>

			<div class="icon-top">
				<a href="#home">
					<i class="bx bx-up-arrow-alt"></i>
				</a>
			</div>
		</div>
	</footer>
</template>

<script>
export default {
	name: "PageFooter",

	data() {
		return {
			currentYear: new Date().getFullYear(),
		};
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	background: $bg_color;
}

.container {
	position: relative;
	display: flex;
	flex-direction: column;
	align-items: center;
	padding: 1.5rem 0;
}

.text {
	word-spacing: 1px;
	font-size: 1.8rem;

	span {
		font-family: $hand_font;
		font-weight: 600;
	}
}

.icon-top {
	position: absolute;
	right: 0;
	top: 0;
	transform: translateY(-50%);

	a {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 4rem;
		height: 4rem;
		border-radius: 0.8rem;
		background: $brand_color;
		transition: box-shadow 0.3s;

		i {
			font-size: 2.5rem;
			font-weight: 500;
			color: $bg_color;
		}

		&:hover {
			box-shadow: 0 0 1rem $brand_color;
		}
	}
}
</style>
