<template>
	<PageHeader />
	<Home />
	<About />
	<Works />
</template>

<script>
import PageHeader from "@/Components/PageHeader.vue";
import Home from "@/Views/Home.vue";
import About from "@/Views/About.vue";
import Works from "@/Views/Works.vue";

export default {
	name: "App",

	components: {
		PageHeader,
		Home,
		About,
		Works,
	},
};
</script>

<style lang="scss">
#app {
	position: relative;
}
</style>
