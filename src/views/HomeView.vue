<template>
  <section class="portfolio-section" id="home">
    <div class="container-c">
      <div class="content">
        <span class="greeting">Bonjour, Je suis</span>

        <div class="name"><span>Abdellatif</span> Rhounan</div>

        <div class="desc">Développeur Full Stack</div>

        <div class="btn-box">
          <AnchorComp
            class="btn-brand"
            text="Télécharger CV"
            icon="bx bxs-download"
            href="https://drive.google.com/file/d/1QFiquw0YiB3MFyFa4Bk5_Gzzshwtazdo/view?usp=sharing"
            target="_blank"
          />

          <AnchorComp
            class="btn-outline-brand"
            text="Voir Portfolio"
            href="#portfolio"
          />
        </div>
      </div>

      <div class="home-img">
        <div class="img-wrapper">
          <img
            src="@/assets/images/developer.png"
            alt="ma photo professionnelle"
          />
        </div>
      </div>

      <div class="social">
        <SocialIcon
          href="https://www.linkedin.com/in/abdellatif-rhounan"
          icon="bx bxl-linkedin"
          title="Mon Compte LinkedIn"
        />

        <SocialIcon
          href="https://www.github.com/abdellatif-rhounan"
          icon="bx bxl-github"
          title="Mon Compte Github"
        />

        <SocialIcon href="#" icon="bx bxl-youtube" title="Ma Chaine Youtube" />
      </div>
    </div>
  </section>
</template>

<script>
import AnchorComp from "@/components/AnchorComp.vue";
import SocialIcon from "@/components/SocialIcon.vue";

export default {
  name: "HomeView",
  components: {
    AnchorComp,
    SocialIcon,
  },
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.portfolio-section {
  display: flex;
}

.container-c {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-basis: 100%;
}

.content {
  flex-basis: 40%;
  font-weight: 600;
}

.greeting {
  font-size: 2.5rem;
}

.name {
  font-family: $font_handwriting;
  font-size: 6rem;
  margin-top: 1.2rem;
  span {
    color: $brand_color;
    font-family: inherit;
  }
}

.desc {
  font-size: 2.7rem;
  margin-bottom: 3rem;
}

.btn-box {
  display: inline-flex;
  gap: 2rem;
}

.home-img {
  position: relative;
  width: 500px;
  height: 500px;
  padding: 20px;
  border-radius: 50%;
  z-index: 1;

  &::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: conic-gradient(
      $brand_color 22%,
      $bg_color 22% 50%,
      $brand_color 50% 72%,
      $bg_color 72% 100%
    );
    mask-image: radial-gradient(
      farthest-side,
      transparent calc(100% - 20px),
      #000 0
    );
    -webkit-mask-image: radial-gradient(
      farthest-side,
      transparent calc(100% - 7px),
      #000 0
    );
    z-index: -1;
    animation: rotateImage 5s linear infinite;
  }
}

.img-wrapper {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  height: 100%;
  border-radius: 50%;
  background: $brand_color;
  overflow: hidden;

  img {
    width: 64%;
  }
}

.social {
  position: absolute;
  bottom: 0;
  display: inline-flex;
  gap: 1.5rem;
}

@keyframes rotateImage {
  100% {
    transform: rotate(360deg);
  }
}
</style>
