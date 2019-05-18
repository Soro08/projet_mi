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

                    <h3 class="display-5 font-weight-bold white-text mb-0 pt-md-5 pt-5">Profile </h3>
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



<div class="container mb-5 mt-5" id="home">
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



        <div class="col-md-8">
            <div class="text-center">
                <h2>Mes Uploads</h2>
<!--                <span class="badge badge-info">5 fichiers</span>-->
                <a href="file.mi" class="btn blue-gradient btn-sm"> <i class="fa fa-plus-circle"></i> Ajouter un nouveau fichier</a>
            </div>

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
                                <h5 class="h5-responsive mr-5">Cours <i class="fas fa-angle-down rotate-icon"></i></h5>
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

                                    <th><i class="fab fa-leanpub fa-lg mr-2 red-text" aria-hidden="true" data-toggle='popover-hover' id="cours"></i></th>
                                    <th><i class="fas fa-file-medical fa-lg mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-user-plus fa-lg mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                                    <th class="text-center"><i class="fas fa-star fa-lg mr-2 yellow-text note" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-download fa-lg mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                <tr>

                                    <td width="30%"><i class="fas fa-file-word fa-sm mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
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
                                <h5 class="h5-responsive mr-5">TD <i class="fas fa-angle-down rotate-icon"></i></h5>
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

                                    <th><i class="fab fa-leanpub fa-lg mr-2 red-text" aria-hidden="true" data-toggle='popover-hover' id="cours"></i></th>
                                    <th><i class="fas fa-file-medical fa-lg mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-user-plus fa-lg mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                                    <th class="text-center"><i class="fas fa-star fa-lg mr-2 yellow-text note" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-download fa-lg mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                <tr>

                                    <td width="30%"><i class="fas fa-file-word fa-sm mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
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
                    <div class="card-header" role="tab" id="headingThree31">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
                           aria-expanded="false" aria-controls="collapseThree31">
                            <h5 class="mb-0">
                                <h5 class="h5-responsive mr-5">Liens utiles <span class="badge badge-info">5</span> <i class="fas fa-angle-down rotate-icon"></i></h5>
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

                                    <th><i class="fab fa-leanpub fa-lg mr-2 red-text" aria-hidden="true" data-toggle='popover-hover' id="cours"></i></th>
                                    <th><i class="fas fa-file-medical fa-lg mr-2 purple-text ajoutele" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-user-plus fa-lg mr-2 grey-text ajoutepar" aria-hidden="true" ></i></th>
                                    <th class="text-center"><i class="fas fa-star fa-lg mr-2 yellow-text note" aria-hidden="true" ></i></th>
                                    <th><i class="fas fa-download fa-lg mr-2 teal-text telecharger" aria-hidden="true" ></i></th>

                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                <tr>

                                    <td width="30%"><i class="fas fa-file-word fa-sm mr-2 blue-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
                                </tr>

                                <tr>

                                    <td><i class="fa fa-file-pdf fa-sm mr-2 red-text" aria-hidden="true"></i>Cell 1</td>
                                    <td width="30%">01/05/2019</td>
                                    <td width="20%">Anna Doe</td>
                                    <td width="15%" class="text-center" data-toggle="modal" href="#exampleModalCenter1"><i class="fas fa-star  mr-2 yellow-text" aria-hidden="true"></i></td>
                                    <td>
                                        <a href="#exampleModalCenter" data-toggle="modal"><i class="fas fa-download blue-text"></i></a>                                    </td>
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