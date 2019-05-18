<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <?php include "app/views/includes/plugins/top.php"; ?>
    <!-- Titre -->
    <title>BIBLIO ZULU|Accueil</title>

    <style>
        html {
            scroll-behavior: smooth;
        }
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
    <?php include "app/views/includes/templates/navbar.php"; ?>

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
                        <a href="#home" class="btn btn-outline-white wow fadeInLeft smooth-scroll data-wow-delay="0.3s">Voir plus</a>
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
                                            <a href="register.mi">Créer</a>
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

<?= $contents ?>

<!--/ Liste des niveau  -->


<!-- Footer -->
<?php include "app/views/includes/templates/footer.php"; ?>
<!-- Footer -->


<!-- SCRIPTS -->
<?php include "app/views/includes//plugins/bottom.php"; ?>

<script type="text/javascript">
    
    new WOW().init();
</script>

</body>

</html>