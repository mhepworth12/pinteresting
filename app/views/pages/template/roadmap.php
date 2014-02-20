
<!doctype html>
<html itemscope itemtype="http://schema.org/Product" lang="en">
<head>    
    <title>Virb &rsaquo; Roadmap</title>
    
    <meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="content-script-type" content="text/javascript" />

<meta name="description" content="Whether you're a novice or a pro, a photographer, a band, a small business, or anything in between, Virb is perfect for building your own website &mdash; quickly and easily." />
<meta name="author" content="Team Virb" />
<meta name="copyright" content="Copyright (c) 2008-2014 Virb, All rights reserved" />
<meta name="company" content="Virb (virb.com)" />
<meta name="revisit-after" content="3 days" />
<meta name="viewport" content="width=1112" />

<meta itemprop="name" content="Virb | Build Your Own Website">
<meta itemprop="description" content="Whether you're a novice or a pro, a photographer, a band, a small business, or anything in between, Virb 
is perfect for building your site &mdash; quickly and easily.">

<link rel="shortcut icon" href="http://g.virbcdn.com/favicon.png" />
<link rel="apple-touch-icon" href="http://g.virbcdn.com/apple-touch-icon.png" />

<!-- FACEBOOK OGTAGS -->
<meta property="og:title" content="Virb &rsaquo; Roadmap" />
<meta property="og:description" content="Whether you're a novice or a pro, a photographer, a band, a small business, or anything in between, Virb is perfect for building your own website &mdash; quickly and easily." />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://virb.com/roadmap" />
<meta property="og:image" content="http://g.virbcdn.com/apple-touch-icon.png" />
<meta property="og:site_name" content="Virb" />

<!-- Modernizr -->
<script type="text/javascript" src="http://g.virbcdn.com/_assets/_js/modernizr.touch.js"></script>

    <script async src="//cdn.optimizely.com/js/134305929.js"></script>

    <link rel="stylesheet" href="http://g.virbcdn.com/_assets/_css/museo.css" type="text/css" />
<link rel="stylesheet" href="http://g.virbcdn.com/_min/1392397314&b=_assets&f=_css/base.css,_css/overlay.css,_css/_validation/validation.css,_css/public.css,_css/roadmap.css" type="text/css" />

    
    <script type="text/javascript" charset="utf-8" src="http://g.virbcdn.com/_assets/_js/jquery/1.7.2.js"></script>

    <!--[if IE ]><link rel="stylesheet" href="http://g.virbcdn.com/_assets/_css/ie.css" type="text/css" /><![endif]-->	
    <!--[if lte IE 8]>
        <style type="text/css" media="screen">
            #build_banner p { letter-spacing: -1px; }
            #header .logo h1:after { background: none; }
        </style>
    <![endif]-->
    <!--[if lte IE 7]><link rel="stylesheet" href="http://g.virbcdn.com/_assets/_css/ie7.css" type="text/css" /><![endif]-->
	
	<script type="text/javascript" charset="utf-8">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-4266223-12']);
		_gaq.push(['_setDomainName', 'none']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);
	</script>
</head>

<body id="public" class="roadmap ">
    

    <!-- HEADER -->
    <div id="header">
	<div class="nav_wrapper">
		<div class="nav_container">
			<a href="/" title="Virb" class="logo">
				<h1>Virb</h1>
			</a>
			<ul class="nav">
	            
	            
	            
	            <li class="features"><a href="/features" title="Features">Features</a></li>
	            <li class="themes"><a href="/themes" title="Themes">Themes</a></li>
	            <li class="pricing"><a href="/pricing" title="Pricing">Pricing</a></li>
	            <li class="showcase"><a href="/showcase" title="Showcase">Showcase</a></li>
	            	            <li class="back"><a href="/pages" title="Back To Admin">Back To Admin <span class="arr">&rarr;</span></a></li>
	            	        </ul>
        </div>   
	</div>
	    <div id="hero-container">
        <div id="hero" class="pad">
            <h1>Where We're Headed<span>Roadmap</span></h1>        </div>
    </div>
</div>
    
    <!-- WRAPPER -->
    <div id="wrapper">
        <div id="shell" class="container">
            <div id="content" class="pad">
                <div id="sub_title" class="roadmap">
    <h3>A quick look at our priorities over the next few months.</h3>
</div>

<div class="article">
<div id="loading-roadmap">
    <h3>Loading Virb Roadmap...</h3>
</div>
<div id="roadmap" style="display: none;">
</div>
<script src="http://api.interstateapp.com/v2/api.js" type="text/javascript"></script>
<script type="text/javascript">
    
    ( function() {

        var percent = [ 100, 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 100, 100, 100, 100 ];
        var titles  = [ '100%', '0%', '10%', '20%', '30%', '40%', '50%', '60%', '70%', '80%', '90%', 'Ready', 'Launched', 'Proposed', 'Postponed', 'Planned' ];
        var keys    = [ 'S', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'L', 'I', 'P', 0 ];
        var roadmap = new InterstateApp.Roadmap( '4c7acdfc8ead0eb56a000000', {
            
            getRoot: function() {
                
                return '<ul class="iRChildren"></ul>'
            
            },
            
            getHTML: function( item ) {
                
                if( !item.isRoute ) {
                
                    return '<li class="status status_' + keys[ item.status.code ] + '"><div class="progress rounded_3"><div class="percent green_bg" style="width: ' + percent[ item.status.code ] + '%;">' + titles[ item.status.code ] + '</div></div><h3 class="iRTitle">' + item.title + '</h3>' + item.description.html + '</li>';
                    
                } else {

                    return '<li class="status status_' + keys[ item.status.code ] + '"><div class="progress rounded_3"><div class="percent green_bg" style="width: ' + percent[ item.status.code ] + '%;">' + titles[ item.status.code ] + '</div></div><h3 class="iRTitle">' + item.title + '</h3>' + item.description.html + '<ul class="iRChildren"></ul></li>';
                
                }
                
            },
            
            poweredBy: function() {
                
                return '<li style="display: none; border: 0; ">Powered by <a href="http://interstateapp.com">Interstate</a>.</li>';
            
            }
        
        }, function( el ) {
         

   
            roadmap.sort( 'progress', true );
            
            document.getElementById( 'loading-roadmap' ).style.display = 'none';
                
            el.style.display = 'block';
        
        }, document.getElementById( 'roadmap' ) );
    
    })();

