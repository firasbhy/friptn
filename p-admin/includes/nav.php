 <?php $req5= $bdd->query("SELECT count(*) FROM contact where lu=0");
 $donnees5=$req5->fetch();?>
 <div class="vertical-menu">

    <div data-simplebar class="h-100">
 <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"><?php echo $donnees5[0]; ?></span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span>Administrateur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Administrateur.php">Liste admin</a></li>
                        <li><a href="Ajout-Administrateur.php">Ajouter admin</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-tie"></i>
                        <span>Invistisseur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Invistisseur.php">Liste invistisseurs</a></li>
                        <li><a href="Ajout-Invistisseur.php">Ajouter invistisseur</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Annonceur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Annonceur.php">Liste annonceurs</a></li>
                        <li><a href="Ajout-annonceur.php">Ajouter annonceurs</a></li>
                        
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dialpad"></i>
                        <span>Catégorie</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Categorie.php">Liste catégories</a></li>
                        <li><a href="Ajout-categorie.php">Ajouter catégorie</a></li>
                        
                    </ul>
                </li>
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-food-menu"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Page.php">Liste pages</a></li>
                        
                        
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-device-tablet"></i>
                        <span>Annonce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Annonce.php">Liste d'annonces</a></li>
                         <li><a href="Ajout-annonce.php">Ajouter annonce</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-flashlight"></i>
                        <span>Publicité</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Liste-Pub.php">Liste de publicité</a></li>
                         <li><a href="Ajout-pub.php">Ajouter publicité</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-message-rounded-dots"></i>
                        <span>Contact</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="liste-msg.php">Liste des messages</a></li>
                        <li><a href="Ajout-msg.php">Ajouter message</a></li>
                        
                    </ul>
                </li>
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-add-to-queue"></i>
                        <span>Demandes Investisseur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Demande-Invistisseur.php">Liste des demandes</a></li>
                        
                        
                    </ul>
                </li>

                
            

                

            </ul>
        </div>
           </div>
</div>