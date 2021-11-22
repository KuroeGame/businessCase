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
                                    <a href="connexion.php">Identification</a>
                                    -
                                    <a href="">Creer mon compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre ms-4 mb-3">Mes Informations Personnelles</h2>
                    <div class="row bg-gris rounded-5 p-5"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Votre adresse e-mail*</label>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="far fa-envelope"></i></div>
                                        <input type="email" class="form-control rounded-b" id="inputEmail4" placeholder="Votre adresse e-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Confirmez votre adresse e-mail*</label>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="far fa-envelope"></i></div>
                                        <input type="email" class="form-control rounded-b" id="inputEmail5" placeholder="Votre adresse e-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputmdp" class="form-label">Créez votre mot de passe*</label>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="fas fa-lock"></i></div>
                                        <input type="password" class="form-control rounded-b" id="inputmdp" placeholder="Votre mot de passe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputmdp2" class="form-label">Confirmez votre mot de passe*</label>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="fas fa-lock"></i></div>
                                        <input type="password" class="form-control rounded-b" id="inputmdp2" placeholder="Votre mot de passe">
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <label for="form-check" class="form-label">Civilité*</label>
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
                                <div class="col-6">
                                    <label for="firstname" class="form-label">Prénom*</label>
                                    <input type="text" class="form-control rounded-pill" id="firstname" placeholder="Votre prénom">
                                </div>
                                <div class="col-6">
                                    <label for="lastname" class="form-label">Nom*</label>
                                    <input type="text" class="form-control rounded-pill" id="lastname" placeholder="Votre nom">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Votre adresse*</label>
                                    <div class="input-group">
                                        <div class="input-group-text rounded-t bg-light"><i class="fas fa-home"></i></div>
                                        <input type="text" class="form-control rounded-b" id="inputAddress" placeholder="Votre adresse">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex flex-column">
                                    <label for="calendar">Date de naissance*</label><input type="date" id="calendar" name="trip-start" class="rounded-pill p-2" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                </div>
                                <div class="col-12 lignetop">
                                    <div class="form-check form-switch pt-3">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">J'accepte les conditions d’utilisation.</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">J'accepte de recevoir les offres de La Nîmes’alerie par mail.</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="tableaudebord.php" class="m-1 btn-blue rounded-3 p-2">Créer mon compte</a></button>
                                    <p>*Champs obligatoire</p>
                                </div>
                            </form>
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