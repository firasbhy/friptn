<?php

session_start(); 
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:26:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
  	<title>Frip- Modifier annonce</title>
</head>
<body class="style-10">

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
                    <?php include('includes/header_frip_ann.php')?>

            <div class="content-push">
  
                            <div class="col-lg-12">
                                <div class="card">




                                    <?php

                                        if (isset($_GET['modifier'])) {
                                            if($_GET['modifier']="oui"){
                                    
                                     ?>

                                 <div class="alert alert-success" role="alert">
                                  <strong>Annonceur</strong> modifier avec succes.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                    <?php }
                                    }
                                     ?>
                
                <div class="information-blocks">
                   
                    <div class="row">
                        <div class="col-md-8 information-entry">
                            <h3 class="block-title main-heading">vos données</h3>
                            <form action="Controller/ModifierAnnonceur.php?id=<?php echo $_SESSION['id'];?>" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Nom <span>*</span></label>
                                        <input class="simple-field" type="text" name="nom" required value="<?php echo $_SESSION['nom'] ;?>" />
                                        <label>login <span>*</span></label>
                                        <input class="simple-field" type="text" name="login"  required value="<?php echo $_SESSION['login'] ;?>" />
                                        <label> Email <span>*</span></label>
                                        <input class="simple-field" type="email" name="email" required value="<?php echo $_SESSION['email'] ;?> " />
                                         <label> Mot de passe <span>*</span></label>
                                        <input class="simple-field" type="text" name="password" required value="<?php echo $_SESSION['password'] ;?> " />
                                         <label> numéro de téléphone <span>*</span></label>
                                        <input class="simple-field" type="text" name="num_tel" required value="<?php echo $_SESSION['num_tel'] ;?> " />
                                      <div class="button style-10">Modifier<input type="submit" value="Modifier"></div>
                                    
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
                
                           

                <!-- FOOTER -->
                        <?php include('includes/footer_frip.php')?>
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

<!-- Mirrored from 8theme.com/demo/html/mango/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:26:24 GMT -->
</html>
