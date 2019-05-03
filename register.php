<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <?php include "includes/plugins/top.php"; ?>
    <!-- Titre de la partie -->
    <title>BIBLIO ZULU|ENREGISTREMENT</title>

    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.0.1/dist/css/mstepper.min.css">


    <style>
        .collapse-content .fa.fa-heart:hover {
            color: #f44336 !important;
        }
        .collapse-content .fa.fa-share-alt:hover {
            color: #0d47a1 !important;
        }
        .chip.chip-md {
            height: 42px;
            line-height: 42px;
            border-radius: 21px;
        }
        .chip.chip-md img {
            height: 42px;
            width: 42px;
        }
        .chip.chip-md .close {
            height: 42px;
            line-height: 42px;
            border-radius: 21px;
        }
        .chip.chip-lg {
            height: 52px;
            line-height: 52px;
            border-radius: 26px;
        }
        .chip.chip-lg img {
            height: 52px;
            width: 52px;
        }
        .chip.chip-lg .close {
            height: 52px;
            line-height: 52px;
            border-radius: 26px;
        }

        /* Required for full background image */

        html,
        body,
        header,
        .view {
            height: 80%;
        }



        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .rgba-gradient {
            background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
            background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        }

        .card {

        }

        .md-form label {

        }

        h6 {
            line-height: 1.7;
        }
    </style>


</head>

<body>

<!-- Main navigation -->
<header>
    <!-- Navbar -->
    <?php include "includes/navbar.php"; ?>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div id="intro-section" class="view">

        <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline
               autoplay muted loop>
            <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
        </video>

        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="container px-md-3 px-sm-0">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-12 mb-4 white-text text-center wow fadeIn">

                        <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">ENREGISTREMENT</h3>
                        <hr class="hr-light my-4 w-75">
                        <h4 class="subtext-header mt-2 mb-4">Créer gratuitement un compte afin de recevoir et donner des connaissances.</h4>


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

</header>
<!-- Main navigation -->
<!--/ Liste des niveau  -->



<div class="container mb-5" id="home">
    <div class="row">

        <div class="card col-md-12">
            <form class="needs-validation container" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3 md-form">
                        <label for="validationTooltip011">Nom</label>
                        <input type="text" class="form-control" id="validationTooltip011" value="Mark" required>
                        <div class="valid-tooltip">
                            OK!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 md-form">
                        <label for="validationTooltip021">Prénom</label>
                        <input type="text" class="form-control" id="validationTooltip021" value="Otto" required>
                        <div class="valid-tooltip">
                            OK!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 md-form">
                        <label for="validationTooltipUsername1">Pseudo</label>
                        <input type="text" class="form-control" id="validationTooltipUsername1" required>
                        <div class="invalid-tooltip">
                            Veuillez entrer un pseudo correct.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3 md-form">
                        <label for="validationTooltip031">Email</label>
                        <input type="email" class="form-control" id="validationTooltip031" required>
                        <div class="invalid-tooltip">
                            Veuillez entrer un mail valide.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 md-form">
                        <select class="browser-default custom-select custom-select-md mb-3" required>
                            <option selected disabled>GENRE</option>
                            <option value="1">HOMME</option>
                            <option value="2">FEMME</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez choisir un genre.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 md-form">
                        <select class="browser-default custom-select custom-select-md mb-3" required>
                            <option selected disabled>STATUS</option>
                            <option value="1">PROFESSEUR</option>
                            <option value="2">ETUDIANT</option>
                            <option value="3">ANCIEN ETUDIANT</option>
                            <option value="4">AUTRE</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez choisir un status.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3 md-form">
                        <label for="validationTooltipcontact">Contact</label>
                        <input type="text" class="form-control" id="validationTooltipcontact" required>
                        <div class="invalid-tooltip">
                            Veuillez entrer un contact valide.>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 md-form">
                        <label for="validationTooltippassword">Mot de passe</label>
                        <input type="password" class="form-control" id="validationTooltippassword" required>
                        <div class="invalid-tooltip">
                            Veuillez entrer un mot de passe.>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 md-form">
                        <div class="file-field">
                            <a class="btn-floating purple-gradient mt-0 float-left">
                                <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                <input type="file">
                            </a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Choisir une image" >
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-row my-4">
                    <div class="form-check pl-0">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck266" required>
                        <label class="form-check-label" for="invalidCheck266">J'ai lu et j'accepte les </label> <a
                            href="" class="purple-text" data-toggle="modal" data-target="#fullHeightModalRight">conditions d'utilisation</a>
                        <div class="invalid-feedback">Veuillez remplir correctement le formulaire!</div>
                    </div>
                </div>
                <button class="btn blue-gradient btn-sm btn-rounded" type="submit">Je m'inscris</button>
            </form>
        </div>


    </div>
