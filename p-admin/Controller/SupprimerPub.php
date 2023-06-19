<?php
ob_start();
require_once('../Model/Pub.class.php');
$pub= new Pub($_POST['id_invistisseur'],$_POST['titre'],$_POST['date'],$_POST['lien'],$_POST['type'],$chemin);
$pub->supprimer();

header("location:../Liste-pub.php");
//exit();
?>