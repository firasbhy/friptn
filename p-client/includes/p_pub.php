<?php
 include('includes/connect_db.php');
 
//session_start();
  //$id_a = $_SESSION['id_a']; 

 $req_pub = $bdd->query("SELECT * FROM pub where  type='on' limit 1 " );
 $donnees_pub = $req_pub->fetch();
 ?>
<div class="col-md-3 col-md-pull-9 sidebar-column">
                        <div class="information-blocks">
                            <a href="<?php echo $donnees_pub['lien']; ?>" class="sale-entry vertical">
                                <span class="hot-mark yellow"></span>
                                <span class="sale-price"><span></span>  </span>
                                <span class="sale-description">Cliquer sur l'image et contactez-nous</span>
                                <img src="../p-admin/Controller/<?php echo $donnees_pub['image']; ?>"/>
                            </a>
                        </div>
                       
                        <div class="information-blocks"> <!--Partie pub table-->
                            <h3 class="block-title">Company Informations</h3>
                            <div class="text-widget">
                                <img   id="masuperimage" class="image" src="img/img/pub/entete.jpg" alt="" />
                                <div class="description">Copyright © 2020 Tous droits réservés </div>
                                
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>                  
                    
  