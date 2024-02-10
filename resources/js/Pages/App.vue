<template>
	<PageHeader />
	<Home />
</template>

<script>
import PageHeader from "@/Components/PageHeader.vue";
import Home from "@/Views/Home.vue";

export default {
	name: "App",

	components: {
		PageHeader,
		Home,
	},
};
</script>

<style lang="scss">
#app {
	position: relative;
}
</style>
