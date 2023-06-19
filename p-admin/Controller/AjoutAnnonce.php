<?php
require_once('../Model/Annonce.class.php');
$dossier_upload="upload/";
echo basename($_FILES['file']['name']);
$chemin=$dossier_upload.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $chemin);



$Annonce = new Annonce($_POST['annonceur'],$_POST['titre'],$_POST['description'],$_POST['catégorie'],$_POST['prix'],$_POST['type'],$chemin);
$Annonce->ajouter();

header("location:../Liste-Annonce.php?Ajout=oui");
?>