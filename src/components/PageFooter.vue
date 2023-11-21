<template>
  <footer class="footer">
    <div class="container-c">
      <div class="text-footer">
        Tous les droits sont réservés &copy; {{ currentYear }}
        <span>Abdellatif RHOUNAN</span>
      </div>

      <div class="icon-top">
        <a href="#home">
          <i class="bx bx-up-arrow-alt"></i>
        </a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "PageFooter",
  data() {
    return {
      currentYear: new Date().getFullYear(),
    };
  },
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: $bg_color;
}

.container-c {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1.5rem 0;
}

.text-footer {
  word-spacing: 1px;
  font-size: 1.8rem;
  span {
    font-family: $font_handwriting;
    font-weight: 600;
  }
}

.icon-top {
  position: absolute;
  right: 0;
  top: 0;
  transform: translateY(-50%);
  a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background: $brand_color;
    border-radius: 0.8rem;
    transition: box-shadow 0.3s;

    i {
      font-size: 2.5rem;
      font-weight: 500;
      color: $bg_color;
    }

    &:hover {
      box-shadow: 0 0 1rem $brand_color;
    }
  }
}

// Large Screen & Below Styling
@media (max-width: 1199px) {
  .footer-iconTop a {
    width: 3.7rem;
    height: 4rem;
    i {
      font-size: 3rem;
    }
  }
}
</style>
