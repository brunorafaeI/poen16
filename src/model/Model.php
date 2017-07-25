<?php

namespace src\model;

use src\database;

Class Model extends DataBase {



    /**
     * fonction de requetage de base de données
     * @param $sql
     * @param null $params
     * @return mixed
     */
    protected function executeRequest($sql, $params = null)
    {

        if (!$params){
            try {
                $result = parent::getBdd()->prepare($sql);
            } catch (RequestException $e) {
                echo 'There is an error: ' . $e->getTraceAsScript();
            }


        }
        else{
            try {
                $result = parent::getBdd()->prepare($sql);
                $result->execute($params);
            } catch (PDOException $e) {
                echo 'There is an error : '. $e->getTraceAsScript();
            }

        }
        return $result;
    }

}
