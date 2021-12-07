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
                                    <a href="">Mon compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre">Votre tableau de bord</h2>
                    <div class="row">
                        <div class="col-12">
                            <h3>Vos Dernières Commandes</h3>
                            <a href="/" title="" target="">Affichez toutes les commandes <i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-6 mb-5">
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
                                        <div>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
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
                                        <div>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
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
                                        <div>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
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
                        <div class="col-lg-6 col-sm-12 ">
                            <div class="bg-gris rounded-5 p-4">
                                <h2>Mes informations</h2>
                                <p>email@email.fr</p>
                                <p>Nom Prénom</p>
                                <p>Date de naissance : 12/10/1975</p>
                                <p>Adresse : 15 rue de l’endroit 15600 Quelque part</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">Recevoir par e-mail les offres commerciales</label>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-contourblue mt-3 p-1 rounded-3"><a href="infosperso.php" class="btn-blue rounded-3 p-1">Modifier mon compte</a></button>
                                    <button type="button" class="btn btn-contourblue mt-3 p-1 ps-1 rounded-3"><a href="" class="btn-blue rounded-3 p-1">Déconnexion</a></button>
                                </div>
                            </div>
                            <div class="bg-gris rounded-5 mt-5 p-4">
                                <h2>Ma Messagerie</h2>
                                <div class="text-center">
                                    <p>Vous avez<br/>0<br/>message(s) non lu(s)</p>
                                    <button type="button" class="btn btn-contourblue mt-3 p-1 rounded-3"><a href="messrecu.php" class="btn-blue rounded-3 p-1">Acceder à ma messagerie</a></button>
                                </div>
                            </div>
                            <div class="bg-bleu rounded-5 mt-5 d-flex p-4 justify-content-around">
                                <img src="images/produit2.png" alt="image" width="100" height="" class="img-fluid ">
                                <div class="text-center text-light ms-4">
                                    <h2 class="lignebot titre">Produit du moment</h2>
                                    <h3>Marque</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare proin pulvinar facilisis arcu elementum nunc.</p>
                                    <button type="button" class="btn btn-contourgris mt-3 p-1 rounded-3"><a href="produit.php" class="btn-gris rounded-3 p-1">Je découvre</a></button>
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