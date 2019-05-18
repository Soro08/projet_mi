<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <?php include "app/views/includes/plugins/top.php"; ?>
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
            height: 50vh;
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
        .img-certificate{
            margin-left:50%;
            margin-top:-11%;
            width:50px;
        }
        .card .indigo.lighten-1 {
            background-color: #386abb!important;
        }
        .rating a {
            float:right;
            color: #aaa;
            text-decoration: none;
            -webkit-transition: color .4s;
            -moz-transition: color .4s;
            -o-transition: color .4s;
            transition: color .4s;
        }
        .rating a:hover,
        .rating a:hover ~ a,
        .rating a:focus,
        .rating a:focus ~ a     {
            color: yellow;
            cursor: pointer;
        }
        .rating2 {
            direction: rtl;
        }
        .rating2 a {
            float:none
        }
    </style>
</head>

<body>

<!-- Main navigation -->
<header>
    <!-- Navbar -->
    <?php include "app/views/includes/templates/navbar.php"; ?>
    <!-- Navbar -->

<!-- Main navigation -->

<!-- Liste des niveau  -->

<?= $contents ?>

<!--/ Liste des niveau  -->


<!-- Footer -->
<?php include "app/views/includes/templates/footer.php"; ?>
<!-- Footer -->


<!-- SCRIPTS -->
<?php include "app/views/includes//plugins/bottom.php"; ?>

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

    new WOW().init();
    //
    // var element = document.getElementById('validationTooltipcontact');
    // var maskOptions = {
    //     mask: '+{225} 00-00-00-00'
    // };
    // var mask = IMask(element, maskOptions);

    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
</script>

</body>

</html>