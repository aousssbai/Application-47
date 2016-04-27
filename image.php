<?php
include("header.php");
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

        
$stmt = $db->query("SELECT image FROM exercices WHERE groupNumber=2");

$stmt->bindColumn(1, $image, PDO::PARAM_LOB);
$stmt->fetch(PDO::FETCH_BOUND);


echo $image;
?>