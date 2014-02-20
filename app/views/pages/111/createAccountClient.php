<?php 
include "ASEngine/AS.php"; 
if($login->isLoggedIn())
    header("Location: index.php");
$register->botProtection();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Advanced Security - PHP MySQL Register/Login System">
        <meta name="author" content="Milos Stojanovic">
        <title>Eclectic Models</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <?php if(BOOTSTRAP_VERSION == 2): ?>
        <link rel='stylesheet' href='css/bootstrap.min2.css' type='text/css' media='all' />
        <script type="text/javascript" src="js/bootstrap.min2.js"></script>
        <link rel='stylesheet' href='ASLibrary/css/style2.css' type='text/css' media='all' />
        <?php else: ?>
        <link rel='stylesheet' href='css/bootstrap3-glyphicons/bootstrap-glyphicons.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/bootstrap.min3.css' type='text/css' media='all' />
        <script type="text/javascript" src="js/bootstrap.min3.js"></script>
        <link rel='stylesheet' href='ASLibrary/css/style3.css' type='text/css' media='all' />
        <?php endif; ?>
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/slider.css" rel="stylesheet">
        <link href="css/spinner.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">

         <div class="modal" id="loginModal">
             <div class="modal-dialog" >
                 <div class="modal-content">
          <div class="modal-header">
            <h3><?php echo WEBSITE_NAME; ?></h3>
          </div>
          <div class="modal-body">
            <div class="well">
                <div>
                    <div class="apply-div">
                        <a href="signIn.php">Sign In</a>
                    </div>
                    <div class="logo-div">
                        <img id="medium-sized-logo" src="ASLibrary/img/logo.png"></img>
                    </div>
                </div>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="login">
                    <form class="form-horizontal" id="register-form">
                        <fieldset>
                          <div id="legend">
                            <legend class="mini-header">Create Account</legend>
                          </div>
                          <!-- First step in creating-->
                          <div id="register-1" class="register-step-div">
                            <div class="control-group form-group">
                                <!-- Username -->
                                <label class="control-label col-lg-4"  for="register-username">E-mail <span class="pink">*</span></label>
                                <div class="controls col-lg-6">
                                <input type="text" id="register-username" name="username" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>                                                  
                            </div>                             
                            <div class="control-group form-group">
                                <!-- Password-->
                                <label class="control-label col-lg-4" for="register-password">Password <span class="pink">*</span></label>
                                <div class="controls col-lg-6">
                                <input type="password" id="register-password" name="password" placeholder="" class="input-xlarge form-control invisible-input">
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>

                            </div> 
                            <div class="control-group form-group">
                                <!--Confirm Password-->
                                <label class="control-label col-lg-4" for="register-confirm-password">Confirm Password <span class="pink">*</span></label>
                                <div class="controls col-lg-6">
                                <input type="password" id="register-confirm-password" name="confirm-password" placeholder="" class="input-xlarge form-control invisible-input">
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>

                            </div> 
                            <div class="control-group form-group">
                                <!--Company-->
                                <label class="control-label col-lg-4" for="register-company">Company <span class="pink">*</span></label>
                                <div class="controls col-lg-6">
                                <input type="text" id="register-company" name="company" placeholder="" class="input-xlarge form-control invisible-input">
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>
                            </div> 
                          </div> 
                         </fieldset>
                        </form>     
                          <!--Progress bar and buttons-->
                          <div id="register-bottom-menu" style="text-align: center">
                            <!-- Submit application button -->
                            <button id="btn-submit-application"  class="btn btn-grey">Submit my application</button>
                          </div>
                          <br/>
                          <!-- Div for messages -->
                          <div style="text-align: center">
                              <span id="register-message" class="message" style="display:none"></span>
                          </div>

                  
                </div>                                 
            </div>
          </div>
        </div>           
        </div>           
             </div>     
                <div class="login-footer">
                <form class="form-inline" role="form">  
                    <img id="small-sized-logo" src="ASLibrary/img/logo.png"></img>
                    <ol class="breadcrumb login-footer-list">                        
                        <li><a href="forgotPassword.php">Forgot Password?</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">E-Models 2013 &copy;</a></li>
                    </ol>
                </form>  
                     </div> 
            </div>
             </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>        
            <script type="text/javascript" src="js/sha512.js"></script>
            <script type="text/javascript" src="ASLibrary/js/asengine.js"></script>
            <script type="text/javascript" src="ASLibrary/js/registerClient.js"></script>                          
            <script type="text/javascript" src="js/bootstrap-slider.js"></script>
            <script type="text/javascript" src="js/fly.js"></script>
            <script type="text/javascript" src="js/spinner.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                   $("#loginModal").modal({
                       keyboard: false,
                       backdrop: "static"
                   }); 
                   $('.slider').slider();
                   /*$( "#register-spinner" ).spinner({
                        min: 4,
                        max: 6,
                        step: 1,
                        numberFormat: "C"
                   });*/
                });
            </script>
    </body>
</html>