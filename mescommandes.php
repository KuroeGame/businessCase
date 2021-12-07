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
                                    <a href="tableaudebord.php">Mon compte</a>
                                    -
                                    <a href="tableaudebord.php">Mes Commandes</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- commandes -->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre">Vos Commandes</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12">
                            <div class="bg-gris rounded-5 p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Livré le : 20 sept 2021</h4>
                                    <p>Total : 24€50</p>
                                    <div>
                                        <p>n° commande<br/>045894589423</p>
                                        <a href="/" title="" target="">Détail</a>
                                        <span>|</span>
                                        <a href="/" title="" target="">Facture</a>
                                    </div>
                                </div>
                                <div class="lignetop row p-2">
                                    <div class="col-2 mt-3">
                                        <img src="images/produit2.png" alt="image" width="80" height="152" class="img-fluid ">
                                    </div>
                                    <div class="col-4 mt-3">
                                        <p>Nom produit</p>
                                        <p>Quantité : 1</p>
                                        <div class="rating-wrapper d-flex justify-content-end">
                                            
                                            <!-- star 5 -->
                                            <input type="radio" id="5-star-rating" name="star-rating" value="5">
                                            <label for="5-star-rating" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 4 -->
                                            <input type="radio" id="4-star-rating" name="star-rating" value="4">
                                            <label for="4-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 3 -->
                                            <input type="radio" id="3-star-rating" name="star-rating" value="3">
                                            <label for="3-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 2 -->
                                            <input type="radio" id="2-star-rating" name="star-rating" value="2">
                                            <label for="2-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 1 -->
                                            <input type="radio" id="1-star-rating" name="star-rating" value="1">
                                            <label for="1-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-6 d-grid gap-2 mt-3">
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Suivre votre colis</p></a>
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Retourner les articles</p></a>
                                        <a href="produit.php" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Acheter à nouveau</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gris rounded-5 p-3 mt-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Livré le : 20 sept 2021</h4>
                                    <p>Total : 24€50</p>
                                    <div>
                                        <p>n° commande<br/>045894589423</p>
                                        <a href="/" title="" target="">Détail</a>
                                        <span>|</span>
                                        <a href="/" title="" target="">Facture</a>
                                    </div>
                                </div>
                                <div class="lignetop row p-2">
                                    <div class="col-2 mt-3">
                                        <img src="images/produit2.png" alt="image" width="80" height="152" class="img-fluid ">
                                    </div>
                                    <div class="col-4 mt-3">
                                        <p>Nom produit</p>
                                        <p>Quantité : 1</p>
                                        <div class="rating-wrapper d-flex justify-content-end">
                                            
                                            <!-- star 5 -->
                                            <input type="radio" id="5-star-rating" name="star-rating" value="5">
                                            <label for="5-star-rating" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 4 -->
                                            <input type="radio" id="4-star-rating" name="star-rating" value="4">
                                            <label for="4-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 3 -->
                                            <input type="radio" id="3-star-rating" name="star-rating" value="3">
                                            <label for="3-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 2 -->
                                            <input type="radio" id="2-star-rating" name="star-rating" value="2">
                                            <label for="2-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 1 -->
                                            <input type="radio" id="1-star-rating" name="star-rating" value="1">
                                            <label for="1-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-6 d-grid gap-2 mt-3">
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Suivre votre colis</p></a>
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Retourner les articles</p></a>
                                        <a href="produit.php" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Acheter à nouveau</p></a>
                                    </div>

                                </div>
                                <div class="lignetop row p-2">
                                    <div class="col-2 mt-3">
                                        <img src="images/produit2.png" alt="image" width="80" height="152" class="img-fluid ">
                                    </div>
                                    <div class="col-4 mt-3">
                                        <p>Nom produit</p>
                                        <p>Quantité : 1</p>
                                        <div class="rating-wrapper d-flex justify-content-end">
                                            
                                            <!-- star 5 -->
                                            <input type="radio" id="5-star-rating" name="star-rating" value="5">
                                            <label for="5-star-rating" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 4 -->
                                            <input type="radio" id="4-star-rating" name="star-rating" value="4">
                                            <label for="4-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 3 -->
                                            <input type="radio" id="3-star-rating" name="star-rating" value="3">
                                            <label for="3-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 2 -->
                                            <input type="radio" id="2-star-rating" name="star-rating" value="2">
                                            <label for="2-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                            <!-- star 1 -->
                                            <input type="radio" id="1-star-rating" name="star-rating" value="1">
                                            <label for="1-star-rating" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-6 d-grid gap-2 mt-3">
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Suivre votre colis</p></a>
                                        <a href="/" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Retourner les articles</p></a>
                                        <a href="produit.php" title="" target=""><p class="bg-light rounded-pill btnlink p-2 text-center">Acheter à nouveau</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- paw-->
            <section>
                <div class="container"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <a href="#top"><img src="images/paw.png" alt="image" width="56" height="48" class="img-fluid paw"></a>
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