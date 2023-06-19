<?php
require_once('../Model/Categorie.class.php');
$dossier_upload="upload/";
echo basename($_FILES['image']['name']);
$chemin=$dossier_upload.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $chemin);



$Categorie = new Categorie($_POST['nom'],$_POST['description'],$chemin);
$Categorie->ajouter();

header("location:../Liste-Categorie.php?Ajout=oui");