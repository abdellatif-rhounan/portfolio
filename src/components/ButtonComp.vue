<template>
  <button :class="computedClass">
    {{ text }}
    <i v-if="icon" :class="icon"></i>
  </button>
</template>

<script>
export default {
  name: "ButtonComp",
  props: {
    class: {
      type: String,
      required: true,
    },
    text: {
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
