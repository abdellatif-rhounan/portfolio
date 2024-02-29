<template>
	<Navbar />
	<Home />
	<About />
	<Works />
	<Contact />
	<Footer />
</template>

<script>
import Navbar from "@/Components/Navbar.vue";
import Home from "@/Views/Home.vue";
import About from "@/Views/About.vue";
import Works from "@/Views/Works.vue";
import Contact from "@/Views/Contact.vue";
import Footer from "@/Components/Footer.vue";

export default {
	name: "App",

	components: {
		Navbar,
		Home,
		About,
		Works,
		Contact,
		Footer,
	},

	created() {
		this.$store.dispatch("getInformations");
	},
};
</script>

<style lang="scss">
#app {
	position: relative;
}
</style>
