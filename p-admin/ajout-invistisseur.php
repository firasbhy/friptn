<?php
 include('includes/connect_db.php');
 session_start();
  $id_a = $_SESSION['id_a']; 
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 00:36:45 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Adminstrateur | Frip.tn </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
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
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

          <?php  include('includes/header.php')?>


            <!-- ========== Left Sidebar Start ========== -->
            <?php  include('includes/nav.php')?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Gestion Invistisseur</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateur</a></li>
                                            <li class="breadcrumb-item active">Ajout invistisseur</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Ajout invistisseur</h4>
                            <form action="Controller/AjoutInvistisseur.php" method="post">
        
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Nom" id="example-text-input" name="nom">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Prénom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Prénom" id="example-text-input" name="prénom">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-month-input" class="col-md-2 col-form-label">Login</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="Login" placeholder="Login" id="example-month-input" name="login">
                                            </div>
                                        </div>
                                        
                                      


                                          <div class="form-group row">
                                            <label for="example-month-input" class="col-md-2 col-form-label">Tel</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="Tel" placeholder="Tel" id="example-tel-input" name="tel">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Email" id="example-email-input" name="email">
                                            </div>
                                        </div>
                                     



                                      <div class="form-group row"  ng-app="show_hide_password" ng-controller="show_hide_password_controller">
                                                <label  class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10" id="">
                                                    <div class="input-group" >
                                                <input type="{{inputType}}" name="password" class="form-control input-lg" ng-model="password_field" placeholder="Enter Password" />
       <span class="input-group-addon">
        <span class="{{showHideClass}}" ng-click="showPassword()" style="cursor:pointer"></span>
       </span>
       </div>
   </div>
</div>

                            
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" style=" float: right;">Ajouter</button>
                                       
                           </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               <?php  include('includes/footer.php')?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 00:36:45 GMT -->
</html>
<script>
 
 var app = angular.module('show_hide_password', []);

 app.controller('show_hide_password_controller', function($scope){

  $scope.inputType = 'password';
  $scope.showHideClass = 'bx bx-show class_firas';

  $scope.showPassword = function(){
   if($scope.password_field != null)
   {
    if($scope.inputType == 'password')
    {
     $scope.inputType = 'text';
     $scope.showHideClass = 'bx bx-hide class_firas';
    }
    else
    {
     $scope.inputType = 'password';
     $scope.showHideClass = 'bx bx-show class_firas';
    }
   }
  };

 });

</script>

