<?php
try{
    $pdo = new PDO('pgsql:host=ec2-34-253-148-186.eu-west-1.compute.amazonaws.com;dbname=d5pj2kv8rvk48l','woziqaocstlvip','3f440fcba04d85a681467952a3675d13ae4af23d8286b6c799f7f9b76e535825');
}catch (PDOException $e){
    die($e->getMessage());
}
