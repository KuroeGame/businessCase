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
 
<!-- a propos-->
            <section>
                <div class="bgimg align-items-center d-flex">
                    <div class="container-fluid text-center"> <!-- container ou fluid ? -->
                        <div class="row"> <!-- align 12 colonnes -->
                            <div class="col-lg-12 col-sm-12 mt-5 mb-5">
                                <div class="row ">
                                    <div class="col-lg-2 col-sm-2"></div>
                                    <div class="col-lg-8 col-sm-8 text-light">
                                        <h2>Alimentation pour Chien</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Fermentum, arcu sagittis, nulla in sed arcu, ut sit molestie. Ultricies pulvinar cursus mauris, vestibulum nisi eu.<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies tincidunt turpis eget pulvinar massa pellentesque leo. Et, pellentesque nulla facilisis elit, viverra. Et, pellentesque nulla facilisis elit, viverra.</p>
                                    </div>
                                    <div class="col-lg-2 col-sm-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- sous-catégories -->
            <section class="bg-bleu p-2">
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12">
                            <ul class="nav morecat justify-content-around">
                                <li class="nav-item">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Croquettes</a></button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Alimentation médicalisé</a></button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Patée</a></button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Lait Maternisé</a></button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-pill plus"><a class="nav-link btn-gris2 rounded-pill ">+</a></button>
                                </li>
                                <li class="nav-item hide">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Croquettes</a></button>
                                </li>
                                <li class="nav-item hide">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Alimentation médicalisé</a></button>
                                </li>
                                <li class="nav-item hide">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Patée</a></button>
                                </li>
                                <li class="nav-item hide">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Lait Maternisé</a></button>
                                </li>
                                <li class="nav-item hide">
                                    <button type="button" class="btn btn-contourgris2 p-1 mt-2 mb-2 rounded-3"><a href="petinspace.php" class="nav-link btn-gris2 rounded-3">Bio & naturel</a></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

