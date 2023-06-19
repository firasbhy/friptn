<?php
ob_start();
session_start();
require_once('../../p-admin/Model/Annonce.class.php');
 




$Annonce = new Annonce($_SESSION['id'],"","","","","off","");
$Annonce->supprimer();

header("location:../liste-annonce.php");
?>