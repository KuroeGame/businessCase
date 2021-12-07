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
            <div class="container my-5">
                <div class="row">
                    <div class="col-6">
                        <h2 class="titre">Oups !</h2>
                        <h3>La page que vous recherchez semble introuvable</h3>
                        <p>Code d'erreur : <strong>404</strong></p>
                        <h6>Voici quelques liens utiles à la place :</h6>
                        <ul>
                            <li><a href="index.php">Page d'accueil</a></li>
                            <li><a href="petinspace.php">Pet in Space</a></li>
                            <li><a href="contacter.php">Nous contacter</a></li>
                            <li><a href="plan.php">Où sommes nous ?</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <img src="images/404.png" alt="Animal vecteur créé par stories - fr.freepik.com">
                    </div>
                </div>
            </div>
            
        </main>

<footer>
    <?php include("footer.php");?>   
</footer>

</body>
</html>