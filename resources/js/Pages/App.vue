<template>
	<PageHeader />
	<Home />
	<About />
</template>

<script>
import PageHeader from "@/Components/PageHeader.vue";
import Home from "@/Views/Home.vue";
import About from "@/Views/About.vue";

export default {
	name: "App",

	components: {
		PageHeader,
		Home,
		About,
	},
};
</script>

<style lang="scss">
#app {
	position: relative;
}
</style>
