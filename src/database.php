<?php

namespace src;

use \PDO;
use src\config;

/**
 * Class DataBase
 * @package src
 */
Abstract Class DataBase {

      /** Objet PDO d'accès à la BD */
      private static $bdd;

      /**
       * Fonction de connexion à la base
       * @return \PDO  On retourne l'objet $bdd à la fonction de requêtes
       */
      protected static function getBdd()
      {
          $file = 'config.ini';

          /** Call the file config.ini */
          if(!$settings = parse_ini_file($file, true)) {
              throw new ConstructException("Unable to open " .$file. " .");
          }

          try{

              if (!self::$bdd instanceof PDO):
                  $dsn = "mysql:host=".$settings['host'].
                        ";dbname=".$settings['db_name'].
                        ";charset=utf8";

                  self::$bdd = new PDO($dsn, $settings['db_user'], $settings['db_passwd']);
                  self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              endif;
          }
          catch(PDOException $e){
              throw new PDOException("Problem in getBdd() : ", $e->getMessage());

          }
          return self::$bdd;
      }


  }
