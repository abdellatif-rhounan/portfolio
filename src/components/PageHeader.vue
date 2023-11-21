<template>
  <header class="header" id="header">
    <div class="container-c">
      <router-link to="/" class="logo" exact>Portfolio.</router-link>

      <nav class="navbar-c" id="navbar">
        <a href="#home" class="active">Accueil</a>
        <a href="#about">à Propos</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: "PageHeader",
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 14px 0;
  background-color: $bg_color;
  z-index: 100;
}

.container-c {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  letter-spacing: 1px;
  line-height: 1;
  font-size: 2.8rem;
  font-weight: 600;
  color: $brand_color;
  cursor: pointer;
  transition: color 0.3s;
  &:hover {
    color: $text_color;
  }
}

.navbar-c a {
  padding-bottom: 4px;
  border-bottom: 2px solid transparent;
  text-transform: uppercase;
  font-size: 1.7rem;
  font-weight: 600;
  margin-left: 4rem;
  transition: color 0.3s;

  &:hover {
    color: $brand_color;
  }

  &.active {
    color: $brand_color;
    border-bottom-color: $brand_color;
  }
}
</style>
