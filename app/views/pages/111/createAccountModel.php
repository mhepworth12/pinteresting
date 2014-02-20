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
        <link href="css/dropzone.css" rel="stylesheet">
        <link href="css/mobiscroll.custom-2.6.2.min.css" rel="stylesheet" type="text/css">
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
                    <form class="form-horizontal" action="signIn.php" method="post" enctype="multipart/form-data">
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
                            <input type="password" id="register-password" placeholder="" class="input-xlarge form-control invisible-input">
                            <input type="hidden" id="register-password-h" name="password" placeholder="" class="input-xlarge form-control invisible-input">
                            <!-- Draws a line-->
                            <div class="form-separator"></div>
                            </div>

                        </div> 
                        <div class="control-group form-group">
                            <!--Confirm Password-->
                            <label class="control-label col-lg-4" for="register-confirm-password">Confirm Password <span class="pink">*</span></label>
                            <div class="controls col-lg-6">
                            <input type="password" id="register-confirm-password" placeholder="" class="input-xlarge form-control invisible-input">
                            <input type="hidden" id="register-confirm-password-h" name="confirm-password" placeholder="" class="input-xlarge form-control invisible-input">
                            <!-- Draws a line-->
                            <div class="form-separator"></div>
                            </div>

                        </div> 
                      </div>     
                      <!-- Second step in creating-->
                      <div id="register-2" style="display: none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- First name -->
                                <label class="control-label"  for="register-first-name">First name <span class="pink">*</span></label>
                                <input type="text" id="register-first-name" name="first-name" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Last name-->                           
                                <label class="control-label"  for="register-last-name">Last name <span class="pink">*</span></label>
                                <input type="text" id="register-last-name" name="last-name" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                          </div>
                          <div class="row reg-row">
                              <div class="col-lg-6" style='padding-top: 10px'> 
                                <!-- Birthday -->
                                <div data-role="fieldcontain" class="demos fieldcontain" id="demo_birthday">
                                <label for="test_birthday"class="control-label" >Birthday<span class="pink">*</span></label>                                
                                <input type="text" id="test_birthday" name="birthday">
                                </div>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Phone-->                           
                                <label class="control-label"  for="register-phone">Phone <span class="pink">*</span></label>
                                <input type="text" id="register-phone" name="phone" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>            
                          </div>
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Address-->                           
                                <label class="control-label"  for="register-address">Address <span class="pink">*</span></label>
                                <input type="text" id="register-address" name="address" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                                    
                              <div class="col-lg-6"> 
                                <!-- City -->
                                <label class="control-label"  for="register-city">City <span class="pink">*</span></label>
                                <input type="text" id="register-city" name="city" placeholder="" class="input-xlarge form-control invisible-input"> 
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                    
                          </div>
                          <div class="row reg-row">
                            <div class="col-lg-6"  style='padding-top: 10px'> 
                                <!--State-->
                                <div data-role="fieldcontain" class="demos fieldcontain" id="demo_state">
                                <label for="register-state"class="control-label" >State<span class="pink">*</span></label>                                
                                <ul id="test_state">
                                    <li data-val="Alabama">Alabama</li>
                                    <li data-val="Alaska">Alaska</li>
                                    <li data-val="Arizona">Arizona</li>
                                    <li data-val="Arkansas">Arkansas</li>
                                    <li data-val="California">California</li>
                                    <li data-val="Colorado">Colorado</li>
                                    <li data-val="Connecticut">Connecticut</li>
                                    <li data-val="Delaware">Delaware</li>
                                    <li data-val="Florida">Florida</li>
                                    <li data-val="Georgia">Georgia</li>
                                    <li data-val="Hawaii">Hawaii</li>
                                    <li data-val="Idaho">Idaho</li>
                                    <li data-val="Illinois">Illinois</li>
                                    <li data-val="Indiana">Indiana</li>
                                    <li data-val="Iowa">Iowa</li>
                                    <li data-val="Kansas">Kansas</li>
                                    <li data-val="Kentucky">Kentucky</li>
                                    <li data-val="Louisiana">Louisiana</li>
                                    <li data-val="Maine">Maine</li>
                                    <li data-val="Maryland">Maryland</li>
                                    <li data-val="Massachusetts">Massachusetts</li>
                                    <li data-val="Michigan">Michigan</li>
                                    <li data-val="Minnesota">Minnesota</li>
                                    <li data-val="Mississippi">Mississippi</li>
                                    <li data-val="Missouri">Missouri</li>
                                    <li data-val="Montana">Montana</li>
                                    <li data-val="Nebraska">Nebraska</li>
                                    <li data-val="Nevada">Nevada</li>
                                    <li data-val="New Hampshire">New Hampshire</li>
                                    <li data-val="New Jersey">New Jersey</li>
                                    <li data-val="New Mexico">New Mexico</li>
                                    <li data-val="New York">New York</li>
                                    <li data-val="North Carolina">North Carolina</li>
                                    <li data-val="North Dakota">North Dakota</li>
                                    <li data-val="Ohio">Ohio</li>
                                    <li data-val="Oklahoma">Oklahoma</li>
                                    <li data-val="Oregon">Oregon</li>
                                    <li data-val="Pennsylvania">Pennsylvania</li>
                                    <li data-val="Rhode Island">Rhode Island</li>
                                    <li data-val="South Carolina">South Carolina</li>
                                    <li data-val="South Dakota">South Dakota</li>
                                    <li data-val="Tennessee">Tennessee</li>
                                    <li data-val="Texas">Texas</li>
                                    <li data-val="Utah">Utah</li>
                                    <li data-val="Vermont">Vermont</li>
                                    <li data-val="Virginia">Virginia</li>
                                    <li data-val="Washington">Washington</li>
                                    <li data-val="West Virginia">West Virginia</li>
                                    <li data-val="Wisconsin">Wisconsin</li>
                                    <li data-val="Wyoming">Wyoming</li>                                                                                                                                                    
                               </ul>
                                </div>
                                    <!-- Draws a line-->
                                    <div class="form-separator"></div>
                                </div>    
                                <div class="col-lg-6"> 
                                    <!-- Zip-->                           
                                    <label class="control-label"  for="register-zip">Zip <span class="pink">*</span></label>
                                    <input type="text" id="register-zip" name="zip" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <!-- Draws a line-->
                                    <div class="form-separator"></div>
                                </div>
                          </div>                          
                      </div>  
                      <!-- Third step in creating-->
                      <div id="register-3" style="display:none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <div data-role="fieldcontain" class="demos fieldcontain" id="demo_height">
                                <label for="register-height"class="control-label" >Height<span class="pink">*</span></label>                                
                                <ul id="test_height">
                                    <li data-val="4'">4
                                        <ul>
                                            <li data-val="0">0</li>
                                            <li data-val="1">1</li>
                                            <li data-val="2">2</li>
                                            <li data-val="3">3</li>
                                            <li data-val="4">4</li>
                                            <li data-val="5">5</li>
                                            <li data-val="6">6</li>
                                            <li data-val="7">7</li>
                                            <li data-val="8">8</li>
                                            <li data-val="9">9</li>
                                            <li data-val="10">10</li>
                                            <li data-val="11">11</li>
                                        </ul></li>
                                        <li data-val="5'">5
                                        <ul>
                                            <li data-val="0">0</li>
                                            <li data-val="1">1</li>
                                            <li data-val="2">2</li>
                                            <li data-val="3">3</li>
                                            <li data-val="4">4</li>
                                            <li data-val="5">5</li>
                                            <li data-val="6">6</li>
                                            <li data-val="7">7</li>
                                            <li data-val="8">8</li>
                                            <li data-val="9">9</li>
                                            <li data-val="10">10</li>
                                            <li data-val="11">11</li>
                                        </ul></li>
                                        <li data-val="6'">6
                                        <ul>
                                            <li data-val="0">0</li>
                                            <li data-val="1">1</li>
                                            <li data-val="2">2</li>
                                            <li data-val="3">3</li>
                                            <li data-val="4">4</li>
                                            <li data-val="5">5</li>
                                            <li data-val="6">6</li>
                                            <li data-val="7">7</li>
                                            <li data-val="8">8</li>
                                            <li data-val="9">9</li>
                                            <li data-val="10">10</li>
                                            <li data-val="11">11</li>
                                        </ul></li>
                                </ul>
                                </div>
                                  <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>   
                                 <!-- Bust -->
                                 <div class="col-lg-6"> 
                                <div data-role="fieldcontain" class="demos fieldcontain" id="demo_bust">
                                <label for="register-bust"class="control-label" >Bust<span class="pink">*</span></label>                                
                                <ul id="test_bust">
                                    <li data-val="30">30
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>
                                    <li data-val="31">31
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="32">32
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="33">33
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="34">34
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="35">35
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="36">36
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="37">37
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="38">38
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="39">39
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="40">40
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="41">41
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="42">42
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="43">43
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="44">44
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>   
                                    <li data-val="45">45
                                        <ul>
                                            <li data-val="B">B</li>
                                            <li data-val="C">C</li>
                                            <li data-val="D">D</li>
                                            <li data-val="DD">DD</li>   
                                        </ul></li>                                           
                                </ul>
                                </div>
                                  <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>                                           
                              </div>                                                        
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Weight (lbs)-->                           
                                <label class="control-label"  for="register-weight">Weight (lbs) <span class="pink">*</span></label>                                
                                <select id="register-weight" name="weight" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="90">90</option>
                                    <option value="95">95</option>
                                    <option value="100">100</option>
                                    <option value="105">105</option>
                                    <option value="110">110</option>
                                    <option value="115">115</option>
                                    <option value="120">120</option>
                                    <option value="125">125</option>
                                    <option value="130">130</option>
                                    <option value="135">135</option>
                                    <option value="140">140</option>
                                    <option value="145">145</option>
                                    <option value="150">150</option>
                                    <option value="155">155</option>
                                    <option value="160+">160+</option>
                                </select>                                
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Shoe -->
                                <label class="control-label"  for="register-shoe">Shoe size <span class="pink">*</span></label>
                                <select id="register-shoe" name="shoe" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="5">5</option>
                                    <option value="5.5">5.5</option>
                                    <option value="6">6</option>
                                    <option value="6.5">6.5</option>
                                    <option value="7">7</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8">8</option>
                                    <option value="8.5">8.5</option>
                                    <option value="9">9</option>
                                    <option value="9.5">9.5</option>
                                    <option value="10">10</option>
                                    <option value="10.5">10.5</option>
                                    <option value="11">11</option>                                    
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                           
                          </div>
                          <div class="row reg-row">
                            <div class="col-lg-6"> 
                                <!-- Dress-->                           
                                <label class="control-label"  for="register-dress">Dress size <span class="pink">*</span></label>
                                <select id="register-dress" name="dress" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="00">00</option>
                                    <option value="0">0</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                    <option value="20">20</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                              
                              <div class="col-lg-6"> 
                                <!-- Shirt-->                           
                                <label class="control-label"  for="register-shirt">Shirt size <span class="pink">*</span></label>                                
                                <select id="register-shirt" name="shirt" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>                                
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                              
                          </div>
                          <div class="row reg-row">
                              <div class="col-lg-6" style='padding-top: 10px'>                                  
                                <!-- Hair -->
                                <div data-role="fieldcontain" class="demos fieldcontain" id="demo_hair">
                                <label for="register-hair"class="control-label" >Hair<span class="pink">*</span></label><br/>
                                
                                <ul id="test_hair">
                                    <li data-val="Short">Short
                                        <ul>
                                            <li data-val="Black">Black</li>
                                            <li data-val="Brown">Brown</li>
                                            <li data-val="Blonde">Blonde</li>
                                            <li data-val="Red">Red</li>
                                        </ul></li>
                                        <li data-val="Medium">Medium
                                        <ul>
                                            <li data-val="Black">Black</li>
                                            <li data-val="Brown">Brown</li>
                                            <li data-val="Blonde">Blonde</li>
                                            <li data-val="Red">Red</li>
                                        </ul></li>
                                        <li data-val="Long">Long
                                        <ul>
                                            <li data-val="Black">Black</li>
                                            <li data-val="Brown">Brown</li>
                                            <li data-val="Blonde">Blonde</li>
                                            <li data-val="Red">Red</li>
                                        </ul></li>
                                        
                                </ul>
                                </div>
                                
                                  <!-- Draws a line-->
                                <div class="form-separator"></div>
                                </div>
                              <div class="col-lg-6"> 
                                <!-- Ethnicity-->                           
                                <label class="control-label"  for="register-ethnicity">Ethnicity <span class="pink">*</span></label>
                                <select id="register-ethnicity" name="ethnicity" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>                                    
                                    <option value="Hispanic">Hispanic</option>
                                    <option value="Native American">Native American</option>
                                    <option value="Asian/Pacific Islander/Indian subcontinent">Asian/Pacific Islander/Indian subcontinent</option>
                                </select>                                
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>                              
                          </div>                          
                      </div> 
                      <!-- Fourth step in creating-->
                      <div id="register-4" style="display: none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Hour rate -->
                                <label class="control-label"  for="register-hour-rate">Hourly rate <span class="pink">*</span></label>
                                <select id="register-hour-rate" name="hour-rate" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    <option value="60">60</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                    <option value="125">125</option>
                                    <option value="150+">150+</option>
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Day rate -->
                                <label class="control-label"  for="register-day-rate">Day rate <span class="pink">*</span></label>
                                <select id="register-day-rate" name="day-rate" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="80">80</option>
                                    <option value="100">100</option>
                                    <option value="125">125</option>
                                    <option value="150">150</option>
                                    <option value="175">175</option>
                                    <option value="200">200</option>
                                    <option value="225">225</option>
                                    <option value="250">250</option>
                                    <option value="275">275</option>
                                    <option value="300">300</option>
                                    <option value="325">325</option>
                                    <option value="350">350</option>
                                    <option value="375">375</option>
                                    <option value="400">400</option>
                                    <option value="450">450</option>
                                    <option value="500+">500+</option>                                    
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                          </div>  
                          <!-- Form for photo upload -->
                          <div class="row reg-row">
                              <div class="col-lg-12">
                                  <input type="hidden" id="photos" name="photos">
                                  <label class="control-label" for="dropzone">Photos<span class="pink">*</span></label>
                                    <!--form for resume upload -->
                                    <div class="dropzone-container">
                                        <div class="dropzone" id="dropzone-photos">   

                                        </div>    
                                    </div>  
                                    <!-- Draws a line-->
                                    <div class="form-separator"></div>
                              </div>
                          </div>                             
                      </div> 
                       <!-- Fifth step in creating-->
                      <div id="register-5" style="display: none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-12">                                 
                                    <input type="hidden" id="videos" name="videos">
                                    
                                    <label class="control-label" for="dropzone">Video</label>
                                    <!--form for video upload -->
                                    <div class="dropzone-container">
                                        <div class="dropzone" id="dropzone-video">   

                                        </div>    
                                    </div>    
                                </div>                                                                      
                            </div> 
                          <div class="row reg-row">
                              <div class="col-lg-12">
                                  <input type="hidden" id="resumes" name="resumes">
                                   <label class="control-label" for="dropzone">Resume</label>
                                    <!--form for resume upload -->
                                    <div class="dropzone-container">
                                        <div class="dropzone" id="dropzone-resume">   

                                        </div>    
                                    </div>                                  
                              </div>
                          </div>  
                          <div class="row reg-row">
                             
                          </div>   
                          <div class="row reg-row">
                        </div>  
                      </div> 
                      <!-- Sixth step in creating-->
                      <div id="register-6" style="display:none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Favorite job -->
                                <label class="control-label"  for="register-favorite-job">Favorite job</label>
                                <select id="register-favorite-job" name="favorite-job" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="Trade show">Trade show</option>
                                    <option value="Atmosphere">Atmosphere</option>
                                    <option value="Print model">Print model</option>
                                    <option value="Promotional model">Promotional model</option>    
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Exp1-->                           
                                <label class="control-label"  for="register-exp1">Exp.</label>
                                <div id="register-exp1" class="slider slider-horizontal" data-slider-min="0" data-slider-max="100" data-slider-value="50" ></div>
                                <input id="register-exp1-hidden" type="hidden" name="exp1"/>
                              </div>
                          </div>
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Second job -->
                                <label class="control-label"  for="register-second-job">Second best</label>
                                <select id="register-second-job" name="second-job" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="Trade show">Trade show</option>
                                    <option value="Atmosphere">Atmosphere</option>
                                    <option value="Print model">Print model</option>
                                    <option value="Promotional model">Promotional model</option>    
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Exp2-->                           
                                <label class="control-label"  for="register-exp2">Exp.</label>
                                <div id="register-exp2" class="slider slider-horizontal" data-slider-min="0" data-slider-max="100" data-slider-value="50"></div>
                                <input id="register-exp2-hidden" type="hidden" name="exp2"/>
                              </div>
                          </div>
                          <div class="row reg-row">
                              <div class="col-lg-6"> 
                                <!-- Third job -->
                                <label class="control-label"  for="register-third-job">Third Fav.</label>
                                <select id="register-third-job" name="third-job" placeholder="" class="input-xlarge form-control invisible-input"> 
                                    <option value=""></option>
                                    <option value="Trade show">Trade show</option>
                                    <option value="Atmosphere">Atmosphere</option>
                                    <option value="Print model">Print model</option>
                                    <option value="Promotional model">Promotional model</option>    
                                </select>
                                <!-- Draws a line-->
                                <div class="form-separator"></div>
                              </div>
                              <div class="col-lg-6"> 
                                <!-- Exp3-->                           
                                <label class="control-label"  for="register-exp3">Exp.</label>  
                                <div id="register-exp3" class="slider slider-horizontal" data-slider-min="0" data-slider-max="100" data-slider-value="50"></div>
                                <input id="register-exp3-hidden" type="hidden" name="exp3"/>
                              </div>
                          </div>
                        </div>
                        <!-- Seventh step in creating-->
                        <div id="register-7" style="display:none" class="register-step-div">
                          <div class="row reg-row">
                              <div class="col-lg-12">
                                  <span style="font-size:18px"> Cities You Can Work</span><br/>
                                  <span style="font-size:14px">*Travel Costs Not Covered*</span><br/>
                              </div>
                          </div>
                            <div class="row reg-row">                                
                                <div class="col-lg-6 register-cities-div" id="register-all-cities" >
                                    <label class="control-label"  for="register-city-list">City list</label>
                                    <ul class="list-group" id="register-city-list">
                                        <li class="list-group-item">New York</li>
                                        <li class="list-group-item">Los Angeles</li>
                                        <li class="list-group-item">Chicago</li>
                                        <li class="list-group-item">Houston</li>
                                        <li class="list-group-item">Philadelphia</li>
                                        <li class="list-group-item">Phoenix</li>
                                        <li class="list-group-item">San Antonio</li>
                                        <li class="list-group-item">San Diego</li>
                                        <li class="list-group-item">Dallas</li>
                                        <li class="list-group-item">San Jose</li>
                                        <li class="list-group-item">Austin</li>
                                        <li class="list-group-item">Jacksonville</li>
                                        <li class="list-group-item">Indianapolis</li>
                                        <li class="list-group-item">San Francisco</li>
                                        <li class="list-group-item">Columbus</li>
                                        <li class="list-group-item">Fort Worth</li>
                                        <li class="list-group-item">Charlotte</li>
                                        <li class="list-group-item">Detroit</li>
                                        <li class="list-group-item">El Paso</li>
                                        <li class="list-group-item">Memphis</li>
                                        <li class="list-group-item">Boston</li>
                                        <li class="list-group-item">Seattle</li>
                                        <li class="list-group-item">Denver</li>
                                        <li class="list-group-item">Washington, DC</li>
                                        <li class="list-group-item">Nashville-Davidson</li>
                                        <li class="list-group-item">Baltimore</li>
                                        <li class="list-group-item">Louisville-Jefferson County</li>
                                        <li class="list-group-item">Portland</li>
                                        <li class="list-group-item">Oklahoma City</li>
                                        <li class="list-group-item">Milwaukee</li>
                                        <li class="list-group-item">Las Vegas</li>
                                        <li class="list-group-item">Albuquerque</li>
                                        <li class="list-group-item">Tucson</li>
                                        <li class="list-group-item">Fresno</li>
                                        <li class="list-group-item">Sacramento</li>
                                        <li class="list-group-item">Long Beach</li>
                                        <li class="list-group-item">Kansas City</li>
                                        <li class="list-group-item">Mesa</li>
                                        <li class="list-group-item">Virginia Beach</li>
                                        <li class="list-group-item">Atlanta</li>
                                        <li class="list-group-item">Colorado Springs</li>
                                        <li class="list-group-item">Raleigh</li>
                                        <li class="list-group-item">Omaha</li>
                                        <li class="list-group-item">Miami</li>
                                        <li class="list-group-item">Oakland</li>
                                        <li class="list-group-item">Tulsa</li>
                                        <li class="list-group-item">Minneapolis</li>
                                        <li class="list-group-item">Cleveland</li>
                                        <li class="list-group-item">Wichita</li>
                                        <li class="list-group-item">Arlington</li>
                                    </ul>
                                </div>                                
                                <div class="col-lg-6 register-cities-div" id="register-chosen-cities">
                                    <label class="control-label"  for="register-chosen-cities">Chosen cities</label>
                                    <ul class="list-group">
                                        
                                    </ul>
                                    <input id="register-cities-hidden" type="hidden" name="cities"/>
                                </div>
                            </div>
                            <div class="row reg-row">
                                <div class="col-lg-12" style="text-align: center">
                                    </br><span class="pink"> You can select up to maximum of 3 cities</span><br/> 
                                </div>
                            </div>
                        </div>                      
                      <!-- Eight step in creating-->
                      <div id="register-8" style="display:none" class="register-step-div">
                          <ul class="nav nav-tabs" id="nav-contracts">
                            <li class="active"><a id="contract-0" href="#">Media release</a></li>
                            <li><a id="contract-1" href="#">Agency Non-Compete</a></li>
                            <li><a id="contract-2" href="#">Privacy Policy</a></li>
                          </ul>
                          <div id="contract-text">
                              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                          </div>
                          <div id="key-points">
                              <span style="font-size: 16px; font-weight: bold">Key points:</span></br>
                              <span class="message">-Media usage approval</span> 
                              <span class="message">-I won't share Intellectual property</span></br>
                              <span class="message">-I won't book direct with clients introduced through EM</span></br>
                          </div>
                          <div style="text-align: center; margin-bottom: 10px">
                            <input type="checkbox" id="checkbox-i-agree"><span style="font-size: 18px;">  I have read and agree to above terms</span>
                          </div>
                      </div>   
                      <!--Progress bar and buttons-->
                      <div id="register-bottom-menu">
                        <!-- Button previous -->
                        <!-- add new type of button in style3.css-->
                        <button type="button" id="register-btn-prev" class="btn btn-grey btn-arrow">
                            <span class="glyphicon glyphicon-arrow-left"></span>
                        </button>
                        <!-- Submit application button -->
                        <button id="submit-application"   style="display:none" class="btn btn-grey">Submit my application</button>
                        <div  id="register-progress-bar"  class="progress progress-striped active">
                            <div  class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;  background-color: #AE2959;">
                            </div>                            
                        </div>
                        <!-- Button next -->
                        <!-- add new type of button in style3.css-->
                        <button type="button" id="register-btn-next" class="btn btn-grey btn-arrow">
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                      </div>
                      <br/>
                      <!-- Div for messages -->
                      <div style="text-align: center">
                          <span id="register-message" class="message" style="display:none"></span>
                      </div>
                    </fieldset>
                  </form>                       
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
            <script type="text/javascript" src="ASLibrary/js/registerModel.js"></script>                          
            <script type="text/javascript" src="js/bootstrap-slider.js"></script>
            <script type="text/javascript" src="js/fly.js"></script>
            <script type="text/javascript" src="js/spinner.js"></script>
            <script type="text/javascript" src="js/hashchange.js"></script>
            <script type="text/javascript" src="js/list-order.js"></script>
            <script src="js/mobiscroll.custom-2.6.2.min.js" type="text/javascript"></script>
            <script src="js/formatter.js" type="text/javascript"></script>  
            <script src="js/dropzone.js"></script
    </body>
</html>