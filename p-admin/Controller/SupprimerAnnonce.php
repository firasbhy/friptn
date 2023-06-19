<?php
ob_start();
require_once('../Model/Annonce.class.php');
$annonce = new Annonce($_POST['id_annonceur'],$_POST['titre'],$_POST['description'],$_POST['id_categorie'],$_POST['prix'],$_POST['type'],$chemin);
$annonce->supprimer();

header("location:../Liste-annonce.php");
//exit();
?>