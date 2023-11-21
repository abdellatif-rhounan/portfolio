<template>
  <section class="portfolio-section" id="about">
    <div class="container-c">
      <h2 class="heading">À Propos de <span>Moi</span></h2>

      <div class="content">
        <div class="img-wrapper">
          <img
            src="@/assets/images/about-profile.png"
            alt="Ma photo de profile"
          />
        </div>

        <div class="text">
          <h3>Développeur Full Stack!</h3>

          <p>
            Je suis un développeur Full Stack créatif, passionné par le
            développement informatique et la création de solutions innovantes.
          </p>
          <p>
            J'excelle dans la création des applications dynamiques en gardant à
            l'esprit une visualisation attrayante, des performances solides et
            une bonne expérience utilisateur.
          </p>
          <p>
            Pendant mon temps libre, j'aime lire des livres et regarder les
            matchs de mon équipe préférée.
          </p>

          <AnchorComp
            class="btn-brand"
            text="Télécharger CV"
            icon="bx bxs-download"
            href="https://drive.google.com/file/d/1QFiquw0YiB3MFyFa4Bk5_Gzzshwtazdo/view?usp=sharing"
            target="_blank"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import AnchorComp from "@/components/AnchorComp.vue";

export default {
  name: "AboutView",
  components: {
    AnchorComp,
  },
};
</script>

<style lang="scss" scoped>
@use "@/assets/scss/helpers/variables" as *;

.portfolio-section {
  display: flex;
  align-items: center;
  background-color: $bg_secondary_color;
}

.content {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 3rem;
}

.img-wrapper {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  right: calc(60% + 3rem);
  height: 414px;
  width: 31%;
  background: #ffb633;
  mask-image: url("@/assets/images/about-mask.png");
  mask-repeat: no-repeat;
  mask-size: 485px 424px;
  mask-position: 11% 145%;
  img {
    width: 320px;
  }
}

.text {
  flex-basis: 60%;

  h3 {
    font-family: $font_handwriting;
    font-size: 2.5rem;
    font-weight: 500;
    color: $brand_color;
    margin-bottom: 2rem;
  }

  p {
    text-align: justify;
    letter-spacing: 1px;
    font-family: $font_handwriting;
    font-size: 2rem;
    margin-bottom: 1.3rem;
  }
}
</style>
