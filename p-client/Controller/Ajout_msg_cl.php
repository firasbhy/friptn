<?php
session_start();
require_once('../../p-admin/Model/Contact.class.php');


//$contact = new Contact($_SESSION['nom'],$_SESSION['email'],$_POST['sujet'],"bonjour firas",date('d-m-Y'),0);
$contact = new Contact($_SESSION['nom'],$_SESSION['email'],$_POST['sujet'],$_POST['msg'],$_POST['datee'],1);
$contact->ajouter();

header("location:../msg_env.php");

?>