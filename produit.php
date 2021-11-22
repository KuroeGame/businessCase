<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
<!-- Lier bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

<!-- Script JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- intégration icon fontawesome -->
        <script src="https://kit.fontawesome.com/6939106af0.js" crossorigin="anonymous"></script>
        <title>La Nîmes'alerie</title>
    </head>
    <body>

        <header>
            <?php include("header.php");?>
        </header>

        <main>

<!-- chemin d'acces-->
            <section>
                <div class="container-fluid"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="">
                                <p>
                                    <a href="index.php">Acceuil</a>
                                    -
                                    <a href="">Chiens</a>
                                    -
                                    <a href="">Alimentation pour chiens</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- produit-->
            <section>
                <div class="container pt-4 pb-4"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-sm-6 text-center">
                            <div class="">
                                <a href="/" title="" target="">
                                    <img src="images/produit2.png" alt="image" width="203" height="387" class="img-fluid ">
                                </a>
                                <div class="d-flex justify-content-center">
                                    <a href="/" title="" target="" >
                                        <div class="border img1 m-3"></div>
                                    </a>
                                    <a href="/" title="" target="">
                                        <div class="border img2 m-3"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Marque</h3>
                                    <h2>Nom du produit</h2>
                                    <p>ref client : 123456</p>
                                </div>
                                <div class="col-sm-6 d-flex flex-column text-end justify-content-end">
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>4,4/5 - 25 avis</p> 
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea viverra posuere ac mi. Laoreet ut ut diam habitant mauris purus nisi tempus gravida. At facilisis non iaculis mauris at. Aliquet diam dictum habitasse eros, lectus. Vitae commodo tortor aenean tortor porttitor. Pretium quis in blandit scelerisque nec, sapien. Molestie mi interdum parturient nibh erat auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea viverra posuere ac mi. Laoreet ut ut diam habitant mauris purus nisi tempus gravida. At facilisis non iaculis mauris at. Aliquet diam dictum habitasse eros, lectus. Vitae commodo tortor aenean tortor porttitor. Pretium quis in blandit scelerisque nec, sapien. Molestie mi interdum parturient nibh erat auctor.</p>
                            <p class="text-end">livraison offerte dès 35€ d’achats (*)</p>
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 text-start">
                                    <input type="number" class="form-control choix" aria-label="Somme arrondie" value="1">
                                </div>
                                <div class="col-lg-4 col-sm-12 d-flex align-items-end">
                                    <h2>50,45</h2>
                                    <p>(3,60€/kg)</p>
                                </div>
                                <div class="col-lg-5 col-sm-12 text-end">
                                    <button type="button" class="btn btn-contourblue pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-blue rounded-3 p-2">Ajouter au Panier</a></button>
                                </div>
                            </div>
                            <div class="border mt-2 rounded-3 p-3">
                                <h3>Composition</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea viverra posuere ac mi. Laoreet ut ut diam habitant mauris purus nisi tempus gravida. At facilisis non iaculis mauris at. Aliquet diam dictum habitasse eros, lectus. Vitae commodo tortor aenean tortor porttitor. Pretium quis in blandit scelerisque nec, sapien. Molestie mi interdum parturient nibh erat auctor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- vous aimerez aussi-->
            <section class="bg-gris pt-4 pb-4">
                <div class="container text-center bg-gris"> <!-- container ou fluid ? -->
                    <h2>Vous aimerez aussi</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-3 col-sm-6 produits mt-3">
                                <div class="bg-light rounded-5">
                                    <a href="produit.php" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits mt-3">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class=" stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits mt-3">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center color-orange">
                                                <h3 class="bg-bleu p-2">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits mt-3">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-blue rounded-3 p-2">Voir plus de produits</a></button>
                </div>
            </section>

        <?php include("animaux.php");?> 

        </main>

        <footer>
            <?php include("footer.php");?>   
        </footer>
    </body>

</html>