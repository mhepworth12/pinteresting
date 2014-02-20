<!DOCTYPE html>
<html>
    <head>
        <title>Model Music</title>
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
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

	    <title>Off Canvas Template for Bootstrap</title>

	    <!-- Bootstrap core CSS -->
	    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="offcanvas.css" rel="stylesheet">
	    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
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
										  <li><a href="modelPhoto.php"><span class="glyphicon glyphicon-camera"></span><b class="caret"></b>Photos</a></li>
										  <li><a href="modelVideo.php"><span class="glyphicon glyphicon-facetime-video"></span><b class="caret"></b>Videos</a></li>
								          <li><a href="modelemail.php"><span class="glyphicon glyphicon-envelope"></span><b class="caret"></b>E-mail</a></li>
								          <li><a href="modelCalendar.php"><span class="glyphicon glyphicon-calendar"></span><b class="caret"></b>Calendar</a></li>
										  <li><a href="modelmusic.php"><span class="glyphicon glyphicon-music"></span><b class="caret"></b>Music</a></li>
								        </ul>
								      </li>
								   <li><a href="modelhome.php">Home</a></li>
                                   <li><a href="ModelProfile.php">Ryan</a></li>
							    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
								   <ul class="dropdown-menu">
										  <li><a href="#">Export Profile</a></li>
										  <li><a href="modelSocial.php">Social</a></li>
										  <li><a href="modelLocal.php">Local</a></li>
										  <li><a href="modelContracts.php">Contracts</a></li>
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

		<section id="main">
				<div class="container">
					
					<script type="text/javascript">
					 $(document).ready(function(){
					  $("#jquery_jplayer_1").jPlayer({
					   ready: function () {
					    $(this).jPlayer("setMedia", {
					     m4a: "/media/mysound.mp4",
					     oga: "/media/mysound.ogg"
					    });
					   },
					   swfPath: "/js",
					   supplied: "m4a, oga"
					  });
					 });
					</script>
					<div id="jquery_jplayer_1"></div>
					<div id="jp_container_1">
					 <a href="#" class="jp-play">Play</a>
					 <a href="#" class="jp-pause">Pause</a>
					</div>
				      <div class="row row-offcanvas row-offcanvas-right">

				        <div class="col-xs-12 col-sm-9">
				          <p class="pull-right visible-xs">
				            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
				          </p>
				          <div class="jumbotron">
				            <h1>eDJ's Presents...</h1>
				            <p>Your Mix is Ready</p>
							<ul class="nav navbar-nav navbar-left" style="margin-left:0px;">
					
					<li><a href="modelMusic.php"><span class="glyphicon glyphicon-music"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-play"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-pause"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-backward"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-forward"></span></a></li>
					
				</ul>
				          </div>
						  
				          <div class="row">
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				            <div class="col-6 col-sm-6 col-lg-4">
				              <h2>Heading</h2>
				              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				            </div><!--/span-->
				          </div><!--/row-->
				        </div><!--/span-->

				        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
				          <div class="list-group">
				            <a href="#" class="list-group-item active">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				          </div>
				        </div><!--/span-->
				      </div><!--/row-->

				      <hr>
					  <div id="jp_container_1" class="jp-video jp-video-360p">
					  			<div class="jp-type-single">
					  				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
					  				<div class="jp-gui">
					  					<div class="jp-video-play">
					  						<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
					  					</div>
					  					<div class="jp-interface">
					  						<div class="jp-progress">
					  							<div class="jp-seek-bar">
					  								<div class="jp-play-bar"></div>
					  							</div>
					  						</div>
					  						<div class="jp-current-time"></div>
					  						<div class="jp-duration"></div>
					  						<div class="jp-title">
					  							<ul>
					  								<li>Big Buck Bunny Trailer</li>
					  							</ul>
					  						</div>
					  						<div class="jp-controls-holder">
					  							<ul class="jp-controls">
					  								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
					  								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
					  								<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
					  								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
					  								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
					  								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					  							</ul>
					  							<div class="jp-volume-bar">
					  								<div class="jp-volume-bar-value"></div>
					  							</div>

					  							<ul class="jp-toggles">
					  								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
					  								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
					  								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
					  								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					  							</ul>
					  						</div>
					  					</div>
					  				</div>
					  				<div class="jp-no-solution">
					  					<span>Update Required</span>
					  					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					  				</div>
					  			</div>
					  		</div>

				  

				    </div><!--/.container-->
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
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="../../dist/js/bootstrap.min.js"></script>
	    <script src="offcanvas.js"></script>
	</body>
</html>