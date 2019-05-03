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

        .img-certificate{
            margin-left:50%;
            margin-top:-11%;
            width:50px;
        }
        .card .indigo.lighten-1 {
            background-color: #386abb!important;
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

                        <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Profile </h3>
                        <hr class="hr-light my-4 w-75">


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

        <div class="col-md-4">
            <!-- Card -->
            <div class="card testimonial-card card-perso">

                <!-- Background color -->
                <div class="card-up indigo lighten-1"></div>

                <!-- Avatar -->
                <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar">
                </div>

                <img class="img-certificate" src="images/certificate-or.png" alt="">
                <!-- Content -->
                <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title">Anna Doe</h4>
                    <button class="btn blue-gradient btn-sm btn-block">privillege1</button>
                    <button class="btn blue-gradient btn-sm btn-block">privillege2</button>
                    <button class="btn blue-gradient btn-sm btn-block">privillege3</button>
                    <hr>
                    
                </div>
                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>01/05/2019</li>
                        <li class="list-inline-item pr-2"><i class="fas fa-medal yellow-text"> 2000 pts</i></li>
                        <li class="list-inline-item pr-2"><i class="far fa-user-circle white-text"> </i> Semi admin</li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        </div>

        <div class="col-md-4">
            <!-- Card -->
            <div class="card testimonial-card card-perso">

                <!-- Background color -->
                <div class="card-up indigo lighten-1"></div>

                <!-- Avatar -->
                <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar">
                </div>

                <img class="img-certificate" src="images/certificate-argent.png" alt="">
                <!-- Content -->
                <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title">Anna Doe</h4>
                    <button class="btn blue-gradient btn-sm btn-block" disabled>privillege1</button>
                    <button class="btn blue-gradient btn-sm btn-block">privillege2</button>
                    <button class="btn blue-gradient btn-sm btn-block">privillege3</button>
                    <hr>
                    
                </div>
                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>01/05/2019</li>
                        <li class="list-inline-item pr-2"><i class="fas fa-medal yellow-text"> 1000 pts</i></li>
                        <li class="list-inline-item pr-2"><i class="far fa-user-circle white-text"> </i> Censureur</li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        </div>

        <div class="col-md-4">
            <!-- Card -->
            <div class="card testimonial-card card-perso">

                <!-- Background color -->
                <div class="card-up indigo lighten-1"></div>

                <!-- Avatar -->
                <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar">
                </div>

                <img class="img-certificate" src="images/certificate-bronze.png" alt="">
                <!-- Content -->
                <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title">Anna Doe</h4>
                    <button class="btn blue-gradient btn-sm btn-block" disabled>privillege1</button>
                    <button class="btn blue-gradient btn-sm btn-block" disabled>privillege2</button>
                    <button class="btn blue-gradient btn-sm btn-block">privillege3</button>
                    <hr>
                    
                </div>
                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>01/05/2019</li>
                        <li class="list-inline-item pr-2"><i class="fas fa-medal yellow-text"> 500 pts</i></li>
                        <li class="list-inline-item pr-2"><i class="far fa-user-circle white-text"> </i> Observateur</li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        </div>

        <div class="col-md-8">
            <h2 class="text-center">Mes Uploads</h2>
            <!-- Accordeon -->
                    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo1">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
        aria-expanded="false" aria-controls="collapseTwo1">
        <h5 class="mb-0">
            <h3 class="h3-responsive mr-5">Cours <i class="fas fa-angle-down rotate-icon"></i></h3>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
      data-parent="#accordionEx1">
      <div class="card-body">
        <form class="form-inline md-form form-sm mt-0">
                   

                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Rechercher un cours" aria-label="Search">
                </form> 
        <!-- Table  -->
                <table class="table">
                    <!-- Table head -->
                    <thead>
                    <tr>

                        <th><i class="fab fa-leanpub fa-2x mr-2 red-text" aria-hidden="true" data-toggle='popover-hover' id="cours"></i></th>
                        <th><i class="fas fa-file-medical fa-2x mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-user-plus fa-2x mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                        <th class="text-center"><i class="fas fa-star fa-2x mr-2 yellow-text note" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-download fa-2x mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                    </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                    <tr>

                        <td width="30%"><i class="fas fa-file-word fa-2x mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table  -->
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
        aria-expanded="false" aria-controls="collapseTwo21">
        <h5 class="mb-0">
            <h3 class="h3-responsive mr-5">TD <i class="fas fa-angle-down rotate-icon"></i></h3>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
      data-parent="#accordionEx1">
      <div class="card-body">
         <form class="form-inline md-form form-sm mt-0">
                   

                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Rechercher un TD" aria-label="Search">
                </form> 
        <!-- Table  -->
                <table class="table">
                    <!-- Table head -->
                    <thead>
                    <tr>

                         
                        <th><i class="fas fa-book fa-2x mr-2 cyan-text" aria-hidden="true" data-toggle='popover-hover' id="td"></i></th>
                        <th><i class="fas fa-file-medical fa-2x mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-user-plus fa-2x mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                        <th class="text-center"><i class="fas fa-star fa-2x mr-2 yellow-text note" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-download fa-2x mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                    </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                    <tr>

                        <td width="30%"><i class="fas fa-file-word fa-2x mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    </tbody>
                    <!-- Table body -->
                </table>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree31">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
        aria-expanded="false" aria-controls="collapseThree31">
        <h5 class="mb-0">
            <h3 class="h3-responsive mr-5">Liens utiles <i class="fas fa-angle-down rotate-icon"></i></h3>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
      data-parent="#accordionEx1">
      <div class="card-body">
        <form class="form-inline md-form form-sm mt-0">
                   

                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Rechercher un lien utiles" aria-label="Search">
                </form> 

        <!-- Table  -->
                <table class="table">
                    <!-- Table head -->
                    <thead>
                    <tr>

                         
                        <th><i class="fas fa-link fa-2x mr-2 orange-text" aria-hidden="true" data-toggle='popover-hover' id="liensutiles"></i></th>
                        <th><i class="fas fa-file-medical fa-2x mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-user-plus fa-2x mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                        <th class="text-center"><i class="fas fa-star fa-2x mr-2 yellow-text note" aria-hidden="true" ></i></th>
                        <th><i class="fas fa-download fa-2x mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                    </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                    <tr>

                        <td width="30%"><i class="fas fa-file-word fa-2x mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    <tr>

                        <td><i class="fa fa-file-pdf fa-2x mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                        <td width="30%">01/05/2019</td>
                        <td width="20%">Anna Doe</td>
                        <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1" ><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"><i class="fas fa-download" data-toggle="modal" href="#exampleModalCenter"></i></a>
                        </td>
                    </tr>

                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table  -->
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
        </div>

    </div>
    
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
    /*GESTION DES POPOVERS*/
/**********************/
   // popovers initialization - on hover/cours
$('#cours').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Cours'; }
});
   // popovers initialization - on hover/td
$('#td').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'TD'; }
});
   // popovers initialization - on hover/liensutiles
$('#liensutiles').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Liens utiles'; }
});
   // popovers initialization - on hover/ajoutele
$('[class*=ajoutele]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Ajouté le'; }
});
   // popovers initialization - on hover/ajoutepar
$('[class*=ajoutepar]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Ajouté par'; }
});
   // popovers initialization - on hover/note
$('[class*=note]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Note'; }
});
   // popovers initialization - on hover/telecharger
$('[class*=telecharger]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return 'Télécharger'; }
});
/*FIN DE LA GESTION DES POPOVERS*/
/**********************/
</script>

</body>

</html>