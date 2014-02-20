<!DOCTYPE html>
<html>
    <head>
	<!-- Title and other stuffs -->
	<title>Calendar - MacAdmin</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<!-- Calendar Links -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calendar.css" media="screen" />
	<!--end cal links -->
   
	
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.css"> 
    <!-- jQuery UI -->
    <link rel="stylesheet" href="css/jquery-ui.css"> 
    <!-- Calendar -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="css/prettyPhoto.css">  
    <!-- Star rating -->
    <link rel="stylesheet" href="css/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="css/jquery.cleditor.css"> 
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="css/bootstrap-switch.css">
    <!-- Main stylesheet -->
    <link href="style/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="style/widgets.css" rel="stylesheet">   
  
    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
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
											  <div class="modal fade" id="takepic" tabindex="-1" role="dialog" aria-labelledby="takepicLabel" aria-hidden="true">
											    <div class="modal-dialog">
											      <div class="modal-content">
											        <div class="modal-header">
											          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											          <h4 class="modal-title" id="takepicLabel">Modal title</h4>
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
											  <div class="modal fade" id="takevid" tabindex="-1" role="dialog" aria-labelledby="takevidLabel" aria-hidden="true">
											    <div class="modal-dialog">
											      <div class="modal-content">
											        <div class="modal-header">
											          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											          <h4 class="modal-title" id="takevidLabel">Modal title</h4>
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
												  <div class="modal fade" id="music" tabindex="-1" role="dialog" aria-labelledby="musicLabel" aria-hidden="true">
												    <div class="modal-dialog">
												      <div class="modal-content">
												        <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												          <h4 class="modal-title" id="musicLabel">Modal title</h4>
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
										  <li><a href="modelExport.php">Export Profile</a></li>
										  <li><a href="modelSocial.php">Social</a></li>
										  <li><a href="modelLocal.php">Local</a></li>
										  <li><a href="modelcontracts.php">Contracts</a></li>
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
<section id="main" style="background:url(img/background.png) repeat right;">
	<div class="container" id="maincontainer">
		<div class="panel panel-default">
		  <div class="panel-body">
       <div class="row-fluid">
        	<section class="col-md-3">
				<img src="img/sarrah2.jpg" alt="..." class="img-thumbnail">
        	</section>
        	<!--<section class="col-md-2">
				<img src="img/sarrah3.jpg" alt="..." class="img-thumbnail">
        	</section>-->
        	<section class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<p>Name Location Height Weight Bust</p>
											</div>
				</div>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
            		<ol class="carousel-indicators">
            			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
                		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
            		</ol>
                    <!-- Wrapper for slides -->
           		 	<div class="carousel-inner"><!--Carousel inner -->
            			<div class="item active">
                			<img src="img/wide-d1.jpg" alt="hello">
                    		<div class="carousel-caption">
                    		</div>
                		</div>
                		<div class="item"><!--Item-->
                			<img src="img/wide-d1.jpg" alt="hello">
                			<div class="carousel-caption">
                			</div>
						</div><!--End "item"-->
					</div><!--End Carousel Inner -->
                    <!-- Controls -->
            		 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            		 <span class="glyphicon glyphicon-chevron-left"></span></a>
               		 <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              		 <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div><!--End Carousel &^&^&^&&^&^^&&^^&&^^&^&^&^&^&^&&^  -->
			</section><!-- End Center Column   -->
        	<section class="col-md-3">
				<img src="img/sarrah3.jpg" alt="..." class="img-thumbnail">
        	</section>

   	 	</div><!-- End Row Div -->

		<!--  BEGIN BOTTOM NAVIGATION -->
		<div class="panel panel-default">
		  <div class="panel-heading">
			  <h3 class="panel-title">
			  <div class="nav nav-justified">
				<ul class="nav nav-pills">
                   <li><a href="#about" data-toggle="tab">About</a></li>
                   <li class="active"><a href="#photos" data-toggle="tab">Photos<span class="badge">42</span></a></li>
				   <li><a href="#videos" data-toggle="tab">Videos<span class="badge">4</span></a></li>
				   <li><a href="#resume" data-toggle="tab">Resume</a></li>
				   <li><a href="#press" data-toggle="tab">Press<span class="badge">3</span></a></li>
                   <li><a href="#calendar" data-toggle="tab">Calendar</a></li>
                   <li><a href="#eprints" data-toggle="tab">ePrints</a></li>
    		    </ul>
			  </div>
		      </h3>
		  </div>
    	  <div class="panel-body">
    			<div class="tab-content">
       				<div class="tab-pane active" id="about">
						<div class="jumbotron">
						  <h1>Hi, I'm Sarrah</h1>
						  <p>I'm 23 years old and have been modeling for 5 years.  I recently have been doing ____ shows with clients such as X, Y and Z.  Watch my video to see more about me!</p>
						  <p><a class="btn btn-primary btn-lg" role="button">Watch My Video!</a></p>
						</div>
						<h3>Interest</h3>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 55%"><p>Trade Shows</p>
							    <span class="sr-only">55% Complete (success)</span>
							</div>
							<div class="progress-bar progress-bar-warning" style="width: 35%"><p>Atmosphere</p>
							    <span class="sr-only">35% Complete (warning)</span>
							</div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"><p>Print</p>
							    <span class="sr-only">10% Complete (danger)</span>
							</div>
						</div>
					</div>
       			    <div class="tab-pane" id="photos">
       					<div id="mygallery">
                      	  <!-- <?php for($i = 0; $i < $count; $i++): ?>                        
                      		<?php $photo = $photos[$i]["Key"]; ?>
                      	  	<?php $fileName = explode("/", $photo); ?>
                      		<?php $fileName = $fileName[count($fileName) - 1]; ?>
                      		<?php $path=$userInfo["bucket"]."/Models/".$userInfo["id"]."/Thumbnails/".$fileName?>
                      		<a href="https://s3.amazonaws.com/<?php echo $photo; ?>" >
                      		<img alt="<?php echo $name . "_" . $i; ?>" src="https://s3.amazonaws.com/<?php echo $path ?>"/></a>
                      		<?php endfor; ?> -->
               		  		<div class="col-lg-3"><img src="img/tall-d1.jpg" alt="..." class="img-thumbnail">
  								<img src="img/sarrah1.jpg" alt="..." class="img-thumbnail"></div>
                     	  		<div class="col-lg-3"><img src="img/wide-d1.jpg" alt="..." class="img-thumbnail">
                           		<img src="img/wide-d1.jpg" alt="..." class="img-thumbnail"></div>
                     	  		<div class="col-lg-3"><img src="img/tall-d2.jpg" alt="..." class="img-thumbnail"></div>
                     	  		<div class="col-lg-3"><img src="img/wide-d1.jpg" alt="..." class="img-thumbnail">
                          		<img src="img/wide-d1.jpg" alt="..." class="img-thumbnail"></div>  
           				</div>
       				</div><!--End "Media"-->
       				<div class="tab-pane" id="videos">
					</div>
      	 			<div class="tab-pane" id="resume">
						<h3>Experience</h3>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"><p>Atmosphere</p>
								    <span class="sr-only">35% Complete (success)</span>
							</div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"><p>Trade Shows</p>
								    <span class="sr-only">20% Complete (warning)</span>
							</div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"><p>Print</p>
								    <span class="sr-only">10% Complete (danger)</span>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="press">
						<div class="media">
						  <a class="pull-left" href="#">
						    <img class="media-object" src="img/d1.jpg" alt="...">
						  </a>
						  <div class="media-body">
						    <h4 class="media-heading">Media heading</h4>
						    This App Is going 
						  </div>
						</div>
						<div class="list-group">
					  	  <a href="#" class="list-group-item">
					    	  <h4 class="list-group-item-heading">Press Item #2</h4>
					    	  <p class="list-group-item-text">Cuz i'm the Ish</p>
					  		</a>
						</div>
						<div class="list-group">
						  <a href="#" class="list-group-item">
						    <h4 class="list-group-item-heading">Interview with Sarrah</h4>
						    <p class="list-group-item-text">...</p>
						  </a>
						</div>
						<div class="list-group">
						  <a href="#" class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">...</p>
						  </a>
						</div>
					</div>
					<!--  Begin Calendar -->
					<!-- Header starts -->
					  <header>
					    <div class="container">
					      <div class="row">

					        <!-- Logo section -->
					        <div class="col-md-4">
					          <!-- Logo. -->
					          <div class="logo">
					            <h1><a href="#">Mac<span class="bold">Admin</span></a></h1>
					            <p class="meta">something goes in meta area</p>
					          </div>
					          <!-- Logo ends -->
					        </div>

					        <!-- Button section -->
					        <div class="col-md-4">

					          <!-- Buttons -->
					          <ul class="nav nav-pills">

					            <!-- Comment button with number of latest comments count -->
					            <li class="dropdown dropdown-big">
					              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
					                <i class="icon-comments"></i> Chats <span   class="label label-info">6</span> 
					              </a>

					                <ul class="dropdown-menu">
					                  <li>
					                    <!-- Heading - h5 -->
					                    <h5><i class="icon-comments"></i> Chats</h5>
					                    <!-- Use hr tag to add border -->
					                    <hr />
					                  </li>
					                  <li>
					                    <!-- List item heading h6 -->
					                    <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>
					                  <li>
					                    <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>
					                  <li>
					                    <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>                  
					                  <li>
					                    <div class="drop-foot">
					                      <a href="#">View All</a>
					                    </div>
					                  </li>                                    
					                </ul>
					            </li>

					            <!-- Message button with number of latest messages count-->
					            <li class="dropdown dropdown-big">
					              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
					                <i class="icon-envelope-alt"></i> Inbox <span class="label label-primary">6</span> 
					              </a>

					                <ul class="dropdown-menu">
					                  <li>
					                    <!-- Heading - h5 -->
					                    <h5><i class="icon-envelope-alt"></i> Messages</h5>
					                    <!-- Use hr tag to add border -->
					                    <hr />
					                  </li>
					                  <li>
					                    <!-- List item heading h6 -->
					                    <h6><a href="#">Hello how are you?</a></h6>
					                    <!-- List item para -->
					                    <p>Quisque eu consectetur erat eget  semper...</p>
					                    <hr />
					                  </li>
					                  <li>
					                    <h6><a href="#">Today is wonderful?</a></h6>
					                    <p>Quisque eu consectetur erat eget  semper...</p>
					                    <hr />
					                  </li>
					                  <li>
					                    <div class="drop-foot">
					                      <a href="#">View All</a>
					                    </div>
					                  </li>                                    
					                </ul>
					            </li>

					            <!-- Members button with number of latest members count -->
					            <li class="dropdown dropdown-big">
					              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
					                <i class="icon-user"></i> Users <span   class="label label-success">6</span> 
					              </a>

					                <ul class="dropdown-menu">
					                  <li>
					                    <!-- Heading - h5 -->
					                    <h5><i class="icon-user"></i> Users</h5>
					                    <!-- Use hr tag to add border -->
					                    <hr />
					                  </li>
					                  <li>
					                    <!-- List item heading h6-->
					                    <h6><a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>
					                  <li>
					                    <h6><a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>
					                  <li>
					                    <h6><a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span></h6>
					                    <div class="clearfix"></div>
					                    <hr />
					                  </li>                  
					                  <li>
					                    <div class="drop-foot">
					                      <a href="#">View All</a>
					                    </div>
					                  </li>                                    
					                </ul>
					            </li> 

					          </ul>

					        </div>

					        <!-- Data section -->

					        <div class="col-md-4">
					          <div class="header-data">

					            <!-- Traffic data -->
					            <div class="hdata">
					              <div class="mcol-left">
					                <!-- Icon with red background -->
					                <i class="icon-signal bred"></i> 
					              </div>
					              <div class="mcol-right">
					                <!-- Number of visitors -->
					                <p><a href="#">7000</a> <em>visits</em></p>
					              </div>
					              <div class="clearfix"></div>
					            </div>

					            <!-- Members data -->
					            <div class="hdata">
					              <div class="mcol-left">
					                <!-- Icon with blue background -->
					                <i class="icon-user bblue"></i> 
					              </div>
					              <div class="mcol-right">
					                <!-- Number of visitors -->
					                <p><a href="#">3000</a> <em>users</em></p>
					              </div>
					              <div class="clearfix"></div>
					            </div>

					            <!-- revenue data -->
					            <div class="hdata">
					              <div class="mcol-left">
					                <!-- Icon with green background -->
					                <i class="icon-money bgreen"></i> 
					              </div>
					              <div class="mcol-right">
					                <!-- Number of visitors -->
					                <p><a href="#">5000</a><em>orders</em></p>
					              </div>
					              <div class="clearfix"></div>
					            </div>                        

					          </div>
					        </div>

					      </div>
					    </div>
					  </header>

					<!-- Header ends -->

					<!-- Main content starts -->

					<div class="content">

					  	<!-- Sidebar -->
					    <div class="sidebar">
					        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

					        <!--- Sidebar navigation -->
					        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
					        <ul id="nav">
					          <!-- Main menu with font awesome icon -->
					          <li><a href="index.html"><i class="icon-home"></i> Dashboard</a>
					            <!-- Sub menu markup 
					            <ul>
					              <li><a href="#">Submenu #1</a></li>
					              <li><a href="#">Submenu #2</a></li>
					              <li><a href="#">Submenu #3</a></li>
					            </ul>-->
					          </li>
					          <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Widgets  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					            <ul>
					              <li><a href="widgets1.html">Widgets #1</a></li>
					              <li><a href="widgets2.html">Widgets #2</a></li>
					              <li><a href="widgets3.html">Widgets #3</a></li>
					            </ul>
					          </li>  
					          <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> Pages #1  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					            <ul>
					              <li><a href="post.html">Post</a></li>
					              <li><a href="login.html">Login</a></li>
					              <li><a href="register.html">Register</a></li>
					              <li><a href="support.html">Support</a></li>
					              <li><a href="invoice.html">Invoice</a></li>
					              <li><a href="profile.html">Profile</a></li>
					              <li><a href="gallery.html">Gallery</a></li>
					            </ul>
					          </li> 
					          <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> Pages #2  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					            <ul>
					              <li><a href="media.html">Media</a></li>
					              <li><a href="statement.html">Statement</a></li>
					              <li><a href="error.html">Error</a></li>
					              <li><a href="error-log.html">Error Log</a></li>
					              <li><a href="calendar.html">Calendar</a></li>
					              <li><a href="grid.html">Grid</a></li>
					            </ul>
					          </li>                             
					          <li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li> 
					          <li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
					          <li><a href="forms.html"><i class="icon-tasks"></i> Forms</a></li>
					          <li><a href="ui.html"><i class="icon-magic"></i> User Interface</a></li>
					          <li><a href="calendar.html" class="open"><i class="icon-calendar"></i> Calendar</a></li>
					        </ul>
					    </div>

					    <!-- Sidebar ends -->

					  	<!-- Main bar -->
					  	<div class="mainbar">

					      <!-- Page heading -->
					      <div class="page-head">
					        <h2 class="pull-left"><i class="icon-file-alt"></i> Calendar</h2>

					        <!-- Breadcrumb -->
					        <div class="bread-crumb pull-right">
					          <a href="index.html"><i class="icon-home"></i> Home</a> 
					          <!-- Divider -->
					          <span class="divider">/</span> 
					          <a href="#" class="bread-current">Dashboard</a>
					        </div>

					        <div class="clearfix"></div>

					      </div>
					      <!-- Page heading ends -->


						    <!-- Matter -->

						    <div class="matter">
					        <div class="container">
					          <div class="row">
					            <div class="col-md-12">
					              <!-- Widget -->
					              <div class="widget">
					                <!-- Widget title -->
					                <div class="widget-head">
					                  <div class="pull-left">Calendar</div>
					                  <div class="widget-icons pull-right">
					                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
					                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
					                  </div>  
					                  <div class="clearfix"></div>
					                </div>
					                <div class="widget-content">
					                  <!-- Widget content -->
					                  <div class="padd">
					                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
					                    <div id="calendar"></div>
					                  </div>
					                </div>
					              </div> 
					            </div>
					          </div>
					        </div>
							  </div>

							<!-- Matter ends -->

					    </div>

					   <!-- Mainbar ends -->	   
					   <div class="clearfix"></div>
				   	</div>
				
	
					<!-- End Calendar -->
      	 			<div class="tab-pane" id="eprints">
          				<div class="row">
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src="img/tall-d1.jpg" alt="...">
							      	<div class="caption">
							        <h3>$5 Print</h3>
							        <p>Support entertainers with a small donation.</p>
							        <p><a href="#" class="btn btn-primary" role="button">Add</a> 
										<a href="#" class="btn btn-default" role="button">Buy</a></p>
							     	</div>
							    </div>
							  </div>
							  <div class="col-sm-6 col-md-4">
							  	<div class="thumbnail">
							      <img src="img/wide-d1.jpg" alt="...">
							      	<div class="caption">
							        <h3>$5 Print</h3>
							        <p>Support entertainers with a small donation</p>
							        <p><a href="#" class="btn btn-primary" role="button">Add</a>
										<a href="#" class="btn btn-default" role="button">Buy</a></p>
							      	</div>
							    </div>
							  </div>
							  <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src="img/tall-d1.jpg" alt="...">
							      <div class="caption">
							        <h3>$5 Print</h3>
							        <p>Support entertainers with a small donation.</p>
							        <p><a href="#" class="btn btn-primary" role="button">Add</a> 
									<a href="#" class="btn btn-default" role="button">Buy</a></p>
							      </div>
							    </div>
							  </div>
						  </div>
        	  		</div><!--End e-prints -->
    			</div><!--End Tab Content-->  
			  </div>
			</div><!--End Main Container -->	
		</section>
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
			
			<!-- Footer starts -->
			<footer>
			  <div class="container">
			    <div class="row">
			      <div class="col-md-12">
			            <!-- Copyright info -->
			            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
			      </div>
			    </div>
			  </div>
			</footer> 	

			<!-- Footer ends -->

			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

			<!-- JS -->
			<script src="js/jquery.js"></script> <!-- jQuery -->
			<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
			<script src="js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
			<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
			<script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
			<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

			<!-- jQuery Flot -->
			<script src="js/excanvas.min.js"></script>
			<script src="js/jquery.flot.js"></script>
			<script src="js/jquery.flot.resize.js"></script>
			<script src="js/jquery.flot.pie.js"></script>
			<script src="js/jquery.flot.stack.js"></script>

			<!-- jQuery Notification - Noty -->
			<script src="js/jquery.noty.js"></script> <!-- jQuery Notify -->
			<script src="js/themes/default.js"></script> <!-- jQuery Notify -->
			<script src="js/layouts/bottom.js"></script> <!-- jQuery Notify -->
			<script src="js/layouts/topRight.js"></script> <!-- jQuery Notify -->
			<script src="js/layouts/top.js"></script> <!-- jQuery Notify -->
			<!-- jQuery Notification ends -->

			<script src="js/sparklines.js"></script> <!-- Sparklines -->
			<script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
			<script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
			<script src="js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
			<script src="js/filter.js"></script> <!-- Filter for support page -->
			<script src="js/custom.js"></script> <!-- Custom codes -->
			<script src="js/charts.js"></script> <!-- Charts & Graphs -->
	
	</body>
</html>