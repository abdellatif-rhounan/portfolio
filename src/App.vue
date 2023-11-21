<template>
  <PageHeader />
  <HomeView />
  <AboutView />
  <PortfolioView />
  <ContactView />
  <PageFooter />
</template>

<script>
import PageHeader from "@/components/PageHeader.vue";
import HomeView from "@/views/HomeView.vue";
import AboutView from "@/views/AboutView.vue";
import PortfolioView from "@/views/PortfolioView.vue";
import ContactView from "@/views/ContactView.vue";
import PageFooter from "@/components/PageFooter.vue";

export default {
  name: "App",
  components: {
    PageHeader,
    HomeView,
    AboutView,
    PortfolioView,
    ContactView,
    PageFooter,
  },
};
</script>

<style lang="scss">
#app {
  position: relative;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
