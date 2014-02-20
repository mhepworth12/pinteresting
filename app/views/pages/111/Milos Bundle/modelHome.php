<!DOCTYPE html>
<html>
    <head>
        <title>e-Models</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>    
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js"></script>
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript">
            var home = true;
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect : 'fade',
                    padding : 0
                });
                
            });
        </script>
        <script src="js/script.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
<section id="header">
    <div class="container headContainer">  
        <div class="navbar-xs">
            <div class="navbar-primary">
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                        <div class="navWrap">
							
							
							<!---   $$$$$$$$$$$$$$$$$$$$$$$$$$  BEGIN     Left Navigation   $$$$$$$$$$$$$$$$$$$$$$$$$$    -->
							
							
                            <ul class="nav navbar-nav navbar-left"> <!-- Category based -->
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify"></span></a>
								    <ul class="dropdown-menu">
										  <li><a href="#">eKarma</a></li>
										  <li><a href="#">eWebDesign</a></li>
										  <li><a href="#">eDJs</a></li>
										  <li><a href="#">ePhotos</a></li>
										  <li><a href="#">eVideos</a></li>
										  <li><a href="#">eWebDesign</a></li>
										  <li><a href="#">eActors</a></li>
										  <li><a href="#">eTalent</a></li>
										  <li><a href="#">eArtists</a></li>
										  <li><a href="#">ePoker</a></li>
								          <li class="divider"></li>
								          <li><a href="#">eModels</a></li>
								    </ul>
							    </li>
								
								<li><form class="navbar-form navbar-left" role="search"><!-- Search Function -->
                                    	<div class="form-group">
                                        	<input type="text" class="form-control hidden-sm .hidden-xs" placeholder="Search">
                                    	</div>
                                	</form>
								</li>
                            </ul>
							<ul class="nav navbar-nav navbar-center">	
								<a class="navbar-brand" href="#" style="margin-left:320px;"><img src="img/whitelogo.png" alt="E-models.net"/></a>
							</ul>	
							
							
							<!---   $$$$$$$$$$$$$$$$$$$$$$$$$$  BEGIN     Right Navigation   $$$$$$$$$$$$$$$$$$$$$$$$$$    -->
							
							
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span></a>
								   <ul class="dropdown-menu">
							      	  <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#takepic">
										  <span class="glyphicon glyphicon-camera"></span> Take Picture</li>
										  <!-- Modal -->
										  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
										        </div>
										        <div class="modal-body">
										          ...
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										          <button type="button" class="btn btn-primary">Save changes</button>
										        </div>
										      </div><!-- /.modal-content -->
										    </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
										  
							      	  <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#takevid">
										  <span class="glyphicon glyphicon-facetime-video"></span> Record Video</li>
										  
										  <!-- Modal -->
										  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
										        </div>
										        <div class="modal-body">
										          ...
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										          <button type="button" class="btn btn-primary">Save changes</button>
										        </div>
										      </div><!-- /.modal-content -->
										    </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
								      <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#music">
											  <span class="glyphicon glyphicon-facetime-video"></span> Jam Out</li>
											  <!-- Modal -->
											  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											      <div class="modal-content">
											        <div class="modal-header">
											          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
											        </div>
											        <div class="modal-body">
											          ...
											        </div>
											        <div class="modal-footer">
											          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											          <button type="button" class="btn btn-primary">Save changes</button>
											        </div>
											      </div><!-- /.modal-content -->
											    </div><!-- /.modal-dialog -->
											  </div><!-- /.modal -->
											  
								        </ul>
								      </li>
								   <li><a href="modelhome.php">Home</a></li>
                                   <li><a href="ModelProfile.php">Ryan</a></li>
							    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
								   <ul class="dropdown-menu">
										  <li><a href="#">Export Profile</a></li>
										  <li><a href="modelSocial.php">Social</a></li>
										  <li><a href="modelLocal.php">Local</a></li>
										  <li><a href="#">Contracts</a></li>
								          <li class="divider"></li>
								          <li><a href="modelAccountSettings.php">Account Settings</a></li>
								          <li class="divider"></li>
								          <li><a href="#">Sign Out</a></li>
								  </ul>
								   </li>  
								</ul> <!---End Nav-bar Right-->
							</ul> 
                        </div>
                    </div><!-- /.navbar-collapse -->
                </nav>

				<!---   $$$$$$$$$$$$$$$$$$$$$$$$$$  End   Navigation   $$$$$$$$$$$$$$$$$$$$$$$$$$    -->

            </div>
        </div>
    </div>  
