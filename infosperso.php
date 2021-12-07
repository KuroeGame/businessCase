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
                            <div class="bg-gris rounded-5 pt-3 ">
                                <div class="lignebotb ps-4 pe-4 d-flex flex-column">
                                    <h3>Messagerie</h3>
                                    <a href="messrecu.php" title="" target="" class="ms-4">Messages(s) reçu(s) <i class="fas fa-angle-right"></i></a>
                                    <a href="messenvoye.php" title="" target="" class="ms-4">Messages(s) envoyé(s) <i class="fas fa-angle-right"></i></a>
                                    <a href="nousecrire.php" title="" target="" class="ms-4 mb-3"> Nous écrire <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="/" title="" target=""><h3>Mes commandes</h3></a>
                                </div>
                                <div class="lignebotb bg-bleu infosperso d-flex flex-column pt-3 pb-3">
                                    <h3 class="ps-4 titre">Coordonnées</h3>
                                    <a href="infosperso.php" title="" target="" class="ps-5 pe-4">Informations personnelles <i class="fas fa-angle-right"></i></a>
                                    <a href="modifid.php" title="" target="" class="ps-5 pe-4">Identifiants <i class="fas fa-angle-right"></i></a>
                                    <a href="index.php" title="" target="" class="ps-5 pe-4 mb-3">Se déconnecter <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="ps-4 pe-4 pb-3 pt-3">
                                    <a href="newsletter.php" title="" target=""><h3>Newsletter</h3></a>
                                </div>   

                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <div class="bg-gris rounded-5 p-5">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3">
                                        <a href="/" title="" target=""><div class="imgprofil"></div></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2>Informations personnelles</h2>
                                        <form class="p-4">
                                        <label for="lastname" class="form-label">Nom :</label>
                                            <div class="mb-3 input-group">
                                                <div class="input-group-text rounded-t bg-light"><i class="far fa-envelope"></i></div>
                                                <input type="text" class="form-control rounded-b" id="lastname" value="Nom">
                                            </div>
                                            <label for="firstname" class="form-label">Prénom :</label>
                                            <div class="mb-3 input-group">
                                                <div class="input-group-text rounded-t bg-light"><i class="far fa-envelope"></i></div>
                                                <input type="text" class="form-control rounded-b" id="firstname" value="Prénom">
                                            </div>
                                            <div class=" mb-3 d-flex">
                                                <label for="form-check" class="form-label">Civilité : </label>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">M.</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">Mme</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                    <label class="form-check-label" for="flexRadioDefault3">Autre</label>
                                                </div>
                                            </div>
                                            <label for="inputAddress" class="form-label">Votre adresse :</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-text rounded-t bg-light"><i class="fas fa-home"></i></div>
                                                <input type="text" class="form-control rounded-b" id="inputAddress" value="15 rue de l’endroit 15600 Quelque part">
                                            </div>
                                            <div class="d-flex flex-column mb-3">
                                                <label for="calendar">Date de naissance :</label><input type="date" id="calendar" name="trip-start" class="rounded-pill p-2" value="2018-07-22" min="1900-01-01" max="2002-12-31">
                                            </div>
                                            <div class="text-center mt-5">
                                                <button type="submit" class="btn btn-contourblue p-1 rounded-3"><a href="" class="btn-blue rounded-3 p-1">Enregistrer les modifications</a></button>
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