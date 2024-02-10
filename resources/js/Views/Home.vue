<template>
	<section class="portfolio-section" id="home">
		<div class="container">
			<div class="content">
				<span class="greeting">Bonjour, Je suis</span>

				<div class="myname"><span>Abdellatif</span> Rhounan</div>

				<div class="description">Développeur Full Stack</div>

				<div class="box-btn">
					<AnchorComp
						class="btn btn-brand"
						icon="bx bxs-download"
						target="_blank"
						href="https://drive.google.com/file/d/1QFiquw0YiB3MFyFa4Bk5_Gzzshwtazdo/view?usp=sharing"
					>
						Télécharger CV
					</AnchorComp>

					<AnchorComp class="btn btn-outline-brand" href="#works">
						Voir Portfolio
					</AnchorComp>
				</div>
			</div>

			<div class="home-img">
				<div class="img-wrapper">
					<img
						src="storage/images/developer.png"
						alt="Ma Photo Professionnelle"
					/>
				</div>
			</div>

			<div class="social">
				<SocialLink
					href="https://www.linkedin.com/in/abdellatif-rhounan"
					icon="bx bxl-linkedin"
					title="Mon Compte LinkedIn"
				/>

				<SocialLink
					href="https://www.github.com/abdellatif-rhounan"
					icon="bx bxl-github"
					title="Mon Compte Github"
				/>

				<SocialLink href="#" icon="bx bxl-youtube" title="Ma Chaine Youtube" />
			</div>
		</div>
	</section>
</template>

<script>
import AnchorComp from "@/Components/AnchorComp.vue";
import SocialLink from "@/Components/SocialLink.vue";

export default {
	name: "Home",

	components: {
		AnchorComp,
		SocialLink,
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.portfolio-section {
	display: flex;
}

.container {
	position: relative;
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-basis: 100%;
}

.content {
	flex-basis: 40%;
	font-weight: 600;
}

.greeting {
	font-size: 2.5rem;
}

.myname {
	margin-top: 1.2rem;
	font-family: $hand_font;
	font-size: 6rem;
	> span {
		font-family: inherit;
		color: $brand_color;
	}
}

.description {
	font-size: 2.7rem;
	margin-bottom: 3rem;
}

.box-btn {
	display: inline-flex;
	gap: 2rem;
}

.home-img {
	position: relative;
	width: 490px;
	height: 490px;
	padding: 20px;
	border-radius: 50%;
	z-index: 1;

	&::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: inherit;
		height: inherit;
		border-radius: inherit;
		background: conic-gradient(
			$brand_color 22%,
			transparent 22% 50%,
			$brand_color 50% 72%,
			transparent 72% 100%
		);
		mask-image: radial-gradient(
			farthest-side,
			transparent calc(100% - 20px),
			#000 0
		);
		-webkit-mask-image: radial-gradient(
			farthest-side,
			transparent calc(100% - 7px),
			#000 0
		);
		z-index: -1;
		animation: rotate-image 5s linear infinite;
	}
}

.img-wrapper {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100%;
	border-radius: 50%;
	background: $brand_color;
	overflow: hidden;

	img {
		width: 64%;
	}
}

.social {
	position: absolute;
	bottom: 0;
	display: inline-flex;
	column-gap: 1.5rem;
}

@keyframes rotate-image {
	100% {
		transform: rotate(360deg);
	}
}
</style>
