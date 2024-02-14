import { createStore } from "vuex";
import axios from "axios";

// Create A New Store Instance
const store = createStore({
	state() {
		return {
			informations: [],
			actualTechnologie: "tous",
			filters: [],
			projects: [],
		};
	},

	getters: {
		filteredProjects(state) {
			if (state.actualTechnologie === "tous") {
				return state.projects;
			}

			let regX = new RegExp(state.actualTechnologie, "i");

			return state.projects.filter((el) => {
				return el.technologies.some((el) => el.match(regX));
			});
		},
	},

	mutations: {
		// Change Filters
		filtersMutate(state, filters) {
			state.filters = filters;
		},

		// Change Projects
		projectsMutate(state, projects) {
			state.projects = projects;
		},

		// Change Informations
		informationsMutate(state, informations) {
			state.informations = informations;
		},

		// Change Actual Technologie
		actualTechnologieMutate(state, actualTechnologie) {
			state.actualTechnologie = actualTechnologie;
		},
	},

	actions: {
		// Get All Filters From DB
		getFilters({ commit }) {
			axios
				.get("filters")
				.then((res) => {
					commit("filtersMutate", res.data);
				})
				.catch((err) => {
					console.log(err);
				});
		},

		// Get All Projects From DB
		getProjects({ commit }) {
			axios
				.get("projects")
				.then((res) => {
					commit("projectsMutate", res.data);
				})
				.catch((err) => {
					console.log(err);
				});
		},

		// Get All Informations From DB
		getInformations({ commit }) {
			axios
				.get("informations")
				.then((res) => {
					commit("informationsMutate", res.data);
				})
				.catch((err) => {
					console.log(err);
				});
		},
	},
});

export default store;
