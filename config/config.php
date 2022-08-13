<?php
/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 06/08/2022
 * Time: 20:08
 */
    if(!defined('BD_SERVEUR')) define ('BD_SERVEUR','127.0.0.1');
    if(!defined('BD_UTILISATEUR')) define ('BD_UTILISATEUR','root');
    if(!defined('BD_PASSWORD')) define ('BD_PASSWORD','');
    if(!defined('BD_NOM')) define ('BD_NOM','facturecheque_db');
    if(!defined('BD_DSN')) define ('BD_DSN','mysql:host='.BD_SERVEUR.';dbname='.BD_NOM);