</script>
</div>

<hr/>

<div class="aside">
	<div class="section">
		<h5>Feature Requests?</h5>
		<p>Have some feature ideas you'd like to share with the Virb team? <a href="http://help.virb.com/customer/portal/emails/new">Do tell</a>!</p>
	</div>
	<div class="section">
		<h5>New Themes?</h5>
		<p>More elegant options to show off your work are definitely on the way. Our goal is to have a new theme available every 4-6 weeks.</p>
	</div>
	<div class="section">
		<h5>Partnerships?</h5>
		<p>We're always open to discussing new partnerships that would benefit our customers. <a href="/contact">Get in touch</a> and we'll go from there.</p>
	</div>
</div>

<div class="clear">&nbsp;</div>

            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    
    <!-- FOOTER -->
    <div id="footer">
    <div class="container">
        <div id="build_banner">

            <p>Build your own website for only $10 a month. Try Virb FREE for 10 days!<a href="/signup" class="get_started link green rounded_3">Get Started Now</a></p>
        </div>
    </div>

    <div id="big_footer">
    
    <div class="container menu">
    
    	<div id="sharing">
    		<span class="share">SHARE</span>
            <script src="//connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://facebook.com/virb" send="false" layout="button_count" class="facebook-share-button" width="auto" show_faces="true" font=""></fb:like>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="virb" data-related="brad">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>                    
            
            <!-- Place this tag where you want the +1 button to render -->
            <div class="plusone"><div class="g-plusone" data-size="medium" data-annotation="inline" data-width="70" data-href="http://virb.com"></div></div>

            <!-- Place this render call where appropriate -->
            <script type="text/javascript">
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
        </div>
        
    	<ul class="nav">
            <h3>Virb For...</h3>
            <li><a href="/photographers" title="Photographers">Photographers</a></li>
            <li><a href="/restaurants" title="Restaurants">Restaurants</a></li>
            <li><a href="/designers" title="Designers">Designers</a></li>
        </ul>
        <ul class="nav">
            <h3>Pages</h3>
            <li><a href="/" title="Home">Home</a></li>
            <li><a href="/features" title="Features">Features</a></li>
            <li><a href="/themes" title="Themes">Themes</a></li>
            <li><a href="/pricing" title="Pricing">Pricing</a></li>
            <li><a href="/showcase" title="Showcase">Showcase</a></li>
        </ul>
        <ul class="nav">
            <li><a href="http://blog.virb.com/" title="Blog">Blog</a></li>
            <li><a href="/about" title="About Us">About Us</a></li>
            <li><a href="/roadmap" title="Roadmap">Roadmap</a></li>
            <li class="light"><a href="/privacy" title="Privacy">Privacy</a></li>
            <li class="light"><a href="/terms" title="Terms">Terms</a></li>
        </ul>
        <ul class="nav">
            <li><a href="http://help.virb.com/" title="Help">Help Center</a></li>
            <li><a href="http://status.virb.com/" title="Status">Site Status</a></li>
        </ul>

    </div>
    
    <div class="container legal">
            <p id="copyright">
                &copy; 2014 Virb, All rights reserved. A <a href="http://mediatemple.net">(mt) Media Temple</a> Company.
            </p>
            
    </div>
    
	</div>
	
</div>

<!-- JS -->
<script type="text/javascript" charset="utf-8">
if (!virb) { virb = {}; }
virb.config = { 
    debug: false,
    pageId: 543553,
    virbDomain: 'virb.com',
    uploadsDomain: 'uploads.west.virb.in'
};
</script>
<script type="text/javascript" charset="utf-8" src="http://g.virbcdn.com/_min/1392397326&b=_assets&f=_js/base.js,_js/validation.2.js,_js/overlay.js,_js/login.js,_js/forms.js"></script>
<script type="text/javascript">
// Google Analytics Code
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">
adroll_adv_id = "KXTY624OGREXFKRX4HY6AL";
adroll_pix_id = "MMKANCK5K5B6ZDVJTS6XXS";

(function () {
    var oldonload = window.onload;
    window.onload = function(){
        __adroll_loaded=true;
        var scr = document.createElement("script");
        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
        scr.setAttribute('async', 'true');
        scr.type = "text/javascript";
        scr.src = host + "/j/roundtrip.js";
        ((document.getElementsByTagName('head') || [null])[0] ||
        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        if(oldonload){oldonload()}
    };
}());
</script>
    <!--[if lte IE 7]><script src="http://g.virbcdn.com/_assets/_js/ie7.js" type="text/javascript"></script><![endif]-->



    </body>
</html>