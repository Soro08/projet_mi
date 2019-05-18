<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 27/11/2018
 * Time: 16:14
 *
 * Class Model
 * Cette Class nous permet de preparer nos requete Sql
 *
 * Vous pouvez ajouter de nouvelle fonction
 */

class Model
{

    /**
     * Ici on declare nos table comme variable
     *
     */
    public static $user_table = USER_TABLE;



    /**
     * function find()
     * @param $select
     * @param $tables
     * @return array
     *
     * Permet de selectionner tous les donnees dans un tableau
     */
    public static function find($select, $tables){
        global $db;
        $sql = 'SELECT '.$select.' FROM '.$tables;
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([]);
        return $reqquiz->fetchAll();
    }


    /**
     * Fonction findCondition
     * @param $select
     * @param $tables
     * @param $where
     * @param $condition
     * @return mixed
     */
    public static function findCond($select, $tables, $where, $condition , $all = false){
        global $db;
        $id = str_secur($condition);
        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([$id]);
        if (isset($all)){
            if ($all){
                return $reqquiz->fetchAll();
            }else{
                return $reqquiz->fetch();
            }
        }else{
            return $reqquiz->fetch();
        }

    }

    /**
     * Function findCondarray
     * @param $select
     * @param $tables
     * @param $where
     * @param array $condition
     * @param bool $all
     * @return array|mixed
     */
    public static function findCondarray($select, $tables, $where, $condition = array(), $all = false){
        global $db;

        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute($condition);
        if (isset($all)){
            if ($all){
                return $reqquiz->fetchAll();
            }else{
                return $reqquiz->fetch();
            }
        }else{
            return $reqquiz->fetch();
        }

    }


    /**
     * @param $select
     * @param $tables
     * @param $where
     * @param $condition
     * @return int
     */
    public static function findCountCond($select, $tables, $where, $condition){
        global $db;
        $id = str_secur($condition);
        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([$id]);
        return $reqquiz->rowCount();
    }

    /**
     * INSERT
     * @param $table
     * @param $value
     * @param $dataq
     * @param array $data
     */
    public static function saveData($table, $value, $dataq, $data = array()){
        global $db;
        $statement = $db->prepare('INSERT INTO '.$table.' ('.$value.')
            VALUES ('.$dataq.');');
        $statement->execute($data);
    }


    /**
     * UPDATE
     * @param $table
     * @param $set
     * @param $where
     * @param array $data
     */
    public static function updateData($table, $set, $where, $data = array()){
        global $db;
        $statementnuser = $db->prepare('UPDATE '.$table.' SET '.$set.' WHERE '.$where.';');
        $statementnuser->execute($data);
    }

    /**
     * DELETE
     * @param $table
     * @param $where
     * @param $data
     */
    public static function deleteData($table, $where,$data){
        global $db;
        $statementnuser = $db->prepare('DELETE * FROM '.$table.' WHERE '.$where.';');
        $statementnuser->execute(array($data));
    }


}

//86617205