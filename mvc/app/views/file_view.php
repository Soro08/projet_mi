

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

                    <h3 class="display-5 font-weight-bold white-text mb-0 pt-md-5 pt-5">Ajout fichier</h3>
                    <hr class="hr-light my-4 w-75">
                    <h4 class="subtext-header mt-2 mb-4">Partager vos fichier et donner des connaissances.</h4>


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


<div class="container mb-5 mt-4" id="home">
    <div class="row">

        <div class="card col-md-12">
            <form class="needs-validation container" novalidate>


                <div class="form-row">

                    <div class="col-md-3 mb-3 md-form">
                        <select class="mdb-select" required>
                            <option value="" disabled selected>Niveau</option>
                            <option value="1">Licence 1</option>
                            <option value="2">Licence 2</option>
                            <option value="3">Licence 3</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez remplir ce champs.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 md-form">
                        <select class="mdb-select" required>
                            <option value="" disabled selected>Discipline</option>
                            <option value="1">Analyse</option>
                            <option value="2">Algebre</option>
                            <option value="3">Informatique</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez remplir ce champs.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 md-form">
                        <select class="mdb-select" required>
                            <option value="" disabled selected>Type de fichier</option>
                            <option value="1">Cours</option>
                            <option value="2">TD & Compo</option>
                            <option value="3">Fichier utiles</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez remplir ce champs.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 md-form">
                        <select class="mdb-select" required>
                            <option value="" disabled selected>Annee universitaire</option>
                            <option value="1">2018-2019</option>
                            <option value="2">2017-2018</option>
                            <option value="3">2016-2017</option>
                        </select>
                        <div class="invalid-tooltip">
                            Veuillez remplir ce champs.
                        </div>
                    </div>


                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-12 md-form">
                        <label for="validationTooltip031">Nom du fichier</label>
                        <input type="text" class="form-control" id="validationTooltip031" required>
                        <div class="invalid-tooltip">
                            Veuillez entrer un nom de fichier valide.
                        </div>
                        <div class="valid-tooltip">
                            nom valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 md-form">
                        <div class="file-field">
                            <div class="btn blue-gradient btn-sm float-left">
                                <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choisir le fichier</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="cliquez sur le button">
                            </div>
                        </div>
                    </div>


                </div>

                <button class="btn blue-gradient btn-sm btn-rounded float-right" type="submit"> <i class="fa fa-plus-square"></i> Ajouter</button>
            </form>
        </div>


    </div>
</div>