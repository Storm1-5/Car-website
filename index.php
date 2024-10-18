<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title style="font-family: Arial, sans-serif;">Garage Boutique</title>
  <link rel="stylesheet" href="style.css">
  <link rel="website icon" type="ico" href="favicon.ico">
  <script src="scrypt.js"></script>
</head>
<body>
    <header>
        <h1 style="font-size:65px; border-radius: 12px; color:black; margin: 20px; background-color: #847a7b;">
        <img src="favicon.ico">
        Bienvenue sur Garage Boutique</h1>
    </header>
    <div style="text-align: center;">


    <div class="nice mb-4"></div>
            <!-- <nav>
            <a href="#">Accueil</a>
            <a href="#">Produits</a>
            <a href="#">Panier</a>
        </nav> -->
        
        <div class="bg mb-4"> 
        <main>
          <section id="products">
              <h2 class="bgm mb-4">Nos Produits en stock</h2>
              <?php include './prod.php'; ?>
              <?php foreach ($products as $product): ?>
                  <div class="product" data-id="<?= $product['id'] ?>">
                      <h3 style="color: black;"><?= $product['name'] ?></h3>
                      <p>Prix: <?= $product['price'] ?>€</p>
                      <form action="cart.php" method="post">
                          <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                          <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                          <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                          <button type="submit" class="add-to-cart">Ajouter au panier</button>
                        </form>
                    </div>
                    <?php endforeach; ?>
          </section>
          <section id="cart">
              <h2 class="vp" >Votre Panier</h2>
              <ul id="cart-items">
                  <?php
                  session_start();
                  $total = 0;
                  foreach ($_SESSION['cart'] as $item):
                      $total += $item['price'] * $item['quantity'];
                  ?>
                      <li><?= $item['name'] ?> - <?= $item['quantity'] ?> x <?= $item['price'] ?>€</li>
                  <?php endforeach; ?>
              </ul>
              <p>Total: <span id="total-price"><?= $total ?></span>€
              <a href="/Project1/index.php?action=resetBasket">here</a>
              <button type="resetCart()" class="reset">Réinitialiser les achats</button></p>
              
          </section>   
          <div data-v-751a9e70="" class="n-padded-container tw-pt-16 tw-pb-8" style="font: size 15px; border-radius: 12px; color:black; margin: 20px; background-color: #847a7b;">
            <h2 data-v-fde0ba8f="" data-v-751a9e70="" class="bgm mb-4">Nos catégories les plus recherchées</h2> <!---->
             <div data-v-751a9e70="" class="n-cat-wrapper n-cat-wrapper-separator">
                <details data-v-55126353="" data-v-6aa74a73="" data-v-751a9e70="" class="n-accordion n-accordion-details -disabled n-collapsible-list tw-flex-1 -sm-inline" open="" show-separators="true" >
                    <summary data-v-55126353="" class="n-accordion-summary">
                        <div data-v-6aa74a73="" class="n-collapse-list-title"><!----> <!----> 
                            <p data-v-6aa74a73="" class="n-collapse-list-title-label" role="heading" aria-level="3">Pneu <!----></p>
                        </div>
                    </summary>
                      <ul data-v-6aa74a73="">
                        <li data-v-6aa74a73="" class="n-collapse-list-item">
                            <a data-v-6aa74a73="" href="/e/pneu-michelin.html" class="">Pneu Michelin</a>
                        </li>
                        <li data-v-6aa74a73="" class="n-collapse-list-item">
                            <a data-v-6aa74a73="" href="/e/pneu-hankook.html" class="">Pneu Hankook</a>
                        </li>
                        <li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/e/pneu-voiture-hiver.html" class="">Pneu voiture hiver</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/e/pneu-voiture-4-saisons.html" class="">Pneu voiture 4 saisons</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/t/pneu.html" class="">Pneus toutes marques</a></li> <!----></ul></details><details data-v-55126353="" data-v-6aa74a73="" data-v-751a9e70="" class="n-accordion n-accordion-details -disabled n-collapsible-list tw-flex-1 -sm-inline" open="" show-separators="true"><summary data-v-55126353="" class="n-accordion-summary"><div data-v-6aa74a73="" class="n-collapse-list-title"><!----> <!----> <p data-v-6aa74a73="" class="n-collapse-list-title-label" role="heading" aria-level="3">Pièces auto <!----></p></div></summary>  <ul data-v-6aa74a73=""><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48699-batterie-voiture.html" class="">Batterie voiture</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48605-liquide-de-refroidissement.html" class="">Liquide de refroidissement</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48617-balais-essuie-glaces.html" class="">Balais essuie-glaces</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48159-courroie-de-distribution-kit-de-distribution.html" class="">Courroie de distribution, kit de distribution</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48114-plaquette-de-frein-avant.html" class="">Plaquette de frein avant</a></li> <!----></ul></details><details data-v-55126353="" data-v-6aa74a73="" data-v-751a9e70="" class="n-accordion n-accordion-details -disabled n-collapsible-list tw-flex-1 -sm-inline" open="" show-separators="true"><summary data-v-55126353="" class="n-accordion-summary"><div data-v-6aa74a73="" class="n-collapse-list-title"><!----> <!----> <p data-v-6aa74a73="" class="n-collapse-list-title-label" role="heading" aria-level="3">Entretien auto <!----></p></div></summary>  <ul data-v-6aa74a73=""><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/carte-grise.html" class="">Carte grise</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/plaque-immatriculation.html" class="">Plaque immatriculation</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/e/revision-vidange-entretien.html" class="">Vidange et révision</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/climatisation.html" class="">Climatisation</a></li> <!----></ul></details><details data-v-55126353="" data-v-6aa74a73="" data-v-751a9e70="" class="n-accordion n-accordion-details -disabled n-collapsible-list tw-flex-1 -sm-inline" open="" show-separators="true"><summary data-v-55126353="" class="n-accordion-summary"><div data-v-6aa74a73="" class="n-collapse-list-title"><!----> <!----> <p data-v-6aa74a73="" class="n-collapse-list-title-label" role="heading" aria-level="3">Équipement voiture <!----></p></div></summary>  <ul data-v-6aa74a73=""><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48094-tente-de-toit-et-auvent.html" class="">Tente de toit</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/47938-autoradio-bluetooth.html" class="">Autoradio bluetooth</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48676-sieges-et-rehausseurs.html" class="">Sièges et réhausseurs</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48022-coffre-de-toit.html" class="">Coffre de toit</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48032-barre-de-toit.html" class="">Barre de toit</a></li> <!----></ul></details><details data-v-55126353="" data-v-6aa74a73="" data-v-751a9e70="" class="n-accordion n-accordion-details -disabled n-collapsible-list tw-flex-1 -sm-inline" open="" show-separators="true"><summary data-v-55126353="" class="n-accordion-summary"><div data-v-6aa74a73="" class="n-collapse-list-title"><!----> <!----> <p data-v-6aa74a73="" class="n-collapse-list-title-label" role="heading" aria-level="3">Mobilité <!----></p></div></summary>  <ul data-v-6aa74a73=""><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/49112-trottinette-electrique.html" class="">Trottinette électrique</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48275-velo-electrique-de-ville.html" class="">Vélo électrique de ville</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/49137-velo-pliant.html" class="">Vélo pliant</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48036-porte-velos.html" class="">Porte-vélos</a></li><li data-v-6aa74a73="" class="n-collapse-list-item"><a data-v-6aa74a73="" href="/c/48255-casque-moto.html" class="">Casque moto</a></li> <!----></ul></details></div> <div data-v-751a9e70="" class="showcase-rich-text"><p><strong>Chacun sa Route avec GarageBoutique</strong></p><p>GarageBoutique, expert de l’équipement et entretien automobile, vous propose une large gamme de pneus de toutes marques (Michelin, Bridgestone, Pirelli…), de pièces auto (batterie voiture, démarreur, bougie…), de produits d’entretien (huile moteur, liquide de refroidissement…) ainsi que de pièces d’entretien courant (<a href="https://www.GarageBoutique.fr/c/48200-ampoule.html">ampoule auto</a>, essuie-glace …) pour répondre à tous vos besoins.</p><p>Garage Boutique vous accompagne également avec de nombreuses prestations pour entretenir votre véhicule : révision auto, vidange, <a href="https://www.GarageBoutique.fr/c/47574-pneus.html">montage et équilibrage de pneumatiques</a>, <a href="https://www.GarageBoutique.fr/climatisation.html">recharge clim</a> ... Avec Garage Boutique, vous êtes sûr(e) de prendre la route en toute sécurité !</p></div></div> 
        </main>
        </div>
        </div>
</body>
</html>
