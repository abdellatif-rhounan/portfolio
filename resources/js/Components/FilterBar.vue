<template>
	<div class="filter-bar">
		<div v-for="filter in filters" class="item" :key="filter">
			<input type="radio" :id="filter" v-model="technologie" :value="filter" />

			<label
				:for="filter"
				class="label"
				:class="{ active: technologie === filter }"
			>
				{{ filter }}
			</label>
		</div>
	</div>
</template>

<script>
export default {
	name: "FilterBar",

	data() {
		return {
			technologie: "",
		};
	},

	computed: {
		filters() {
			return this.$store.state.filters;
		},

		actualTechnologie() {
			return this.$store.state.actualTechnologie;
		},
	},

	watch: {
		technologie(newVal) {
			this.$store.commit("actualTechnologieMutate", newVal);
		},
	},

	created() {
		this.technologie = this.actualTechnologie;
		this.$store.dispatch("getFilters");
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.filter-bar {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	gap: 10px;
	margin-bottom: 30px;
}

.item input {
	display: none;
}

.label {
	padding: 5px 8px;
	border-radius: 3px;
	border: 1px solid $brand_color;
	font-size: 14px;
	cursor: pointer;
	transition: color 0.3s, background-color 0.3s;

	&.active,
	&:hover {
		background-color: $brand_color;
		color: #000;
	}
}
</style>
