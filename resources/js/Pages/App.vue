<template>
	<PageHeader />
	<Home />
	<About />
	<Works />
	<PageFooter />
</template>

<script>
import PageHeader from "@/Components/PageHeader.vue";
import Home from "@/Views/Home.vue";
import About from "@/Views/About.vue";
import Works from "@/Views/Works.vue";
import PageFooter from "@/Components/PageFooter.vue";

export default {
	name: "App",

	components: {
		PageHeader,
		Home,
		About,
		Works,
		PageFooter,
	},
};
</script>

<style lang="scss">
#app {
	position: relative;
}
</style>
