<template>
	<div class="filter-bar">
		<div class="item">
			<input type="radio" id="tous" v-model="technologie" value="tous" />
			<label for="tous" class="label">tous</label>
		</div>

		<div class="item">
			<input
				type="radio"
				id="html-css-js"
				v-model="technologie"
				value="html-css-js"
			/>
			<label for="html-css-js" class="label">html-css-js</label>
		</div>

		<div class="item">
			<input type="radio" id="vue" v-model="technologie" value="vue" />
			<label for="vue" class="label">vue</label>
		</div>

		<div class="item">
			<input type="radio" id="php" v-model="technologie" value="php" />
			<label for="php" class="label">php</label>
		</div>

		<div class="item">
			<input type="radio" id="laravel" v-model="technologie" value="laravel" />
			<label for="laravel" class="label">laravel</label>
		</div>

		<div class="item">
			<input
				type="radio"
				id="wordpress"
				v-model="technologie"
				value="wordpress"
			/>
			<label for="wordpress" class="label">wordpress</label>
		</div>
	</div>
</template>

<script>
export default {
	name: "FilterBar",

	props: {
		defaultTechnologie: {
			type: String,
			required: true,
		},
	},

	data() {
		return {
			technologie: "",
		};
	},

	emits: ["technologieChanged"],

	watch: {
		technologie(newVal, oldVal) {
			if (oldVal !== "") {
				document
					.querySelector(`.item > input[value=${oldVal}]`)
					.nextElementSibling.classList.remove("active");
			}
			document
				.querySelector(`.item > input[value=${newVal}]`)
				.nextElementSibling.classList.add("active");
			this.$emit("technologieChanged", newVal);
		},
	},

	mounted() {
		this.technologie = this.defaultTechnologie;
		document
			.querySelector(`.item > input[value=${this.technologie}]`)
			.nextElementSibling.classList.add("active");
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
	gap: 1rem;
	margin-bottom: 3rem;
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
	transition: color 0.3s, background-color 0.2s;

	&.active,
	&:hover {
		background-color: $brand_color;
		color: #000;
	}
}
</style>
