<template>
  <section class="portfolio-section" id="portfolio">
    <div class="container-c">
      <h2 class="heading">Mes Projets</h2>

      <FilterComp @pickedChanged="filterProjects" :defaultPicked="pickedTech" />

      <div class="projects" v-if="computedProjects.length > 0">
        <projectBox
          v-for="(project, i) in computedProjects"
          :key="i"
          :data="project"
        />
      </div>
      <div class="no-project" v-else>No Project Found</div>
    </div>
  </section>
</template>

<script>
import FilterComp from "@/components/FilterComp.vue";
import projectBox from "@/components/projectBox.vue";

export default {
  name: "PortfolioView",
  components: {
    FilterComp,
    projectBox,
  },
  data() {
    return {
      projects: [
        {
          title: "portfolio",
          img: "portfolio.png",
          link: "https://abdellatif-portfolio-app.netlify.app/",
          langUsed: ["Vue"],
          alt: "photo de projet",
          description:
            "Ce projet est un portfolio personel a comme but de lister mes projets personel.",
        },
        {
          title: "todo-app",
          img: "todo-app.png",
          link: "https://abdellatif-todo-app.netlify.app/",
          langUsed: ["Vue"],
          alt: "photo de projet",
          description: "Ce projet est une application Todo.",
        },
        {
          title: "employees-manager",
          img: "employees-manager.png",
          link: "https://github.com/abdellatif-rhounan/employees-manager",
          langUsed: ["Laravel"],
          alt: "photo de projet",
          description:
            "Ce projet est une simple application pour gérer les employees.",
        },
        {
          title: "employees-php",
          img: "employees-php.png",
          link: "https://github.com/abdellatif-rhounan/employees-php",
          langUsed: ["PHP"],
          alt: "photo de projet",
          description:
            "Ce projet est une simple application pour gérer les employees.",
        },
      ],
      pickedTech: "Tous",
    };
  },
  methods: {
    filterProjects(newVal) {
      this.pickedTech = newVal;
    },
  },
  computed: {
    computedProjects() {
      if (this.pickedTech == "Tous") {
        return this.projects;
      }
      let regX = new RegExp(this.pickedTech, "i");
      return this.projects.filter((el) => {
        return el.langUsed.some((el) => el.match(regX));
      });
    },
  },
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.portfolio-section {
  display: flex;
}

.container-c {
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
