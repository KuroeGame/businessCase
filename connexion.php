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
                                    <a href="">Identification</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


<!-- connexion -->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-5 col-sm-12 mb-3 bg-gris rounded-5 p-4">
                            <h2 class="titre">Je me connecte</h2>
                            <form class="p-4">
                                <div class="mb-3 input-group">
                                    <div class="input-group-text rounded-t bg-light"><i class="far fa-envelope"></i></div>
                                    <input type="text" class="form-control rounded-b" id="email" placeholder="Votre adresse e-mail*">
                                </div>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text rounded-t bg-light"><i class="fas fa-lock"></i></div>
                                    <input type="password" class="form-control rounded-b" id="password" placeholder="Votre mot de passe*">
                                </div>
                                <a href="/" title="" target=""> Mot de passe oublié <i class="fas fa-arrow-right"></i></a>
                            </form>
                            <div class="text-center">
                                <button type="button" class="btn btn-contourblue mt-3 p-1 rounded-3"><a href="tableaudebord.php" class="btn-blue rounded-3 p-1">Me connecter</a></button>
                            </div>
                            <p><em>* Champs obligatoire</em></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 col-sm-12 mb-3 bg-gris rounded-5 p-4">
                            <h2 class="titre">Je créé mon compte</h2>
                            <p>Bienvenue dans l’aventure La Nîmes’alerie!</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-contourblue mt-3 p-1 rounded-3"><a href="creationcompte.php" class=" btn-blue rounded-3 p-1">Créer mon compte</a></button>
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