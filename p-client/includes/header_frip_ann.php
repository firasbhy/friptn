<?php 
include('includes/connect_db.php');
   $req_cat= $bdd->query("SELECT * FROM categorie ");
?>
<div class="header-wrapper style-3">
                <header class="type-1">
                    <div class="header-top">
                        <div class="header-top-entry">
                            <div class="title"><img src="img/flag-lang-2.png" alt="" />Français</i></div>
                            
                        </div>
                        <div class="header-top-entry">
                            <div class="title"><b>Devise:</b>TND <img src="img/img/flag-lang-4.png" height="15" width="15" /></div>
                            
                        </div>
                        <div class="header-top-entry hidden-xs">
                            <div class="title"><i class="fa fa-phone"></i>Vous avez des question? contacter nous: <a href="tel:+216 71 000 001"><b>+216 71 000 001</b></a></div>
                        </div>
                        <div class="socials-box">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                        <div class="clear"></div>
                    </div>

                    <div class="header-middle">
                        <div class="logo-wrapper">
                            <a id="logo" href="index_ann.php"><img src="img/img/logo-light.png" alt="" /></a>
                        </div>

                        <div class="middle-entry">
                            <a class="icon-entry" href="#">
                                <span class="image">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span class="text">
                                    <b>Contact</b> <br/> (+216) 71 000 001
                                </span>
                            </a>
                            <a class="icon-entry" href="#">
                                <span class="image">
                                    <i class="fa fa-car"></i>
                                </span>
                                <span class="text">
                                    <b>Livraison gratuite</b> <br/> commande plus de 150 DT.
                                </span>
                            </a>
                        </div>

                        <div class="right-entries">


                          <a class="header-functionality-entry" href="#">
                                <span class="image" >
                                    <i class="fa fa-user" style="font-size: 2rem;"></i>
                                </span>
                                 </a>
                            <a class="header-functionality-entry" href="#">
                                <span>
                                 <div><?php echo $_SESSION['login']; ?></div>
                                <div> votre id: <?php echo $_SESSION['id'] ; ?></div>
                                   
                                </span>
                            </a>
                            
                         
                        </div>

                    </div>

                    <div class="close-header-layer"></div>
                    <div class="navigation">
                        <div class="navigation-header responsive-menu-toggle-class">
                            <div class="title">Navigation</div>
                            <div class="close-menu"></div>
                        </div>
                        <div class="nav-overflow">
                            <div class="navigation-search-content">
                                <div class="toggle-desktop-menu"><i class="fa fa-search"></i><i class="fa fa-close"></i>Recherche</div>
                                <div class="search-box size-1">
                                    <form action="annonce_rech.php" method="get">
                                        <div class="search-button">
                                            <i class="fa fa-search"></i>
                                            <input type="submit" />
                                        </div>
                                       
                                        <div class="search-field">
                                            <input type="text" name="recherche" required placeholder="rechercher des annonces" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <nav>
                                <ul>
                                    <li class="full-width">
                                        <i class="fa fa-home" style="font-size: 2rem;" ><a href="index_ann.php" style="text-decoration:none" class="active"></i>Acceuil</a>
                                        
                                    </li>
                                    
                                    
                                    <li class="simple-list">
                                        <a>Annonce</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
                                                <li><a href="liste-annonce.php"><i class="fa fa-angle-right"></i>Liste de vos annonces</a></li>
                                                <li><a href="Ajouter-Anonnce.php"><i class="fa fa-angle-right"></i>Ajouter une annonce</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="simple-list">
                                        <a>Catégorie</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">

                                            <ul class="simple-menu-list-column">
                                                <?php while ($donnees_cat=$req_cat->fetch())
                                                        {

                                                        
                                                    
                                                 ?>
                                                <li><a href="annonceparcat.php?id=<?php echo $donnees_cat['id']; ?>"><i class="fa fa-angle-right"></i> <?php echo $donnees_cat['nom']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                     <li class="column-1">
                                        <a href="contact.php">Contactez_nous</a>
                                        
                                    </li>

                                    <li class="simple-list">
                                        <a>Compte</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
                                                <li><a href="Profil_ann.php"><i class="fa fa-angle-right"></i> Modifier profil</a></li>
                                                <li><a href="Controller/dnx_inv.php"><i class="fa fa-sign-out"></i>Déconnexion</a></li>
                                    
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li class="fixed-header-visible">
                                        <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>

                                <div class="clear"></div>

                                <a class="fixed-header-visible additional-header-logo"><img src="img/img/logo-darkn.png" alt=""/></a>
                            </nav>
                            <div class="navigation-footer responsive-menu-toggle-class">
                                <div class="socials-box">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <div class="clear"></div>
                                </div>
                                <div class="navigation-copyright">Created by <a href="#">Dsignet</a>. All rights reserved</div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clear"></div>
            </div>