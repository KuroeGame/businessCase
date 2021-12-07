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

        <header>
            <?php include("header.php");?>
        </header>

        <main>

<!-- bannière-->
            <section>
                <div class="bg-img2">
                    <div class="container-fluid"> <!-- container ou fluid ? -->
                        <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <h2>Pet in Space</h2>
                            </div>
                            <div class="col-6 mt-3">
                                <img src="images/sakura_in_space.png" alt="sakura_in_space" width="254" height="281" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- informations-->
            <section>
                <div class="container text-center my-5"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12 d-flex flex-column align-items-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis facilisi orci ornare amet mi aenean. Libero laoreet amet, mi lectus. Orci suspendisse vehicula tellus duis in tortor. Massa vel amet egestas sodales. Enim, pulvinar vestibulum a, proin. Pretium purus consequat orci elit diam dignissim. Duis aenean vitae congue lobortis vitae amet risus. Id ultricies cras lectus neque. Nisi justo nunc magna commodo ac. Consequat eget enim lacus, tincidunt id odio. A dignissim amet leo fusce ac est sit urna vitae. Amet massa sed massa mi in sodales. Massa dictum est et in dignissim a et mauris.</p>
                            <p>Turpis turpis feugiat velit dui in hendrerit. Sollicitudin gravida penatibus scelerisque fermentum ut pellentesque. Dictum feugiat egestas sed leo tempus elementum sed tristique. Eu dui viverra aliquet laoreet. In netus eleifend cursus sit egestas mattis. Ut faucibus duis mauris orci, hendrerit risus quis leo, aliquet. Magna bibendum velit mus facilisis pretium ullamcorper felis elit vitae.</p>
                            <h2 class="color-orange prix rounded-pill p-2 mt-5 ">1 230€</h2>
                        </div>
                    </div>
                </div>
            </section>

<!-- Formulaire-->
            <section>
                <div class="bg-bleu p-5">
                    <div class="container bg-gris rounded-5 p-4"> <!-- container ou fluid ? -->
                        <h2>Formulaire d'inscription</h2>
                        <div class="row mb-3 me-4 ms-4"> <!-- align 12 colonnes -->
                            <div class="col-sm-5">
                                <label for="email" class="form-label">Votre e-mail*</label>
                                <input type="text" class="form-control rounded-pill" id="email" placeholder="Votre adresse e-mail">
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <label for="compagnon" class="form-label ">Prénom de votre compagnon*</label>
                                <input type="text" class="form-control rounded-pill" id="compagnon" placeholder="Prénom de votre compagnon">
                            </div>
                        </div>
                        <div class="row mb-3 me-4 ms-4"> <!-- align 12 colonnes -->
                            <div class="col-sm-5">
                                <label for="prenom" class="form-label">Prénom*</label>
                                <input type="text" class="form-control rounded-pill" placeholder="Last name" id="prenom" aria-label="Last name">
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <label for="nom" class="form-label">Nom*</label>
                                <input type="text" class="form-control rounded-pill" id="nom" placeholder="Votre nom" aria-label="Last name">
                            </div>
                        </div>
                        <div class="row mb-3 me-4 ms-4"> <!-- align 12 colonnes -->
                            <div class="col-sm-12">
                                <label for="motivations" class="form-label">Dites nous vos motivations :</label>
                                <textarea class="form-control rounded-3" id="motivations" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-contourblue p-1 rounded-3"><a href="" class="btn-blue rounded-3 p-1">Envoyer</a></button>
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