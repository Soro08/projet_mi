<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <?php include "includes/plugins/top.php"; ?>

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

                        <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Contacts</h3>
                        <hr class="hr-light my-4 w-75">
                        <h4 class="subtext-header mt-2 mb-4 text-center">Vous avez des questions ou vous voulez savoir qui nous sommes? <br> Et bien, vous êtes au bon endroit</h4>


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

<div class="container mt-5">
    <!-- Section: Contact v.3 -->
    <section class="contact-section my-5">

        <!-- Form with header -->
        <form>
        <div class="card">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-8">

                    <div class="card-body form">

                        <!-- Header -->
                        <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Nous écrire:</h3>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-name" class="form-control">
                                    <label for="form-contact-name" class="">Votre nom</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-email" class="form-control">
                                    <label for="form-contact-email" class="">Votre email</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-phone" class="form-control">
                                    <label for="form-contact-phone" class="">Votre téléphone </label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-company" class="form-control">
                                    <label for="form-contact-company" class="">Objet</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-contact-message">Votre message</label>
                                    <button class="btn-floating btn-lg blue-gradient" type="submit">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4">

                    <div class="card-body contact text-center h-100 white-text">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                                <p><i class="fas fa-map-marker-alt pr-2"></i>Abidjan, Côte d'Ivoire</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pr-2"></i>+ 225 00 00 00 00</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pr-2"></i>bibliozulu@zulu.ci</p>
                            </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg tw-ic">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg li-ic">
                                    <i class="fab fa-linkedin-in"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        </form>
        <!-- Form with header -->

    </section>
    <!-- Section: Contact v.3 -->

    <!-- Section: Team v.1 -->
    <section class="team-section text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">Notre incroyable équipe</h2>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Nous avons l'honneur de vous présenter l'équipe qui à donner de son temps libre et son savoir pour la réalisation de ce site.Merci à eux encore de s'occuper du maintien du site</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-5 text-center" style="margin: auto;">
                <div class="avatar mx-auto">
                    <img src="images/avatar/7.jpg" class="rounded-circle z-depth-1"
                         alt="Sample avatar">
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                <p class="text-uppercase blue-text"><strong>Developpeur backend</strong></p>
                <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci sed quia non numquam modi tempora eius.</p>
                <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter blue-text"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-text"> </i>
                    </a>
                </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-5" style="margin: auto;">
                <div class="avatar mx-auto">
                    <img src="images/avatar/1.jpg" class="rounded-circle z-depth-1"
                         alt="Sample avatar">
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
                <p class="text-uppercase blue-text"><strong>Devellopeur frontend</strong></p>
                <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
                    doloremque rem laudantium totam aperiam.</p>
                <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-text"> </i>
                    </a>
                </ul>
            </div>
            <!-- Grid column -->

            

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Team v.1 -->


</div>



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
</script>

</body>

</html>