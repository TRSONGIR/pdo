<?php
try{
    $pdo = new PDO('pgsql:host=ec2-34-253-148-186.eu-west-1.compute.amazonaws.com;dbname=d5pj2kv8rvk48l','woziqaocstlvip','3f440fcba04d85a681467952a3675d13ae4af23d8286b6c799f7f9b76e535825');
}catch (PDOException $e){
    die($e->getMessage());
}
$statment = $pdo->prepare("INSERT INTO serials (imdbid,persianname,poster,quality,pach) VALUES ('tt7431994','گودال','https://m.media-amazon.com/images/M/MV5BZDg3MDA2ZDktOWQ1OS00ZmNmLThmNDgtNzhmNTgwY2VhOTkyXkEyXkFqcGdeQXVyOTQ1Mzg0Mzg@._V1_.jpg','480p','cukur')");
$statment->execute();
