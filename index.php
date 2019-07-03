<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <?php include "includes/plugins/top.php"; ?>
    <!-- Titre -->
    <title>BIBLIO ZULU|Accueil</title>

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
            height: 100%;
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
        <div class="view" style="background-image: url('http://mdbootstrap.com/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row mt-5">
                        <!--Grid column-->
                        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Welcome zulu! </h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Salut vous être dans votre biliothèque numerique du monde scientifique, merci de créer un compte afin de pouvoir profiter de nombreuses ressources et partager les vôtres.
                            Zulu, On abandonne jamais, on sort toujours vivant, nous sommes des héros vivants!!!</h6>
                            <a href="#home" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Voir plus</a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mb-4">
                            <!--Form-->
                            <form>
                            <div class="card wow fadeInRight" data-wow-delay="0.3s" style="background-color: rgba(126, 123, 215, 0.2);">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fa fa-user white-text"></i> Connexion:</h3>
                                        <hr class="hr-light">
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix white-text active"></i>
                                        <input type="email" id="form2" class="white-text form-control">
                                        <label for="form2" class="active" style="color: #ffffff;">Votre email</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <input type="password" id="form4" class="white-text form-control">
                                        <label for="form4" style="color: #ffffff;">Votre mot de passe</label>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-indigo" type="submit">Se connecter</button>
                                        <p style="color: #ffffff;">Pas de compte?
                                            <a href="register.php">Créer</a>
                                        </p>
                                        <hr class="hr-light mb-3 mt-4">
                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="p-2 m-2 tw-ic">
                                                <i class="fab fa-twitter white-text"></i>
                                            </a>
                                            <a class="p-2 m-2 li-ic">
                                                <i class="fab fa-linkedin-in white-text"> </i>
                                            </a>
                                            <a class="p-2 m-2 ins-ic">
                                                <i class="fab fa-instagram white-text"> </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!--/.Form-->
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

    <!-- Liste des niveau  -->

    <div class="container" id="home">
        <!-- Projects section v.3 -->
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Parcours licence</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">La licence s'étend sur 3 années universitaires. </p>

            <!-- Grid row -->
            <div class="row wow fadeInLeft">

                <!-- Grid column -->
                <a class="col-lg-5 mb-lg-0 mb-5 overlay zoom" href="coursl1.php">
                    <!--Image-->
                    <img src="images/licence/l1.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
                </a>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-certificate fa-2x cyan-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Parcours</h5>
                            <p class="grey-text">TRONC COMMUN MATHEMATIQUES ET APPLICATIONS, MIAGE, ACTUARIAT </p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fab fa-leanpub fa-2x red-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Cours</h5>
                            <p class="grey-text">Analyse, Algèbre, Mecanique, Economie, Anglais, Français...</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-md-1 col-2">
                            <i class="far fa-file fa-2x deep-purple-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Fichiers disponible</h5>
                            <p class="grey-text mb-0">20 cours, 100 td,460 liens utiles.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">


        </section>
        <!-- Projects section v.3 -->


        <!-- Section: Features v.1 -->
        <section class="text-center my-5  wow zoomInRight" data-wow-delay="0.6s">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Que proposons-nous?</h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto mb-5">BIBLIO ZULU est une plateforme numérique, qui permet aux personnes récherchant des cours dans le domaine des sciences de trouver des ressources qui pourront les intéresser, et également de partager ses ressources à lui avec les autres. C'est en échangeant nos savoirs respective que le monde évolue</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fab fa-leanpub fa-3x red-text"></i>
                    <h5 class="font-weight-bold my-4">Cours</h5>
                    <p class="grey-text mb-md-0 mb-5">Retrouver de nombreux documents de cours venant de diverses horizons pour mieux vous former.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-book fa-3x cyan-text"></i>
                    <h5 class="font-weight-bold my-4">TD</h5>
                    <p class="grey-text mb-md-0 mb-5">Vous avez besoin de fiches d'exercices pour vous exercez? Et bien ici vous en trouverez en quantité pour toutes vos envies scientifiques.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-link fa-3x orange-text"></i>
                    <h5 class="font-weight-bold my-4">Liens utiles</h5>
                    <p class="grey-text mb-0">Partager avec les autres tout un tas de documents educatifs passionant .

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Features v.1 -->


        <!-- Section: Testimonials v.4 -->
        <section class="text-center my-5 wow zoomInLeft" data-wow-delay="1.4s">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Quelques commentaires</h2>

            <!-- Grid row -->
            <div class="row">

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item mb-5" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
                    </ol>
                    <!--Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <!--Grid column-->
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/1.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Anna Deynah</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Etudiant</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ce site est vraiment cool, j'adore</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/2.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">John Doe</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Etudiant</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>J'aime bien la faciliter d'échange qu'offre ce site.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/3.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Abbey Clark</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Etudiant</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ce site est cool,je l'aime bien et j'apprécie cette idée de plateforme de stockage de documents en ligne, chapeau les gars.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                        <i class="fas fa-star yellow-text"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <!--Grid column-->
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/4.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Blake Dabney</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Web Designer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam,
                                        quis
                                        nostrum exercitationem ullam corporis laboriosam.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star-half-alt"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/5.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Andrea Clay</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/6.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Cami Gosse</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Phtographer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et
                                        iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="far fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <!--Grid column-->
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/7.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Bobby Haley</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Web Developer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/8.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Elisa Janson</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Marketer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et
                                        iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star-half-alt"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="images/avatar/9.jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Rob Jacobs</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                                    <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam,
                                        quis
                                        nostrum exercitationem ullam corporis laboriosam.</p>
                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="far fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Third slide-->

                    </div>
                    <!--Slides-->

                </div>
                <!--Carousel Wrapper-->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Testimonials v.4 -->
    </div>

    <!--/ Liste des niveau  -->


    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer -->


<!-- SCRIPTS -->
    <?php include "includes/plugins/bottom.php"; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.stepper').mdbStepper();
    })

    function someFunction21() {
        setTimeout(function () {
            $('#horizontal-stepper').nextStep();
        }, 2000);
    }

    new WOW().init();
</script>

</body>

</html>