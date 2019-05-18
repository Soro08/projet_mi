<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 22/11/2018
 * Time: 10:16
 */

class Database
{
    private static $dbHost = DATABASE_HOST;
    private static $dbName = DATABASE_NAME;
    private static $dbUsername = DATABASE_USER;
    private static $dbUserpassword = DATABASE_PASSWORD;


    private static $connection = null;

    /*Fonction connexion  */
    /**
     * @return null|PDO
     */

    public static function connect()
    {
        /* UTILISATION DE VARIABLE D'UNE CLASSE : selt::$nom_variable */

        if(self::$connection == null)
        {
            /*CONNEXION */
            try
            {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}