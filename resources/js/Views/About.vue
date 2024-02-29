<template>
	<section class="portfolio-section" id="about">
		<div class="container">
			<h2 class="heading">
				À Propos de
				<span>Moi</span>
			</h2>

			<div class="content">
				<div class="img-wrapper">
					<img :src="informations['about_photo']" alt="Ma Photo de Profile" />
				</div>

				<div class="text">
					<h3>{{ informations["description"] }} !</h3>

					<p>
						{{ informations["bio_1"] }}
					</p>
					<p>
						{{ informations["bio_2"] }}
					</p>
					<p>
						{{ informations["bio_3"] }}
					</p>

					<AnchorComp
						class="btn-c btn-brand"
						:href="informations['resume']"
						icon="bx bxs-download"
						target="_blank"
					>
						Télécharger CV
					</AnchorComp>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
import AnchorComp from "@/Components/AnchorComp.vue";

export default {
	name: "About",

	components: {
		AnchorComp,
	},

	computed: {
		informations() {
			return this.$store.state.informations;
		},
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.portfolio-section {
	background: $second_bg_color;
}

.img-wrapper {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 426px;
	height: 414px;
	margin: 0 auto;
	background: $brand_color;
	mask-image: url("storage/images/about-mask.png");
	mask-repeat: no-repeat;
	mask-size: 100% 424px;
	mask-position: 11% 145%;
	img {
		width: 300px;
	}
}

.text {
	h3 {
		margin-bottom: 14px;
		font-family: $hand_font;
		font-size: 22px;
		font-weight: 500;
		color: $brand_color;
	}

	p {
		margin-bottom: 12px;
		text-align: justify;
		letter-spacing: 1px;
		font-family: $hand_font;
		font-size: 17px;

		&:last-of-type {
			margin-bottom: 25px;
		}
	}
}

// Small Screen
@media (min-width: 576px) {
	.text {
		h3 {
			font-size: 25px;
		}

		p {
			margin-bottom: 13px;
			font-size: 20px;
		}
	}
}

// Large Screen
@media (min-width: 992px) {
	.portfolio-section {
		display: flex;
		align-items: center;
	}

	.content {
		display: flex;
		justify-content: flex-end;
		align-items: center;
		column-gap: 30px;
	}

	.img-wrapper {
		position: absolute;
		right: calc(50% + 30px);
		mask-position: 48% 110%;
	}

	.text {
		flex-basis: 50%;
	}
}

// xLarge Screen
@media (min-width: 1200px) {
	.img-wrapper {
		right: calc(57% + 30px);
	}

	.text {
		flex-basis: 57%;
	}
}

// xxLarge Screen
@media (min-width: 1400px) {
	.img-wrapper {
		right: calc(63% + 30px);
	}

	.text {
		flex-basis: 63%;
	}
}
</style>
