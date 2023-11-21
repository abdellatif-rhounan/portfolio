<template>
  <div class="filter">
    <div class="filter-item">
      <input type="radio" id="Tous" v-model="picked" value="Tous" />
      <label for="Tous" class="label">Tous</label>
    </div>

    <div class="filter-item">
      <input
        type="radio"
        id="html_css_js"
        v-model="picked"
        value="html_css_js"
      />
      <label for="html_css_js" class="label">html/css/js</label>
    </div>

    <div class="filter-item">
      <input type="radio" id="Vue" v-model="picked" value="Vue" />
      <label for="Vue" class="label">Vue</label>
    </div>

    <div class="filter-item">
      <input type="radio" id="PHP" v-model="picked" value="PHP" />
      <label for="PHP" class="label">PHP</label>
    </div>

    <div class="filter-item">
      <input type="radio" id="Laravel" v-model="picked" value="Laravel" />
      <label for="Laravel" class="label">Laravel</label>
    </div>

    <div class="filter-item">
      <input type="radio" id="Wordpress" v-model="picked" value="Wordpress" />
      <label for="Wordpress" class="label">Wordpress</label>
    </div>
  </div>
</template>

<script>
export default {
  name: "FilterComp",
  props: {
    defaultPicked: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      picked: "",
    };
  },
  emits: ["pickedChanged"],
  watch: {
    picked(newVal, oldVal) {
      if (oldVal !== "") {
        document
          .querySelector(`.filter-item > input[value=${oldVal}]`)
          .nextElementSibling.classList.remove("active");
      }
      document
        .querySelector(`.filter-item > input[value=${newVal}]`)
        .nextElementSibling.classList.add("active");
      this.$emit("pickedChanged", newVal);
    },
  },
  mounted() {
    this.picked = this.defaultPicked;
    document
      .querySelector(`.filter-item > input[value=${this.picked}]`)
      .nextElementSibling.classList.add("active");
  },
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.filter {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 1rem;
  margin-bottom: 3rem;
}

.filter-item input {
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
