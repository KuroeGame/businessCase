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

<!-- chemin d'acces-->
            <section>
                <div class="container-fluid"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="">
                                <p>
                                    <a href="index.php">Accueil</a>
                                    -
                                    <a href="">Mon panier</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- contenu -->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre">Panier</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12  col-sm-12">
                            <div class="row text-center titrepanier ps-5 pe-5">
                                <div class="col-lg-4 col-sm-4">
                                    <h3 class="fs-6">Produit</h3>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <h3 class="fs-6">Disponibilité</h3>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <h3 class="fs-6">Prix</h3>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <h3 class="fs-6">Quantité</h3>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <h3 class="fs-6">Total</h3>
                                </div>
                            </div>
                            <div class="bg-gris rounded-5 p-3">
                                <div class="row p-2">
                                    <div class="col-lg-4 col-12 mt-3 d-flex align-items-center justify-content-around">
                                        <img src="images/produit2.png" alt="image" width="80" height="152" class="img-fluid ">
                                        <div class="ms-3">
                                            <h3 class="fs-6">Marque</h3>
                                            <h2>Nom du produit</h2>
                                            <p>ref client : 123456</p>
                                            <a href="/" title="" target="">Supprimer</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                        <div class="validation"></div>
                                    </div>
                                    <div class="col-lg-2 col-4  mt-3 d-flex justify-content-center align-items-center text">
                                        <p>52,99 €</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                        <input type="number" class="form-control choix" aria-label="Somme arrondie" value="1">
                                    </div>
                                    <div class="col-lg-2 col-12 mt-3 d-flex justify-content-center align-items-center">
                                        <p>52,99 €</p>
                                    </div>
                                </div>
                                <div class="lignetop row p-2">
                                    <div class="col-lg-4 col-12 mt-3 d-flex align-items-center justify-content-around">
                                        <img src="images/produit2.png" alt="image" width="80" height="152" class="img-fluid ">
                                        <div class="ms-3">
                                            <h3 class="fs-6">Marque</h3>
                                            <h2>Nom du produit</h2>
                                            <p>ref client : 123456</p>
                                            <a href="/" title="" target="">Supprimer</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                        <div class="validation"></div>
                                    </div>
                                    <div class="col-lg-2 col-4  mt-3 d-flex justify-content-center align-items-center text">
                                        <p>52,99 €</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                        <input type="number" class="form-control choix" aria-label="Somme arrondie" value="1">
                                    </div>
                                    <div class="col-lg-2 col-12 mt-3 d-flex justify-content-center align-items-center">
                                        <p>52,99 €</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations -->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-gris rounded-5 p-3">
                                <h2>Adresse de livraison</h2>
                                <form>
                                    <div class="mb-3">
                                        <label for="nom" class="form-label ms-2">Nom*</label>
                                        <input type="text" class="form-control rounded-pill" id="name" placeholder="Votre nom">
                                    </div>
                                    <div class="mb-3">
                                        <label for="adresse" class="form-label ms-2">Adresse*</label>
                                        <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="fas fa-home"></i></div>
                                        <input type="text" class="form-control rounded-b" id="adresse" placeholder="Adresse de livraison">
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="cb" value="option1" checked>
                                <label class="form-check-label" for="cb">
                                    <img src="images/Master-Card-icon.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                    <img src="images/visa.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                    <img src="images/american-express.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="paypal" value="option2">
                                <label class="form-check-label" for="paypal">
                                    <img src="images/paypal.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                </label>
                            </div>
                            <p>Avant de passer commande je lis et j'accepte les CGU de la boutique ainsi que les conditions du RGPD</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="paiement.php" class="m-1 btn-blue rounded-3 p-2">Valider et payer ma commande</a></button>
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