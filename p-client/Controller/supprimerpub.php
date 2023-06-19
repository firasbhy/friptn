<?php
ob_start();
session_start();
require_once('../../p-admin/Model/Pub.class.php');
 




$pub = new Pub($_SESSION['id'],"","","","","off");
$pub->supprimer();

header("location:../liste-pub.php");
?>