<!-- produits -->
            <section>
                <div class="container-fluid"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-3 bg-bleu text-white">
                            <div class="lignebotbw">
                                <p>1325 Produits</p>
                                <a href="" title="vers le produit"><i class="fas fa-undo"></i>Réinitialiser les filtres</a>
                                <div class="mb-3 d-flex mt-3">
                                    <label for="sujet" class="form-label">Triez par : </label>
                                    
                                    <select class="form-select-sm rounded-pill ms-3" id="sujet"aria-label="Default select example">
                                        <option selected>-- Selectionnez un tri -- </option>
                                        <option value="1">Prix par ordre croissant</option>
                                        <option value="2">Prix par ordre décroissant</option>
                                        <option value="3">Marques</option>
                                        <option value="4">Promotions</option>
                                    </select>         
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                        class="accordion-button bg-bleu titre"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="true"
                                        aria-controls="collapseOne"
                                        >
                                        Marques
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse show bg-bleu text-white"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body ps-3">
                                            <div class="input-group-prepend d-flex">
                                                <button
                                                class="btn btn-dark my-2 my-sm-0 rounded-t"
                                                type="submit"
                                                >
                                                <i class="fas fa-search fa-lg"></i>
                                                </button>
                                                <input
                                                class="form-control mr-sm-2 rounded-b"
                                                type="search"
                                                placeholder="Recherchez"
                                                aria-label="Search"
                                                />
                                            </div>
                                            <div class="form-check mb-2 mt-2">
                                                <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value="1"
                                                id="checkBrand"
                                                />
                                                <label class="form-check-label" for="checkBrand">
                                                Marque 1
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value="2"
                                                id="checkBrand"
                                                />
                                                <label class="form-check-label" for="checkBrand">
                                                Marque 2
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value="2"
                                                id="checkBrand"
                                                checked
                                                />
                                                <label class="form-check-label" for="checkBrand">
                                                Marque 3
                                                </label>
                                            </div>
                                            <a href="" class="text-white"
                                                >Plus de choix <i class="fas fa-chevron-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header titre" id="headingTwo">
                                        <button
                                        class="accordion-button collapsed bg-bleu titre"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo"
                                        >
                                        Prix
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse bg-bleu text-white"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                        <p>
                                            De
                                            <select
                                            class="min p-1 mx-1 rounded font-family-primary-light"
                                            id="45-min"
                                            aria-label="Choix 1"
                                            >
                                            <option value="0">0 €</option>
                                            <option value="30">30 €</option>
                                            <option value="60">60 €</option>
                                            <option value="90">90 €</option>
                                            <option value="120">120 €</option>
                                            <option value="150">150 €</option>
                                            </select>
                                            à
                                            <select
                                            class="min p-1 mx-1 rounded font-family-primary-light"
                                            id="45"
                                            aria-label="Choix 2"
                                            >
                                            <option value>--</option>
                                            <option value="0">0 €</option>
                                            <option value="30">30 €</option>
                                            <option value="60">60 €</option>
                                            <option value="90">90 €</option>
                                            <option value="120">120 €</option>
                                            <option value="150">150 €</option>
                                            <option value="180">180 €</option>
                                            </select>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                        class="accordion-button collapsed bg-bleu titre"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree"
                                        >
                                        Age
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse bg-bleu text-white"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                        <div class="form-check">
                                            <input
                                            class="form-check-input"
                                            type="radio"
                                            name="flexRadioDefault"
                                            id="age1"
                                            />
                                            <label class="form-check-label" for="age1"> Bébé </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            class="form-check-input"
                                            type="radio"
                                            name="flexRadioDefault"
                                            id="age2"
                                            checked
                                            />
                                            <label class="form-check-label" for="age2"> Adulte </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            class="form-check-input"
                                            type="radio"
                                            name="flexRadioDefault"
                                            id="age2"
                                            />
                                            <label class="form-check-label" for="age3"> Senior </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button
                                        class="accordion-button collapsed bg-bleu titre"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour"
                                        >
                                        Races
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseFour"
                                        class="accordion-collapse collapse bg-bleu text-white"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body ps-3">
                                        <div class="input-group-prepend d-flex">
                                            <button
                                            class="btn btn-dark my-2 my-sm-0 rounded-t"
                                            type="submit"
                                            >
                                            <i class="fas fa-search fa-lg"></i>
                                            </button>
                                            <input
                                            class="form-control mr-sm-2 rounded-b"
                                            type="search"
                                            placeholder="Recherchez"
                                            aria-label="Search"
                                            />
                                        </div>
                                        <div class="form-check mb-2 mt-2">
                                            <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="1"
                                            id="checkRace"
                                            />
                                            <label class="form-check-label" for="checkRace">
                                            Race 1
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="2"
                                            id="checkRace"
                                            />
                                            <label class="form-check-label" for="checkRace">
                                            Race 2
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="2"
                                            id="checkRace"
                                            checked
                                            />
                                            <label class="form-check-label" for="checkRace">
                                            Race 3
                                            </label>
                                        </div>
                                        <a href="" class="text-white"
                                            >Plus de choix <i class="fas fa-chevron-right"></i
                                        ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button
                                    class="accordion-button collapsed bg-bleu titre"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive"
                                    aria-expanded="false"
                                    aria-controls="collapseFive"
                                    >
                                    Saveur
                                    </button>
                                </h2>
                                <div
                                    id="collapseFive"
                                    class="accordion-collapse collapse bg-bleu text-white"
                                    aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="
                                            flavor1"
                                        />
                                        <label class="form-check-label" for="flavor1">
                                        Poulet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flavor2"
                                        />
                                        <label class="form-check-label" for="flavor2"> Beuf </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flavor3"
                                        />
                                        <label class="form-check-label" for="flavor3">
                                        Poisson
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flavor4"
                                        />
                                        <label class="form-check-label" for="flavor4">
                                        Autre
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 bg-gris products sc1 d-flex flex-column">
                            <div class="row p-4">
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <div class="bg-white rounded-5 text-center p-2">
                                        <a href="produit.php" title="vers le produit">
                                            <img src="images/produit.png" class="img-fluid" height="200px" width="" alt="produit1">
                                            <h3>Nom Produit</h3>
                                        </a>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <p>prix €</p>
                                            <button type="button" class="btn"><i class="fas bg-orange ps-4 pe-4 pt-2 pb-2 rounded-pill fa-cart-plus fa-1x "></i></button>
                                        </div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>4.7 sur 105 240 avis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("animaux.php");?>   

        </main>

        <footer>
            <?php include("footer.php");?>   
        </footer>

    </body>
</html>