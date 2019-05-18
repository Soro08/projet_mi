<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ALL);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "T");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

/**
 * DataBase informations
 * Connexion à la base de donnée
 *
 * Changer les parametres
 */

define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "dbname");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");
/**
 * DataBase informations
 * DataBases Tables name informations
 * Nom des tables de la base de donnée
 */

define('USER_TABLE', 'users');

/**
 * Chemin du dossie app
 */
define('APP', 'app/');