</div>


<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-dialog-scrollable modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Conditions & règles</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4> <code>Site</code> </h4>
                <p>
                    "En naviguant sur notre site, l’internaute reconnaît avoir pris connaissance et accepté nos conditions générales d’utilisation
                    <br>
                    <code>Données personnelles :</code>
                    <br>
                    Les données personnelles qui peuvent vous être demandées (exclusivement en vue de bénéficier de nos services) sont vos nom prénom et adresse mails.
                    Le traitement de ces données dont le responsable est Mr N. Soro est en conformité avec le Règlement général de protection des données personnelles entré en vigueur le 25 Mai 2018.
                    Vous pouvez faire valoir vos droits de consultation, de rectification et de suppression en le contactant à l’adresse suivante
                    <a href="mailto:soro@nan.ci" class="purple-text">soro@nan.ci</a>
                    <br>
                    Nous nous engageons à ne pas revendre ni donner ces informations qui ne sont pas conservées dès lors que vous demandez à ne plus recevoir nos services.
                    <br>
                    <code>Cookies :</code>
                    <br>
                    En vue d’améliorer notre site, nous utilisons Google Analytics qui est un outil « d'analyse d'audience Internet permettant aux propriétaires de sites Web et d'applications de mieux comprendre le comportement de leurs utilisateurs. Cet outil peut utiliser des cookies pour collecter des informations et générer des rapports sur les statistiques d'utilisation d'un site Web sans que les utilisateurs individuels soient identifiés personnellement par Google.
                    Outre la génération de rapports sur les statistiques d'utilisation d'un site Web, Google Analytics permet également, en association avec certains des cookies publicitaires décrits ci-dessus, d'afficher des annonces plus pertinentes sur les sites Google (tels que la recherche Google) et sur le Web. »
                    <a href="https://www.google.fr/intl/fr/policies/technologies/types/" class="purple-text"> https://www.google.fr/intl/fr/policies/technologies/types/</a>
                    Nous utilisons également les cookies nécessaires à l’amélioration de votre navigation sur notre site tenant compte exclusivement de votre navigateur.
                    <br>
                    <code>Propriété intellectuelle :</code>
                    <br>
                    Le site web a été réalisé par notre equipe.
                    Il est la propriété de l’association et ne peut faire l’objet de reproduction.
                    <br>
                    <code>Photographies et contenu :</code>
                    <br>
                    Les photographies, vidéos,  textes et  illustrations  publiés sur le site sont propriété de l’association ou ont fait l’objet de cession de droits.
                    Ils  ne peuvent faire l’objet d’aucune réutilisation.
                    <br>
                    <code>Liens hypertextes :</code>
                    <br>
                    Le site www[site internet] peut contenir des liens hypertextes renvoyant à des pages ou des sites dont le contenu ne peut engager en rien l’association.
                    Les liens hypertextes renvoyant vers notre site sont les bienvenus lorsqu’ils émanent de sites respectant la législation en vigueur."

                <p>



            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" data-dismiss='modal'>j'ai compris</button>
            </div>
        </div>
    </div>
</div>
<!-- Full Height Modal Right -->
<!-- Footer -->
<?php include "includes/footer.php"; ?>
<!-- Footer -->


<!-- SCRIPTS -->
<?php include "includes/plugins/bottom.php"; ?>
<script src="https://unpkg.com/imask"></script>
<!-- JS -->
<script src="https://unpkg.com/materialize-stepper@3.0.1/dist/js/mstepper.min.js"></script>


    <script type="text/javascript">
        (function() {
            'use strict';
            window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function() {
            $('.datepicker').pickadate();
            $('.datepicker').removeAttr('readonly');
        });

    
        var element = document.getElementById('validationTooltipcontact');
        var maskOptions = {
            mask: '+{225} 00-00-00-00'
        };
        var mask = IMask(element, maskOptions);
    </script>

</body>

</html>