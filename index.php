<?php
define("host","ec2-34-253-148-186.eu-west-1.compute.amazonaws.com");
define("dbname","d5pj2kv8rvk48l");
define("dbuser","woziqaocstlvip");
define("dbpass","3f440fcba04d85a681467952a3675d13ae4af23d8286b6c799f7f9b76e535825");
try{
    $pdo = new PDO('pgsql:host=host;dbname=dbname',dbuser,dbpass);
}catch (PDOException $e){
    die($e->getMessage());
}
