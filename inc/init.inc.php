<?php
    ini_set('display_errors',0);
    error_reporting(E_ALL);
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING
    );
    define('CONNECTBDD', array(
        'type'     => 'mysql',
        'hostname' => 'localhost',
        'user'     => 'root',
        'password' => 'root',
        'database' => '3_louvre'
    ));
    try{
       $pdo = new PDO(CONNECTBDD['type']
           .':host='.CONNECTBDD['hostname'].';dbname='.CONNECTBDD['database'], 
           CONNECTBDD['user'], 
           CONNECTBDD['password'],
           $options
       );
    }catch(Exeption $e){
        die('Erreur connexion'.$e->getMessage());
    }

    $content = '';

    function debug($val,$mode){
        echo'<pre>';
        if($mode='dump'){
            var_dump($val);
        }else{
            print_r($val);
        }
        echo'</pre>';
    }
?>