<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
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


<!-- a propos-->
            <section>
                <div class="bgimg align-items-center d-flex">
                    <div class="container-fluid text-center"> <!-- container ou fluid ? -->
                        <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-12 col-sm-12 mt-5 mb-5">
                                <div class="row ">
                                    <div class="col-lg-2 col-sm-2"></div>
                                    <div class="col-lg-8 col-sm-8 text-light">
                                        <h2>Qui sommes nous ?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Fermentum, arcu sagittis, nulla in sed arcu, ut sit molestie. Ultricies pulvinar cursus mauris, vestibulum nisi eu.<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Et, pellentesque nulla facilisis elit, viverra.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Fermentum, arcu sagittis, nulla in sed arcu, ut sit molestie. Ultricies pulvinar cursus mauris, vestibulum nisi eu.</p>
                                    </div>
                                    <div class="col-lg-2 col-sm-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- services -->
            <section>
                <div class="bg-bleu servs pt-2 pb-2">
                    <div class="container text-center text-light"> <!-- container ou fluid ? -->
                        <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-4 borduredroite">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fas fa-trophy fa-3x me-3"></i>
                                        <div class="text-start">
                                            <p>4.7 sur 105 240 avis</p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 borduredroite">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fas fa-truck-moving fa-3x me-3"></i>
                                        Livraison 24 h 
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class=" d-flex justify-content-center align-items-center">
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fas fa-shield-alt fa-3x me-3"></i>
                                        Paiement sécurisé 
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- produits phares-->
            <section>
                <div class="bg-gris pt-4 pb-4">
                    <div class="container text-center"> <!-- container ou fluid ? -->
                        <h2 class="mb-3">Nos  Produits Phares pour 
                            <select class="custom-select choixanimaux bg-gris color-orange">
                                <option selected>Chiens</option>
                                <option value="1">Chats</option>
                                <option value="2">Reptiles</option>
                                <option value="3">Poissons</option>
                            </select>
                        </h2>
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
                                    <a href="produit.php" class="stars mb-2" title="vers les avis">
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
                                    <a href="produit.php" class=" stars mb-2" title="vers les avis">
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
                                    <a href="produit.php" title="vers le produit">
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
                                    <a href="produit.php" class="stars mb-2" title="vers les avis">
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
                        </div>
                        <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-blue rounded-3 p-2">Voir plus de produits</a></button>
                    </div>
                </div>
            </section>

<!-- promo & news -->
            <section>
                <div class="container-fluid text-center promo my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="">
                                <h2 class="color-orange">Promo du moment</h2>
                                <div>
                                    <div id="carouselControls1" class="carousel slide  bg-bleu text-light rounded-5" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <div>
                                                            <p>profitez de</p>
                                                            <p><strong class="pt-2 pb-2 pe-5 ps-5 color-orange">-20 %</strong></p>
                                                        </div>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <div>
                                                            <p>profitez de</p>
                                                            <p><strong class="pt-2 pb-2 pe-5 ps-5 color-orange">-20 %</strong></p>
                                                        </div>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <div>
                                                            <p>profitez de</p>
                                                            <p><strong class="pt-2 pb-2 pe-5 ps-5 color-orange">-20 %</strong></p>
                                                        </div>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls1" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls1" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="">
                                <h2 class="color-orange ">Les nouveautés</h2>
                                <div>
                                    <div id="carouselControls2" class="carousel slide bg-bleu text-light rounded-5" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row p-3">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <img src="images/produit.png" class="d-block w-100" alt="produit1">
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <h3 class="color-orange">Marque</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <button type="button" class="btn btn-contourgris mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-gris rounded-3 p-2">J'en profite</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls2" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls2" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- pet in space-->
            <section>
                <div class="bg-img2">
                    <div class="container text-center my-5 "> <!-- container ou fluid ? -->
                        <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-6 text-light p-5">
                                <div class="">
                                    <h2>Pet in space</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat diam sed eu hendrerit orci urna pulvinar vitae. Amet ut aliquet rhoncus in porttitor.</p>
                                    <button type="button" class="btn btn-contourgris2 mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="petinspace.php" class="m-1 btn-gris2 rounded-3 p-2">J'en profite</a></button>
                                </div>
                            </div>
                            <div class="col-lg-6 position-relative-lg">
                                <div class="position-absolute-lg bottom-lg-0 start-lg-50 translate-middle-x-lg">
                                    <img src="images/sakura_in_space.png" alt="image" class="img-fluid " width="254" height="281">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- Avis-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="avis text-center">
                                <h2>Votre avis compte</h2>
                                <p class="color-orange">4,7/5,0</p> 
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-blue rounded-3 p-2">Voir les 105240 avis</a></button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <div class="border-start avistext ps-3">
                                <i class="fas fa-quote-left fa-4x"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue curabitur tempor tristique quam lorem praesent augue.</p>
                                <p>le 24/10/2022 par Marie</p>
                                <div class="text-end">
                                    <i class="fas fa-quote-right fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>

        <footer>
            <?php include("footer.php");?>   
        </footer>


    </body>
</html>