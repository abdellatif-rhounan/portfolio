<template>
	<section class="portfolio-section" id="works">
		<div class="container">
			<h2 class="heading">Mes Projets</h2>

			<FilterBar />

			<div v-if="filteredProjects.length > 0" class="projects">
				<ProjectBox
					v-for="project in filteredProjects"
					:key="project['name']"
					:projectData="project"
				/>
			</div>
			<div v-else class="no-project">Aucun Projet Trouvé</div>
		</div>
	</section>
</template>

<script>
import FilterBar from "@/Components/FilterBar.vue";
import ProjectBox from "@/Components/ProjectBox.vue";

export default {
	name: "Works",

	components: {
		FilterBar,
		ProjectBox,
	},

	computed: {
		filteredProjects() {
			return this.$store.getters.filteredProjects;
		},
	},

	created() {
		this.$store.dispatch("getProjects");
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.portfolio-section {
	display: flex;
}

.container {
	flex-basis: 100%;
}

.heading {
	margin-bottom: 15px;
}

.no-project {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50%;
	padding: 25px;
	font-size: 33px;
	color: $brand_color;
}

.projects {
	display: grid;
	grid-template-columns: 1fr;
	gap: 30px;
}

// Medium Screen
@media (min-width: 768px) {
	.projects {
		grid-template-columns: 1fr 1fr;
		column-gap: 25px;
	}
}

// xLarge Screen
@media (min-width: 1200px) {
	.projects {
		grid-template-columns: repeat(3, 1fr);
		column-gap: 30px;
	}
}
</style>
