<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 22/11/2018
 * Time: 10:07
 */

class Autoloader
{
    /**
     * Enregistre notre autoloader
     * Elle nous permet de charger automatiquement nos class dans le dossier _classes
     */
    static function register(){
        spl_autoload_register(function($class) {
            require APP.'_classes/' . $class . '.php';
        });
    }

}