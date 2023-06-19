<?php 

session_start();  
?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/img/favicon.ico" />
    <title>Contacter | Frip.Tn</title>
</head>
<body class="style-3">

    <!-- LOADER -->
     <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->

                    <?php include('includes/header_frip_inv.php')?>


            <div class="content-push">

                
                <div class="information-blocks">
                   
                    <div class="row">
                        <div class="col-md-8 information-entry">
                            <h3 class="block-title main-heading">Écrivez-nous</h3>
                            <form action="Controller/Ajout_msg_cl.php" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                    
                                        
                                        <label>Sujet <span>*</span></label>
                                        <input class="simple-field" type="text" name="sujet" placeholder="Votre sujet (required)" required />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Votre message <span>*</span></label>
                                        <textarea class="simple-field" name="msg" placeholder="Votre message (required)" required></textarea>

                                        <input class="simple-field" type="date" name="datee" readonly="readonly"  name="datee" id="dateDuJour" />
                                        <div class="clear"></div>
                                        <div class="button style-10">Envoyer le message<input type="submit"  /></div>

                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-4 information-entry">
                            <h3 class="block-title main-heading">Restons en contact</h3>
                            <div class="article-container style-1">
                                <p></p>
                                <h5>Adresse</h5>
                                <p>2100 Cité cherif, Gafsa<br/>
                                <br/>
                                Tunisie<br/>
                                Gafsa 2100<br/> 
                                Cité cherif<br/></p>
                                <h5>Contact Informations</h5>
                                <p>Email: stores@domain.com<br/>
                                Toll-free: (1800) 000 8808</p>
                            </div>
                            <div class="share-box detail-info-entry">
                                <div class="title">Partager sur les réseaux sociaux</div>
                                <div class="socials-box">
                                    <a href="www.facebook.com/frip_tn"><i class="fa fa-facebook"></i></a>
                                    <a href="www.twetter.com/frip_tn"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="www.youtube.com/frip_tn"><i class="fa fa-youtube"></i></a>
                                    <a href="www.linkedin.com/frip_tn"><i class="fa fa-linkedin"></i></a>
                                    <a href="www.instagram.com/frip_tn"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                               

                <!-- FOOTER -->
                <?php include('includes/footer_frip.php') ;?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

  
   

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>

    <!-- map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
</body>


</html>
<script>
 

var aujourdhui = new Date();   
document.getElementById('dateDuJour').valueAsDate = aujourdhui;


</script>
