<?php
ob_start();
require_once('../Model/Categorie.class.php');
$categorie = new Categorie($_POST['nom'],$_POST['description'],$chemin);
$categorie->supprimer();

header("location:../Liste-categorie.php");
//exit();
?>