</section><!--HEADER END-->

                 <!---   $$$$$$$$$$$$$$$$$$$$$$$$$$ Begin Main Content $$$$$$$$$$$$$$$$$$$$$$$$$$    -->
		        <section id="main" style="background:url(img/flatbackground.png) repeat right;">
		            <div class="container">                
		                <div class="row">
                    
		                    <!--SIDEBAR START-->
		                    <div class="col-sm-3 sidebar">
		                        <div class="postControl hidden-xs"><!--Day Week Month buttons-->
		                                <a href="#" class="dayControl controlButton controlButtonActive">Day</a>
		                                <a href="#" class="weekControl controlButton">Week</a>
		                                <a href="#" class="monthControl controlButton">Month</a>
		                        </div>
                    
		                        <div class="sidebarWidget"><!--SUGGESTED ARTICLES WIDGET-->
		                            <div class="widgetTitle">
		                                <h3>Suggested Articles</h3>
		                            </div>
		                            <div class="widgetBody">
                                
		                                <a href="#" class="sugPostLink"><div class="sugPostWrap">
		                                    <div class="sugPostImg"><img src="img/demo/s1.jpg" alt="Title"/></div>
		                                    <div class="sugPostInfo">
		                                        <p class="sugTitle">Article Title</p>
		                                        <p class="sugDesc">Lorem ipsum dolor</p>
		                                    </div>
		                                    <div class="clearfix"></div>
		                                </div></a>
                                
		                                <a href="#" class="sugPostLink"><div class="sugPostWrap">
		                                    <div class="sugPostImg"><img src="img/demo/s1.jpg" alt="Title"/></div>
		                                    <div class="sugPostInfo">
		                                        <p class="sugTitle">Article Title</p>
		                                        <p class="sugDesc">Lorem ipsum dolor</p>
		                                    </div>
		                                    <div class="clearfix"></div>
		                                </div></a>

		                                <a href="#" class="sugPostLink"><div class="sugPostWrap">
		                                    <div class="sugPostImg"><img src="img/demo/s1.jpg" alt="Title"/></div>
		                                    <div class="sugPostInfo">
		                                        <p class="sugTitle">Article Title</p>
		                                        <p class="sugDesc">Lorem ipsum dolor</p>
		                                    </div>
		                                    <div class="clearfix"></div>
		                                </div></a>
                                
		                                <a href="#" class="sugPostLink"><div class="sugPostWrap">
		                                    <div class="sugPostImg"><img src="img/demo/s1.jpg" alt="Title"/></div>
		                                    <div class="sugPostInfo">
		                                        <p class="sugTitle">Article Title</p>
		                                        <p class="sugDesc">Lorem ipsum dolor</p>
		                                    </div>
		                                    <div class="clearfix"></div>
		                                </div></a>
                                
		                                <a href="#" class="sugPostLink"><div class="sugPostWrap">
		                                    <div class="sugPostImg"><img src="img/demo/s1.jpg" alt="Title"/></div>
		                                    <div class="sugPostInfo">
		                                        <p class="sugTitle">Article Title</p>
		                                        <p class="sugDesc">Lorem ipsum dolor</p>
		                                    </div>
		                                    <div class="clearfix"></div>
		                                </div></a>                                
		                            </div>
		                        </div>
                        
		                        <div class="sidebarWidget "><!--STAT OF THE DAY ARTICLES WIDGET-->
		                            <div class="widgetTitle">
		                                <h3>Stat of the Day</h3>
		                            </div>
		                            <div class="widgetBody">
		                                <div class="statofdayWrap">
		                                    <img src="img/star.png" alt="Stat!"/><br/>
		                                    <span class="statLarge">1500</span><br/>
		                                    <span class="statSmall">Registered Models</span>
		                                </div>
		                            </div>
		                        </div>                        
		                    </div>
		                    <!--SIDEBAR END-->
                    
                    
		                    <div class="col-sm-3">
		                        <div class="innerSpacer" id="modelOfTheDay">
		                            <h2 class="ofTheDay">E-Model of the Day</h2>
                            
		                            <!--MODEL BOX START (image, votes, details etc)-->
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryMod" href="popup_profile.html">
		                                    <div class="modelImage">
		                                        <span class="modelVotes">+26k</span>
		                                        <div class="zoomOverlay"></div>
		                                        <img src="img/demo/d1.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                    </div>
		                                </a>
		                                <!--<a href="" class="modelProfileLink"><div class="modelInfo">
		                                    <p class="modelName">Mary Adams</p>
		                                    <p class="modelMeta">
		                                        <span class="modelLike modelMetaIconWrap"><img src="img/likemask.png" class="modelLikeImg"/><span class="metaSpan">26</span></span>
		                                        <span class="modelShare modelMetaIconWrap"><img src="img/sharemask.png" class="modelShareImg"/><span class="metaSpan">10</span></span>
		                                        <span class="modelFav modelMetaIconWrap"><img src="img/favmask.png" class="modelFavImg"/><span class="metaSpan">7</span></span>
		                                    </p>
		                                </div></a>-->
		                            </div>
		                            <!--MODEL BOX END-->
                            
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryMod" href="popup_profile.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="zoomOverlay"></div>
		                                    <img src="img/demo/d2.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
                            
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryMod" href="popup_profile.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="zoomOverlay"></div>
		                                    <img src="img/demo/d3.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
                            
		                        </div>
		                    </div>
		                    <div class="col-sm-3">
		                        <div class="innerSpacer" id="picOfTheDay">
		                            <h2 class="ofTheDay">Picture of the Day</h2>
                            
		                            <!--MODEL BOX START (image, votes, details etc)-->
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryPic" href="popup_pic.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="zoomOverlay"></div>
		                                    <img src="img/demo/d4.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
		                            <!--MODEL BOX END-->
                            
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryPic" href="popup_pic.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="zoomOverlay"></div>
		                                    <img src="img/demo/d5.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-3">
		                        <div class="innerSpacer" id="vidOfTheDay">
		                            <h2 class="ofTheDay">Video of the Day</h2>
		                            <!--MODEL BOX START (image, votes, details etc)-->
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryVid" href="popup_vid.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="playOverlay"></div>
		                                    <img src="img/demo/d6.jpg" class="img-responsiveEM" alt="Mary Adams">  
		                                </div></a>
		                            </div>
		                            <!--MODEL BOX END-->
                            
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryVid" href="popup_vid.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="playOverlay"></div>
		                                    <img src="img/demo/d7.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
		                            <div class="modelBoxWrap">
		                                <a class="fancybox fancybox.ajax" rel="galleryVid" href="popup_vid.html"><div class="modelImage">
		                                    <span class="modelVotes">+26k</span>
		                                    <div class="playOverlay"></div>
		                                    <img src="img/demo/d8.jpg" class="img-responsiveEM" alt="Mary Adams">
		                                </div></a>
		                            </div>
		                        </div>
		                    </div>                    
		                </div>
		            </div>
		        </section>
				<?php include 'templates/footer.php'; ?>
		
		        <script type="text/javascript" src="../js/sha512.js"></script>
		        <script type="text/javascript" src="../ASLibrary/js/asengine.js"></script>            
		        <script type="text/javascript" src="../ASLibrary/js/login.js"></script>  

		        <script type="text/javascript">
		            $(document).ready(function() {
		                $("#register, #register-modal").click(function () {
		                    $("#choose-type").show()
		                                    .css('opacity', '1')
		                                    .click(function (e) {
		                                        if (e.target.id != "choose-type-wrap-top"){
		                                            $("#choose-type").hide().css('opacity', '0');
		                                        }
		                                    });

		                    $('.teaserSignUpWrap').css({'margin-top' : $(window).height()/3 - $(".teaserSignUpWrap").height()/2 +'px'});
		                });

		                $("#btn-login").click(function () {

		                    var btn = $("#btn-login"),
		                        username = $("#teaserUsername").val(),
		                        password = $("#teaserPassword").val(),
		                        errors = $(".login-errors");


		                    if ( username == "" || password == "" ) {
		                        errors.text('Both fields are required!')
		                        return;
		                    }

		                    if ( ! asengine.validateEmail(username) ) {
		                        errors.text('Please enter valid email!');
		                        return;
		                    }


		                    asengine.loadingButton(btn, "Logging in...");

		                    //encrypt password before sending it through the network
		                    password = CryptoJS.SHA512(password).toString();

		                    $.ajax({
		                        url: "../ASEngine/ASAjax.php",
		                        type: "POST",
		                        data: {
		                            action  : "checkLogin",
		                            username: username,
		                            password: password,
		                            type    : 'manual'
		                        },
		                        success: function (result) {            
		                           asengine.removeLoadingButton(btn);

		                           var res = jQuery.parseJSON(result);
		                           if( res.status == "success" ) {

		                               localStorage["user_id"]=res.msg;
		                               window.location = "home.php";
		                           }
		                           else {      
		                                errors.text(res.msg);
		                           }

		                        }
		                    });

		                });


		                $("form.teaserSignUp").bind("keypress",function(e){
		                    var code = (e.keyCode ? e.keyCode : e.which);
                    
		                    if(code==13){
		                        $("#btn-login").trigger('click');
		                    }
		                 });
                
		            });
		        </script>
			</body>
		</html>