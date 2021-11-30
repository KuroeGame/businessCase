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
                                        <h2>Alimentation pour Chien</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Fermentum, arcu sagittis, nulla in sed arcu, ut sit molestie. Ultricies pulvinar cursus mauris, vestibulum nisi eu.<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Et, pellentesque nulla facilisis elit, viverra.</p>
                                    </div>
                                    <div class="col-lg-2 col-sm-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- a propos-->
            <section>
                <div class="container-fluid text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        nav
                    </div>
                </div>
            </section>

<!-- a propos-->
            <section>
                <div class="container-fluid"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-3 bg-bleu text-white col-sm-4">
                            <div class="lignebotbw">
                                <p>1325 Produits</p>
                                <a href="" title="vers le produit"><i class="fas fa-undo"></i>Réinitialiser les filtres</a>
                                <div class="mb-3 d-flex">
                                    <label for="sujet" class="form-label">Triez par</label>
                                    <select class="form-select form-select-sm rounded-pill" id="sujet"aria-label="Default select example">
                                        <option selected>-- Selectionnez un tri -- </option>
                                        <option value="1">tri 1</option>
                                        <option value="2">tri 2</option>
                                        <option value="3">tri 3</option>
                                    </select>         
                                </div>
                            </div>
                            <div>
                                <h2 class="titre">Marques</h2>
                                <form class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fas fa-search fa-lg"></i></button>
                                        </div>
                                        <input class="form-control mr-sm-2" type="search" placeholder="Recherchez" aria-label="Search">
                                        
                                    </div>
                                </form>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Default radio1</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">Default radio2</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">Default radio3</label>
                                </div>
                                <a href="">Plus de résultats <i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div>
                                <h2 class="titre">Prix</h2>
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                            <div>
                                <h2 class="titre">Races</h2>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixRace1">
                                    <label class="form-check-label" for="choixRace1">Default radio1</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixRace2">
                                    <label class="form-check-label" for="choixRace2">Default radio2</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixRace3">
                                    <label class="form-check-label" for="choixRace3">Default radio3</label>
                                </div>
                            </div>
                            <div>
                                <h2 class="titre">Age</h2>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixAge1">
                                    <label class="form-check-label" for="choixAge1">Default radio1</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixAge2">
                                    <label class="form-check-label" for="choixAge2">Default radio2</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixAge3">
                                    <label class="form-check-label" for="choixAge3">Default radio3</label>
                                </div>
                            </div>
                            <div>
                                <h2 class="titre">Taille</h2>
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                            <div>
                                <h2 class="titre">Saveurs</h2>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixSaveur1">
                                    <label class="form-check-label" for="choixSaveur1">Default radio1</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixSaveur2">
                                    <label class="form-check-label" for="choixSaveur2">Default radio2</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixSaveur3">
                                    <label class="form-check-label" for="choixSaveur3">Default radio3</label>
                                </div>
                            </div>
                            <div>
                                <h2 class="titre">Besoins Spécifiques</h2>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixBesoin1">
                                    <label class="form-check-label" for="choixBesoin1">Default radio1</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixBesoin2">
                                    <label class="form-check-label" for="choixBesoin2">Default radio2</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="choixBesoin3">
                                    <label class="form-check-label" for="choixBesoin3">Default radio3</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 bg-gris  col-sm-8 d-flex flex-column">
                            <div class="row p-4">
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                            <div class="row mb-3">
                                                <div class="col-6 text-start ps-5">
                                                    <p>prix €</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="bg-orange rounded-5">
                                                        <i class="fas fa-cart-plus fa-1x "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>4.7 sur 105 240 avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("animaux.php");?>   

        </main>

        <footer>
            <?php include("footer.php");?>   
        </footer>

    </body>
</html>