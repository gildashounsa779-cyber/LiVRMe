<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>LiVRMe - Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="acceuil.css">
</head>
<body>

  <!-- HEADER -->
  <?php include 'includes/header.php'; ?>

  <!-- ===== A PROPOS ===== -->
  <section id="apropos" class="hero">
    <div class="hero-text">
      <h2>La livraison simple, rapide et sécurisée</h2>
      <p>Avec LiVRMe, envoyez et recevez vos colis en toute tranquillité. Notre réseau de livreurs indépendants est là pour vous.</p>
      <a href="auth/login.html" class="cta">Commencer maintenant</a>
    </div>
    <div class="hero-img">
      <img src="https://cdn-icons-png.flaticon.com/512/679/679922.png" alt="Illustration livraison">
    </div>
    <p>LiVRMe est une plateforme de mise en relation entre clients et livreurs indépendants, pensée pour simplifier et structurer le marché de la livraison au Bénin. 
      Grâce à notre solution, vous pouvez publier vos besoins de livraison et recevoir des offres de plusieurs livreurs rapidement, en toute sécurité.</p>
  </section>

  <!-- ===== NOS QUALITÉS ===== -->
  <section class="qualites">
    <h2>Nos qualités</h2>
    <div class="grid">
      <div class="item">
        <h3>Rapidité</h3>
        <p>Vos colis livrés dans les meilleurs délais grâce à nos livreurs réactifs.</p>
      </div>
      <div class="item">
        <h3>Fiabilité</h3>
        <p>Chaque livreur est évalué par la communauté pour assurer un service de qualité.</p>
      </div>
      <div class="item">
        <h3>Flexibilité</h3>
        <p>Une offre personnalisée selon votre besoin, votre budget, et votre timing.</p>
      </div>
    </div>
  </section>

  <!-- ===== COMMENT ÇA MARCHE ===== -->
  <section id="comcm" class="steps">
    <h3>Comment ça marche ?</h3>
    <div class="steps-grid">
      <div class="step">
        <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="">
        <h4>1. Créez votre demande</h4>
        <p>Entrez les détails de votre colis et vos préférences de livraison.</p>
      </div>
      <div class="step">
        <img src="https://cdn-icons-png.flaticon.com/512/3176/3176366.png" alt="">
        <h4>2. Un livreur accepte</h4>
        <p>Les livreurs intéressés et proches vous envoient leurs offres avec prix et délais estimés. Choisissez le livreur qui vous convient et il prendra en charge votre demande rapidement.</p>
      </div>
      <div class="step">
        <img src="https://cdn-icons-png.flaticon.com/512/4323/4323071.png" alt="">
        <h4>3. Suivez et recevez</h4>
        <p>Suivez la livraison en direct et recevez votre colis en toute sécurité.</p>
      </div>
    </div>
  </section>

  <!-- ===== AVIS ===== -->
  <section id="avis" class="reviews">
    <h3>Ce que nos clients disent</h3>
    <div class="carousel">
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐⭐</p>
          <p>"Service impeccable, mon colis est arrivé en avance !"</p>
          <span>- Fatou S.</span>
        </div>
      </div>
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐</p>
          <p>"Les livreurs sont sérieux et les prix sont raisonnables. Je recommande vivement."</p>
          <span>- Julien A.</span>
        </div>
      </div>
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐</p>
          <p>"Livreur très sympa et suivi en temps réel rassurant."</p>
          <span>- Marc D.</span>
        </div>
      </div>
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐⭐</p>
          <p>"Je recommande LiVRMe, c’est rapide et sécurisé."</p>
          <span>- Aïcha F.</span>
        </div>
      </div>
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐⭐</p>
          <p>"C’est comme avoir un ami toujours dispo pour livrer. Je recommande vraiment LiVRMe !"</p>
          <span>- Justine T.</span>
        </div>
      </div>
      <div class="slider-track">
        <div class="review">
          <p class="sticker">⭐⭐⭐⭐⭐</p>
          <p>"Avant je perdais beaucoup de temps pour récupérer mes documents. Maintenant, je les fais livrer directement au bureau. Fiable et efficace."</p>
          <span>- Idriss G.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA finale -->
  <section class="cta-section">
    <h3>Prêt à livrer ou recevoir vos colis ?</h3>
    <p>Rejoignez LiVRMe dès aujourd’hui et profitez de la simplicité.</p>
    <a href="auth/register.html">Commencer maintenant</a>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>