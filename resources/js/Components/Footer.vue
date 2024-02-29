<template>
	<footer class="footer">
		<div class="container">
			<div class="text">
				Tous les droits sont réservés &copy; {{ currentYear }}
				<span>{{ firstname }} {{ lastname }}</span>
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
	name: "Footer",

	data() {
		return {
			currentYear: new Date().getFullYear(),
		};
	},

	computed: {
		firstname() {
			return this.$store.state.informations["firstname"];
		},

		lastname() {
			return this.$store.state.informations["lastname"];
		},
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
	padding: 13px 0;
}

.text {
	font-size: 15px;

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
		width: 35px;
		height: 35px;
		border-radius: 7px;
		background: $brand_color;
		text-decoration: none;
		transition: box-shadow 0.3s;

		i {
			font-size: 25px;
			font-weight: 500;
			color: $bg_color;
		}

		&:hover {
			box-shadow: 0 0 10px $brand_color;
		}
	}
}
</style>
