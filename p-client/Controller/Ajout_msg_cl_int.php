<?php
session_start();
require_once('../../p-admin/Model/Contact.class.php');


//$contact = new Contact($_SESSION['nom'],$_SESSION['email'],$_POST['sujet'],"bonjour firas",date('d-m-Y'),0);
$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['msg'],$_POST['datee'],0);
$contact->ajouter();

header("location:../msg_env.php");

?>