<?php
/**
 * Inclusion des fichiers principaux
 * !!!!!!!! L'odre est important !!!!!!!!!
 */
include_once 'app/_config/config.php';

include_once APP.'_functions/functions.php';
include_once APP.'_classes/Autoloader.php';


Autoloader::register();

/**
 * Connexion a la bd
 *
 */

//include_once APP.'_config/db.php';

/**
 * Définition de la page courante
 */

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
    /**
     * Verifier si on a un parametre
     *
     * Si on a deux parametre ou plus , il faut gerer la cascade
     */
    if ( isset($_GET['q-nan']) AND !empty($_GET['q-nan'])){
        $idquiz = trim(strtolower($_GET['q-nan'])) ;
    }
}
else {
    /**
     * Si on a pas de page demande ,on reste sur l'acceuil
     */
    $page = 'acceuil';
}

/**
 * Controller contenant toutes les pages
 */
$allPages = scandir(APP.'controllers/');

/**
 *  Vérification de l'existence de la page dans le controller
 */
if (in_array($page.'_controller.php', $allPages)) {

    /**
     * Inclusion de la page
     */
    include_once APP.'models/'.$page.'_model.php';
    include_once APP.'controllers/'.$page.'_controller.php';

    // Demarrage de la tamporisation (rien de s'affichera)
    ob_start() ;
// On integre le contenu de la page
    include_once APP.'views/'.$page.'_view.php';
// On recupere dans une variable le contenu du tampon
    $contents = ob_get_clean() ;
// On intégre le template qui utilise la variable $contenu

    if ($page == 'acceuil'){
        include_once APP.'views/includes/templates/userhome.php';
    }else{
        include_once APP.'views/includes/templates/userpage.php';
    }





} else {
    /**
     * Ici si la page demande n'existe pas alors on affiche la page 404
     */

    echo 'Erreur 404';

}

/**
 * On se deconnecte a la bd
 */

Database::disconnect();

?>