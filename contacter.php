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
                                    <a href="">Contact</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- contenu -->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre mb-5">Nous Contacter</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-6 col-sm-6">
                            <div class="border bg-gris rounded-5 p-4">
                                <form>
                                    <div class="mb-3">
                                        <label for="email" class="form-label ps-3">Votre adresse e-mail*</label>
                                        <input type="email" class="form-control rounded-pill" id="email" placeholder="Votre adresse e-mail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label ps-3">Nom*</label>
                                        <input type="text" class="form-control rounded-pill" id="lastname" placeholder="Votre nom">
                                    </div>
                                    <div class="mb-3">
                                        <label for="first name" class="form-label ps-3">Prénom*</label>
                                        <input type="text" class="form-control rounded-pill" id="firstname" placeholder="Votre prénom">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sujet" class="form-label ps-3">Sujet*</label>
                                        <select class="form-select rounded-pill" id="sujet"aria-label="Default select example">
                                            <option selected>-- Votre question concerne -- </option>
                                            <option value="1">Ma commande</option>
                                            <option value="2">Un produit</option>
                                            <option value="3">Un remboursement</option>
                                        </select>         
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label ps-3">Votre message*</label>
                                        <textarea class="form-control rounded-3" id="message" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-contourblue mt-3 p-1 rounded-3"><a href="" class="btn-blue rounded-3 p-1">Envoyer</a></button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 d-flex flex-column justify-content-between">
                            <div class="border bg-gris p-4 rounded-5">
                                <h2>Nous contacter par téléphone</h2>
                                <p>Notre Service Clients est à votre disposition du du lundi au vendredi de 9h à 18h<br/>
                                et le samedi de 10h à 13h et de 14h à 18h au :</p>
                                <div class="text-center">
                                    <a href="tel:0404040404" title="" target=""><i class="fas fa-phone-alt"></i> 04 04 04 04 04 <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="border bg-gris p-4 rounded-5">
                                <h2>Nous contacter par courrier</h2>
                                <p>Vous pouvez nous écrire à l'adresse suivante :<br/>
                                <br/>
                                La Nîmes’alerie<br/>
                                0 Rue de l'animalerie<br/>
                                30 000 Nîmes<br/>
                                France
                                </p>
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