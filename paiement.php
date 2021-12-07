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
                                    <a href="panier.php">Mon panier</a>
                                    -
                                    <a href="">cb</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre mb-5">Paiement <i class="fas fa-lock fa-1x"></i></h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <p>Montant de votre commande : 55,98 €</p>
                            <p>Cartes acceptées : 
                                <img src="images/Master-Card-icon.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                <img src="images/visa.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                                <img src="images/american-express.png" alt="image" width="50" height="35" class="img-fluid payments m-2">
                            </p>
                        </div>
                    </div>
                </div>
            </section>

<!-- formulaire bancaire-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-2 col-sm-2">
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <p><strong>Vos informations bancaires</strong><em>(tous les champrs sont obligatoires)</em></p>
                            <form>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text rounded-t bg-light"><i class="fas fa-credit-card"></i></div>
                                    <input type="text" class="form-control rounded-b" id="cardnumber" placeholder="Numéro de carte">
                                </div>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text rounded-t bg-light"><i class="fas fa-user-circle"></i></div>
                                    <input type="text" class="form-control rounded-b" id="name" placeholder="Nom du détenteur">
                                </div>
                                <div class="mb-3 d-flex">
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="far fa-calendar-alt"></i></div>
                                        <input type="text" class="form-control rounded-b" id="name" placeholder="Date d'expiration">  
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="fas fa-lock"></i></div>
                                        <input type="text" class="form-control rounded-b" id="name" placeholder="Cryptogramme">  
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p>En cliquant sur le bouton ci-dessous, j'accepte les <strong><a href="cgv.php">CGV.</a></strong></p>
                                <a href="/" title="" target=""><h2 class="bg-bleu rounded-pill titre p-2">Payer</h2></a>
                                <a href="cgv.php" title="" target="">Lire les conditions générales de vente</a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2">
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