<template>
	<section class="portfolio-section" id="works">
		<div class="container">
			<h2 class="heading">Mes Projets</h2>

			<FilterBar
				@technologieChanged="changePickedTechnologie"
				:defaultTechnologie="pickedTechnologie"
			/>

			<div v-if="filteredProjects.length > 0" class="projects">
				<ProjectBox
					v-for="(project, i) in filteredProjects"
					:key="i"
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

	data() {
		return {
			projects: [
				{
					name: "portfolio",
					img_src: "portfolio.png",
					link: "https://abdellatif-portfolio-app.netlify.app/",
					technologies: ["vue", "laravel"],
					description:
						"Ce projet est un portfolio personel a comme but de lister mes projets personel.",
				},
				{
					name: "todo-app",
					img_src: "todo-app.png",
					link: "https://abdellatif-todo-app.netlify.app/",
					technologies: ["vue"],
					description: "Ce projet est une application Todo.",
				},
				{
					name: "employees-manager",
					img_src: "employees-manager.png",
					link: "https://github.com/abdellatif-rhounan/employees-manager",
					technologies: ["laravel"],
					description:
						"Ce projet est une simple application pour gérer les employees.",
				},
				{
					name: "employees-php",
					img_src: "employees-php.png",
					link: "https://github.com/abdellatif-rhounan/employees-php",
					technologies: ["php"],
					description:
						"Ce projet est une simple application pour gérer les employees.",
				},
			],
			pickedTechnologie: "tous",
		};
	},

	methods: {
		changePickedTechnologie(newVal) {
			this.pickedTechnologie = newVal;
		},
	},

	computed: {
		filteredProjects() {
			if (this.pickedTechnologie === "tous") {
				return this.projects;
			} else {
				let regX = new RegExp(this.pickedTechnologie, "i");

				return this.projects.filter((el) => {
					return el.technologies.some((el) => el.match(regX));
				});
			}
		},
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
	margin-bottom: 1rem;
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
	grid-template-columns: repeat(3, 1fr);
	gap: 3.2rem;
}
</style>
