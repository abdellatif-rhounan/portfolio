<template>
  <a :class="computedClass" :href="href">
    {{ text }}
    <i v-if="icon" :class="icon"></i>
  </a>
</template>

<script>
export default {
  name: "AnchorComp",
  props: {
    class: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
    href: {
      type: String,
      required: true,
    },
    icon: {
      type: String,
      required: false,
    },
  },
  computed: {
    computedClass() {
      return `btn ${this.class}`;
    },
  },
};
</script>
