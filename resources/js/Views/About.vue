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
						class="btn btn-brand"
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
	display: flex;
	align-items: center;
	background: $second_bg_color;
}

.content {
	display: flex;
	justify-content: flex-end;
	align-items: center;
	column-gap: 3rem;
}

.img-wrapper {
	position: absolute;
	right: calc(60% + 3rem);
	display: flex;
	justify-content: center;
	align-items: center;
	width: 31%;
	height: 414px;
	background: $brand_color;
	mask-image: url("storage/images/about-mask.png");
	mask-repeat: no-repeat;
	mask-size: 485px 424px;
	mask-position: 11% 145%;
	img {
		width: 320px;
	}
}

.text {
	flex-basis: 60%;

	h3 {
		margin-bottom: 2rem;
		font-family: $hand_font;
		font-size: 2.5rem;
		font-weight: 500;
		color: $brand_color;
	}

	p {
		margin-bottom: 1.3rem;
		text-align: justify;
		letter-spacing: 1px;
		font-family: $hand_font;
		font-size: 2rem;

		&:last-of-type {
			margin-bottom: 2.5rem;
		}
	}
}
</style>
