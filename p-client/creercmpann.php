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
    <link href="css/pwd.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
            .class_firas{
                background: gainsboro;
                /* position: absolute; */
                /* display: none; */
                /*position: absolute;
                right: 13px;
                top: 1px;*/
                padding: 12px;
            }
        </style>
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/img/favicon.ico" />
    <title>Créer compte annonceur | Fripe.Tn</title>
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
            <?php include('includes/header_frip.php')?>

            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Login Form</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="ousat">
                        <div class="col-sm-6 information-entry">
                            <div class="login-box" ng-app="show_hide_password" ng-controller="show_hide_password_controller">
                                <div class="article-container style-1">
                                    <h3>Créer un compte</h3>
                                    <p></p>
                                </div>
                                <form method="POST" action="Controller/Annonceur_ajout.php">
                                    <label>Nom</label>
                                    <input class="simple-field" name="nom" type="text" placeholder="Entrer Nom" required="required" />

                                  
                                   
                                    <label>Login</label>
                                    <input class="simple-field" name="login" type="text" name="login" placeholder=" Entrer login" required="required" />
                                    
                                    <label>Mot de pass</label>
                                    <div class="input-group" ng-app="show_hide_password" ng-controller="show_hide_password_controller">
                                    <input class="simple-field" type="{{inputType}}" name="password" required="required"  ng-model="password_field" placeholder="Entrer Password" />
       <span class="input-group-addon">
        <span class="{{showHideClass}}" ng-click="showPassword()" style="cursor:pointer"></span>

       </span>
   </div>
                                    
                                    <label>E-mail</label>
                                    <input class="simple-field" type="email" name="email" placeholder="Entrer Email Address" required="required" />
                                    
                                    <label>Numéro de telephone</label>
                                    <input class="simple-field" type="Numéro" name="num_tel" placeholder="Entrer Numéro de telephone" maxlength="8" required="required" />
                                    
                                    <div class="button style-10">Créer compte<input type="submit" style=" float: right;" /></div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
              
                <!-- FOOTER -->
                <?php include('includes/footer_frip.php')?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="search-box popup">
        <form>
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit" />
            </div>
            <div class="search-drop-down">
                <div class="title"><span>All categories</span><i class="fa fa-angle-down"></i></div>
                <div class="list">
                    <div class="overflow">
                        <div class="category-entry">Category 1</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 4</div>
                        <div class="category-entry">Category 5</div>
                        <div class="category-entry">Lorem</div>
                        <div class="category-entry">Ipsum</div>
                        <div class="category-entry">Dollor</div>
                        <div class="category-entry">Sit Amet</div>
                    </div>
                </div>
            </div>
            <div class="search-field">
                <input type="text" value="" placeholder="Search for product" />
            </div>
        </form>
    </div>

    <div class="cart-box popup">
        <div class="popup-container">
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1_.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="summary">
                <div class="subtotal">Subtotal: $990,00</div>
                <div class="grandtotal">Grand Total <span>$1029,79</span></div>
            </div>
            <div class="cart-buttons">
                <div class="column">
                    <a class="button style-3">view cart</a>
                    <div class="clear"></div>
                </div>
                <div class="column">
                    <a class="button style-4">checkout</a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".clic2").hide();

            $(".clic1").click(function() {

                $(".clic1").fadeOut('slow');
                $(".clic2").fadeIn('slow');


            });
            $(".clic2").click(function() {

                $(".clic2").fadeOut('slow');
                $(".clic1").fadeIn('slow');


            });
        });

        </script>

</body>


</html>
<script>
 
 var app = angular.module('show_hide_password', []);

 app.controller('show_hide_password_controller', function($scope){

  $scope.inputType = 'password';
  $scope.showHideClass = 'fa fa-eye-slash class_firas';

  $scope.showPassword = function(){
   if($scope.password_field != null)
   {
    if($scope.inputType == 'password')
    {
     $scope.inputType = 'text';
     $scope.showHideClass = 'fa fa-eye  class_firas';
    }
    else
    {
     $scope.inputType = 'password';
     $scope.showHideClass = 'fa fa-eye-slash class_firas';
    }
   }
  };

 });

</script>

