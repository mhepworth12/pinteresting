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
      
        <!--HEADER START (logo, main menu, profile info)-->  
        <section id="header-model">
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
                                <a class="navbar-brand" href="#"><img src="img/whitelogo.png" alt="E-models.net"/></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                                <!-- <form class="navbar-form navbar-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control hidden-sm .hidden-xs" placeholder="Search">
                                    </div>
                                </form>-->
	                                <div class="navWrap">
	                                    <ul class="nav navbar-nav navbar-left">
	                                        <li><a href="index.php">Home</a></li>
	                                        <li><a href="about.php">About</a></li>
	                                        <li><a href="fans.php">Fans</a></li>
	                                        <li><a href="clients.php">Clients</a></li>
	                                        <li class="active"><a href="#">Models</a></li>
	                                        <li><a href="#">Blog</a></li>
											<li><a href="contact.php">Contact</a></li>
	                                    </ul>
										<ul class="nav navbar-nav navbar-right">
											<li><button type="button" class="btn btn-default navbar-btn" style="margin:15px;">Register</button></li>
											<li><a href="login.php">Log in</a></li>
										</ul>
	                                </div>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>  
        </section><!--HEADER END-->
		
		<section id="main"><!-- Main Content Begins -->
			<div class="container">
				<div class="row">
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img data-src="holder.js/300x200" alt="...">
				      <div class="caption">
				        <h3>Thumbnail label</h3>
				        <p>...</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</section><!-- Main Content Ends -->
		
		<?php include 'templates/footer.php'; ?>
		
	</body>
</html>