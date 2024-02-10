<template>
	<div class="project-box">
		<img
			class="img"
			:src="'storage/images/works_imgs/' + projectData.img_src"
			:alt="'Photo de projet ' + projectData.name"
		/>

		<div class="layer">
			<div class="details">
				<h3 class="title" v-text="projectData.name"></h3>
				<div class="tag">
					<span
						v-for="(technologie, i) in projectData.technologies"
						:key="i"
						v-text="technologie"
					></span>
				</div>
				<p class="description" v-text="shortDescription"></p>
			</div>

			<SocialLink
				:href="projectData.link"
				title="Voir en Ligne"
				icon="bx bx-link-external"
			/>
		</div>
	</div>
</template>

<script>
import SocialLink from "@/Components/SocialLink.vue";

export default {
	name: "ProjectBox",

	components: {
		SocialLink,
	},

	props: {
		projectData: {
			type: Object,
			required: true,
		},
	},

	computed: {
		shortDescription() {
			const maxChars = 100;
			const desc = this.projectData.description;
			if (desc.length > maxChars) {
				return `${desc.substring(0, maxChars)}....`;
			} else {
				return desc;
			}
		},
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.project-box {
	position: relative;
	height: 30rem;
	border-radius: 1.3rem;
	letter-spacing: 1px;
	overflow: hidden;
	box-shadow: 0 0 1rem #000;

	&:hover .layer {
		transform: translateY(0);
	}
}

.img {
	height: 100%;
}

.layer {
	position: absolute;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	align-items: center;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 2rem;
	background: rgba(150, 141, 123, 88%);
	transform: translateY(100%);
	transition: transform 0.3s;
}

.details {
	text-align: center;
}

.title {
	font-size: 2.1rem;
	color: $brand_color;
}

.tag {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	gap: 5px;

	span {
		padding: 1px 5px;
		border-radius: 3px;
		background: rgb(57 31 31 / 45%);
		font-size: 12px;
		color: lightgray;
	}
}

.description {
	margin: 12px 0 10px;
	padding: 14px 10px;
	border-radius: 7px;
	background: rgb(0 0 0 / 32%);
	line-height: 1.4;
	text-align: justify;
	font-size: 15px;
}
</style>
