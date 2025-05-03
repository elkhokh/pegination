
<?php
require_once 'config.php';

    try{
        $conn = new PDO("mysql:host=".DB_HOST .";dbname=".DB_NAME , DB_USERNAME , DB_PASSWORD);
// if(!$conn){
//     echo "not found database";
//     exit;
//         }
    } catch(PDOException $ex){

        if(file_exists('log.log')){
        $error = date('Y-m-d H:i:s') . " - " . $ex->getMessage() . "\n";
        file_put_contents('log.log', $error, FILE_APPEND);
        }

    echo " falid connection 404 ";
    exit;
    }






