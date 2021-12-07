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
                                    <a href="">Modifier mon compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- infos-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre mb-5 ms-5">Accueil mon Compte <i class="fas fa-angle-right"></i></h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-3 col-sm-12 mb-5">
                            <div class="bg-gris rounded-5 pt-3">
                                <div class="lignebotb ps-4 pe-4 d-flex flex-column">
                                    <h3>Messagerie</h3>
                                    <a href="messrecu.php" title="" target="" class="ms-4">Messages(s) reçu(s) <i class="fas fa-angle-right"></i></a>
                                    <a href="messenvoye.php" title="" target="" class="ms-4">Messages(s) envoyé(s) <i class="fas fa-angle-right"></i></a>
                                    <a href="nousecrire.php" title="" target="" class="ms-4 mb-3"> Nous écrire <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="p-4 lignebotb">
                                    <a href="/" title="" target=""><h3>Mes commandes</h3></a>
                                </div>
                                <div class=" ps-4 pe-4 d-flex flex-column pt-3 pb-3">
                                    <h3>Coordonnées</h3>
                                    <a href="infosperso.php" title="" target="" class="ms-4">Informations personnelles <i class="fas fa-angle-right"></i></a>
                                    <a href="modifid.php" title="" target="" class="ms-4">Identifiants <i class="fas fa-angle-right"></i></a>
                                    <a href="index.php" title="" target="" class="ms-4 mb-3">Se déconnecter <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="bg-bleu rounded-b2 ps-4 pe-4 pb-3 pt-3">
                                    <a href="newsletter.php" class="titre" title="" target=""><h3>Newsletter</h3></a>
                                </div>   

                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <div class="bg-gris rounded-5 p-5">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="lignebotb">Newsletter</h2>
                                        <h3>Gestion de mon abonnement</h3>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkBoxNewsletter" checked>
                                            <label class="form-check-label" for="checkBoxNewsletter">J’accepte de recevoir les offres de La Nîmes’alerie par newsletters.</label>
                                        </div>
                                        <div class="row mt-5 mb-3"> <!-- align 12 colonnes -->
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2 text-center">
                                                <img src="images/chameleon.png" alt="image" width="100px" height="100px" class="img-fluid">
                                                <p>Reptiles</p>
                                                <input class="form-check-input choice" type="checkbox" value="reptiles" id="reptiles">
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <img src="images/cat.png" alt="image" width="100px" height="100px" class="img-fluid">
                                                <p>Chats</p>
                                                <input class="form-check-input choice" type="checkbox" value="cats" id="cats">
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <img src="images/dog.png" alt="image" width="100px" height="100px" class="img-fluid">
                                                <p>Chiens</p>
                                                <input class="form-check-input choice" type="checkbox" value="dogs" id="dogs">
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <img src="images/guinea-pig.png choice" alt="image" width="100px" height="100px" class="img-fluid">
                                                <p>Rongeurs</p>
                                                <input class="form-check-input" type="checkbox" value="rodents" id="rodents">
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <img src="images/poisson.png choice" alt="image" width="100px" height="100px" class="img-fluid">
                                                <p>Poissons</p>
                                                <input class="form-check-input" type="checkbox" value="fishs" id="fishs">
                                            </div>
                                        </div>
                                        <div class="p-4 d-flex justify-content-center align-items-center">
                                            <button type="button" class="submitNewsletter btn btn-contourblue p-1 rounded-3"><p class="btn-blue rounded-3 p-1">Valider</p></button>
                                            <a href="" class="ms-2">Me désabonner</a>
                                        </div>
                                        </form>
                                    </div>
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