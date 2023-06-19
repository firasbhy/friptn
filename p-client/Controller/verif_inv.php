<?php 

require_once('../Model/Cnx_ins.class.php');

$invs = new CnxInv($_POST['email'],$_POST['password']);
$invs->verifier();

?>
