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
                                    <a href="">Nous trouver</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container my-5"> <!-- container ou fluid ? -->
                    <h2 class="titre">Nous Trouver</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <h3><strong>La Nîmes’alerie</strong></h3>
                            <p>0 Rue de l'animalerie<br/>30 000 Nîmes, France</p>
                            <h3>HEURES D’OUVERTURE</h3>
                            <p>Du lundi au vendredi de 9h à 13h et de 14h à 18h,<br/>et le samedi de 10h à 13h et de 14h à 18h.</p>

                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container-fluid my-5"> <!-- container ou fluid ? -->
                    <h3 class="ps-5 mb-4"><strong>Vous rendre chez nous :</strong></h3>
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.9861679586206!2d4.352839016507194!3d43.83538474864678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42da71270183f%3A0x68a659978e1c998d!2s16%20Rue%20Bec%20de%20Lievre%2C%2030900%20N%C3%AEmes!5e0!3m2!1sfr!2sfr!4v1637400033046!5m2!1sfr!2sfr" width="1080" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12 col-sm-12">
                            <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="https://www.google.fr/maps/dir//16+Rue+Bec+de+Lievre,+30900+N%C3%AEmes/@43.8353847,4.352839,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x12b42da71270183f:0x68a659978e1c998d!2m2!1d4.3550277!2d43.8353809!3e0" target="_blank" class="m-1 btn-blue rounded-3 p-2">Trouver un itinéraire</a></button>
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