
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
                                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="E-models.net"/></a>
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
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="fans.html">Fans</a></li>
                                        <li><a href="clients.html">Clients</a></li>
                                        <li><a href="models.html">Models</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>  
        </section>
        <!--HEADER END-->
        
        <!--MOBILE HEADER START (day/week/month controls + model/profile/vid controls)--> 
        <section id="mobileHeader">
            <div class="container">
                <select id="mobContentSel">
                    <option value="mod">E-Model</option>
                    <option value="pic">Picture</option>
                    <option value="vid">Video</option>
                </select> 
                of the
                <select id="mobTimeSel">
                    <option value="day">Day</option>
                    <option value="week">Week</option>
                    <option value="month">Month</option>
                </select>
            </div>
        </section>  
        <!--MOBILE HEADER END-->
     <div class="wrap"><!-- Wrap Begins-->   
        <div class="emSpacer"></div>

        <!--INTRO START-->
        <section id="intro">
            <div id="hoverEffIntro"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>eModels</h1>
                        <h2><p>Empowering Models in the Digital Era</p></h2>
                        <a href="javascript:void(0);" id="register" class="btn btn-eMod">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../signIn.php" class="btn btn-eMod">Login</a>
                    </div>   
                </div>
            </div>
        </section>
        <!--INTRO END-->
        
        <!--DESCRIPTION 1 START-->
        <section id="desc1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Free Web 2.0 Model Profile</h1>
                        <p>Don't pay a penny until we book you work!  Up to 20 gigs storage of Video and Photos, Our Casting Room also comes equipped with Live Video/Photo Capture</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/demo/mode1.png" class="img-responsive visible-md visible-lg" alt="" /> 
                    </div>
                </div>
            </div>
        </section>
        <!--DESCRIPTION 1 END-->
        
        <!--DESCRIPTION 2 START-->
        <section id="desc2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/demo/mode2.png" class="img-responsive visible-md visible-lg" alt="" /> 
                    </div>                    
                    <div class="col-md-8">
                        <h1>Crowd Funding Themed Community</h1>
                        <p>First you would create unique campaigns to reach certain fundraising goals.  Next tell the world! Share, Promote, invite friends and family to contribute to your cause.  Try offering collateral gifts for certain levels of investments. </p>
                    </div>
                </div>
            </div>
        </section>
        <!--DESCRIPTION 2 END-->
        
        <!--MAIN START (sidebar & model posts)-->
        <section id="main">
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
        <!--MAIN END-->
		<!-- Footer Begin -->
		<?php include 'templates/footer.php'; ?>
		<!-- Footer Begin -->
        <div id="overlayTeaser">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="teaserSignUpWrap">
                        <div class="teaserWrapTop">
                            <img src="img/logo.png" alt="E-models.net"/>
                            <h2>TO SEE MORE PLEASE LOGIN/REGISTER</h2>
                            
                            <p class="text-danger login-errors"></p>

                            <form class="teaserSignUp">
                                <input class="form-control" id="teaserUsername" placeholder="E-Mail">
                                <input type="password" class="form-control" id="teaserPassword" placeholder="Password">
                                <p><a href="javascript:void(0);" id="btn-login" class="btn btn-eModAction">Login</a></p>
                            </form>
                        </div>
                        <div class="teaserWrapBot">
                            <p>NOT A MEMBER YET?</p> <button href="javascript:void(0);" id="register-modal" class="btn btn-eMod">Register</button></p>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>

        <div id="choose-type">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="teaserSignUpWrap">
                        <div class="teaserWrapTop" id="choose-type-wrap-top">
                            <img src="img/logo.png" alt="E-models.net"/>
                                <h2>PLEASE SELECT USER TYPE</h2>

                            <a href="../createAccountModel.php" class="btn btn-eMod">Model</a>
                            <a href="../createAccountClient.php" class="btn btn-eMod">Client</a>
                        </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
	</div><!-- End Content Wrap -->	
			
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
