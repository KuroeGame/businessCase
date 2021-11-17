<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
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

        <?php include("header.php");?>

        <main>

<!-- chemin d'acces-->
            <section>
                <div class="container-fluid"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="border">
                                <a href="">lien page 1</a>
                                <a href="">lien page 2</a>
                                <a href="">lien page 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- produit-->
            <section>
                <div class="container pt-4 pb-4"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-6 col-sm-6 text-center">
                            <div class="border">
                                <a href="/" title="" target="">
                                    <img src="images/produit2.png" alt="image" width="203" height="387" class="img-fluid ">
                                </a>
                                <div>
                                    <a href="/" title="" target="">
                                        <img src="images/produit2.png" alt="image" width="50" height="50" class="img-fluid">
                                    </a>
                                    <a href="/" title="" target="">
                                        <img src="images/gamelle.jpg" alt="image" width="50" height="50" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="border">titre</div>
                        </div>
                    </div>
                </div>
            </section>

<!-- vous aimerez aussi-->
            <section class="bg-gris pt-4 pb-4">
                <div class="container text-center bg-gris"> <!-- container ou fluid ? -->
                    <h2>Vous aimerez aussi</h2>
                    <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-3 col-sm-6 produits">
                                <div class="bg-light rounded-5">
                                    <a href="produit.php" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class=" stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center color-orange">
                                                <h3 class="bg-bleu p-2">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 produits">
                                <div class="bg-light rounded-5">
                                    <a href="" title="vers le produit">
                                        <img src="images/produit.png" class="" height="200px" width="" alt="produit1">
                                        <div class="row mb-3">
                                            <div class="col-7 text-start ps-5">
                                                <h4>Nom produit</h4>
                                            </div>
                                            <div class="col-5 text-center">
                                                <h3 class="bg-bleu p-2 color-orange">9,95 €</h3>
                                            </div>
                                        </div>
                                        <p>description produit</p>
                                    </a>
                                    <a href="" class="stars mb-2" title="vers les avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        25 avis
                                    </a>
                                </div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-contourblue mt-3 pt-2 pb-2 pe-1 ps-1 rounded-3"><a href="" class="m-1 btn-blue rounded-3 p-2">Voir plus de produits</a></button>
                </div>
            </section>

        <?php include("animaux.php");?> 

        </main>

        <?php include("footer.php");?>

    </body>

</html>