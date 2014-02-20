<?php 
    include '../ASEngine/AS.php';

    //user is not logged in, redirect to login page
    if( $login->isLoggedIn() )
        header("Location: home.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Models Best-Models</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>    
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js"></script>
        
        

        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <script type="text/javascript">
            var home = false;
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
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Models</a></li>
                                        <li><a href="#">Fans</a></li>
                                        <li><a href="#">Photos</a></li>
                                        <li><a href="#">Contact</a></li>
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
        
        <div class="emSpacer"></div>

        
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
                        
                        <div class="sidebarWidget">
                            <div class="widgetBodyProfile">
                                <div class="profinfoHead">
                                    <img class="userImage" src="img/demo/usrimg.jpg" />
                                    <div class="userInfo">
                                        <p class="userInfoName"><?php echo $name; ?></p>
                                        <p class="userInfoAbout">Amazing talent, pretty eyes</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="userAction userAction1"><img src="img/profile_icon.png" /><br/>Settings</div>
                                    <div class="userAction userAction2">
                                        <a href="../model_old/index.php"><img src="img/settings_icon.png" /><br/>Profile</a>
                                    </div>
                                    <div class="userAction userAction3">
                                        <a href="../logout.php"><img  src="img/sign_out_icon.png" /><br/>Log Out</a>
                                    </div>
                                    <div class="clearfix"></div>                                        
                                    </div>
                            </div>
                            <div class="profinfoFoot">
                                <span class="profilecomplet">Profile Completition: 85%</span>
                                <div class="progressBar"><div class="progressBarLoaded"></div></div>
                                <ul class="ul1">
                                   <li>Facebook&nbsp; <img src="img/check_mark.png"> </li>
                                   <li>Info &nbsp; <img src="img/close_icon.png">&nbsp;</li>
                                   <li>Lorem Ipsum &nbsp; <img src="img/check_mark.png"> </li> 
                                </ul>
                                <ul class="ul2">
                                   <li>Facebook&nbsp; <img src="img/close_icon.png">&nbsp;</li>
                                   <li>Personal &nbsp; <img src="img/check_mark.png"></li>
                                   <li>Lorem Ipsum &nbsp; <img src="img/close_icon.png">&nbsp;</li> 
                                </ul>
                                <div class="clearfix"></div> 
                            </div>
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
    </body>
</html>
