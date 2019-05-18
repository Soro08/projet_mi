<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 21/11/2018
 * Time: 14:32
 */

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}