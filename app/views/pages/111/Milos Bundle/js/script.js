$("document").ready(function() {
    
    //created as object because objects are passed by reference
    var loading = {
        State : false, // used to check if some animation is in progress
        PageToLoad : 2 // page that should be loaded next on scroll (first is already loaded)
    }; 
    
    
    //start the spolight animation
    for (var i = 0; i < 99; i++) {
        setTimeout(homeAnimation, 1200);
    }
    
    
    /*
     * Day/week/month button click function 
     */
    $(".controlButton").click(function(e) {
        e.preventDefault();
        
        //check if button is already clicked OR some animation/loading is currently in progress - exit
        if ($(this).hasClass("controlButtonActive") || loading.State)
            return;
        
        loading.State = true; //lock state to prevent any other animation/loading calls
        loading.PageToLoad = 2;
        
        $(".controlButtonActive").removeClass("controlButtonActive");
        $(this).addClass("controlButtonActive");
        
        //check if clicked button is day or week or month
        if ($(this).hasClass("dayControl")) {
            controlButton("Day", loading);
        }
        else if ($(this).hasClass("weekControl")) {
            controlButton("Week", loading);            
        }
        else if ($(this).hasClass("monthControl"))  {
            controlButton("Month", loading);            
        }
    });
    

    /*
     * Mobile header controls
     */
    $( "#mobContentSel" ).change(function () {
        if ( $(this).val() == "mod" ) {
            $("#picOfTheDay, #vidOfTheDay").css("display", "none");
            $("#modelOfTheDay").css("display", "block");
        }
        else if ($(this).val() == "pic" ) {
            $("#modelOfTheDay, #vidOfTheDay").css("display", "none");
            $("#picOfTheDay").css("display", "block");
        }
        else if ($(this).val() == "vid" ) {
            $("#modelOfTheDay, #picOfTheDay").css("display", "none");
            $("#vidOfTheDay").css("display", "block");
        }
    });
    
    $( "#mobTimeSel" ).change(function () {
        //check if button is already clicked OR some animation/loading is currently in progress - exit
        if (loading.State)
            return;
        
        loading.State = true; //lock state to prevent any other animation/loading calls
        loading.PageToLoad = 2;
            
        //check if selected val is day or week or month
        if ( $(this).val() == "day" ) {
            controlButton("Day", loading);  
        }
        else if ($(this).val() == "week" ) {
            controlButton("Week", loading);  
        }
        else if ($(this).val() == "month" ) {
            controlButton("Month", loading);  
        }
    });
    
    
    /*
     * Here we specify when will the loadPosts function be called (on scroll - when it reaches the bottom of the page)
     */
    $(window).scroll(function(){

        if (loading.PageToLoad > 3 && home)
            {
                var scrolledPercentage = $(window).scrollTop() / ($(document).height() - $(window).height());
                //console.log($(window).scrollTop() / ($(document).height() - $(window).height()));
                if (scrolledPercentage > 0.90 && scrolledPercentage != 1) {
                    $("#overlayTeaser").css({'opacity' : ((scrolledPercentage * 100) % 10) / 10, 'display' : 'block' });
                    $('.teaserSignUpWrap').css({'margin-top' : $(window).height()/2 - $(".teaserSignUpWrap").height()/2 +'px'});
                }
                else if (scrolledPercentage < 0.91) {
                    $("#overlayTeaser").css({'opacity' : '0', 'display' : 'none'});
                }
            }
        else
            {
                if  ($(window).scrollTop() + $(window).height() > $(document).height() - 30) {

                    /* uncomment this for production
                      loadPosts(loading);
                    */
                    
                    //DEMO START (delete everything below for production version, it's just code that populates the divs for demo purposes)
                    addDemo();
                    loading.PageToLoad++;
                    //DEMO END
                    
    
                    
                    $(".modelBoxWrapLoaded").transition({ scale: 1 }, 500, function() { $(".modelBoxWrapLoaded").removeClass('modelBoxWrapLoaded')}); 
    
                }
            }
            
            /* show mobile header */
            if ($(window).width() < 768) {
                
                if (isElementInViewport( document.getElementById("main") ) ) {
                    $("#mobileHeader").addClass("mobileHeaderAnimate");
                }
                else {
                    $("#mobileHeader").removeClass("mobileHeaderAnimate");
                }
            }
    });
    
    $(window).resize(function() {
        if ($(window).width() < 768) {
            
        } else {
            $("#modelOfTheDay, #picOfTheDay, #vidOfTheDay").css("display", "block");
            $("#mobileHeader").removeClass("mobileHeaderAnimate");
        }
    });
    
});


/*
 * loadPosts - function that is called everytime user scrolls to the bottom of the page
 * @pageNumber - the number of hte page that will be loaded
 * @loading - pass the loading state (that "mutex semaphore")
 */
function loadPosts(loading) {
    if (loading.State)
        return; //we are currently processing load - exit the function
    
    loading.State = true; // lock state to prevent future calls until ajax request is done (unblocked on line 27)
    
    $.ajax({  
        url: "",  // url of the (php) file that is called
        type:'GET',  
        data: "page-nr="+ loading.PageToLoad, //data that will be passed to the (php) file  
        success: function(html){
            
            //(php) file should return complete HTML
            //every .modelBoxWrap div should have .modelBoxWrapLoaded class for animation to happen
            
            $("#modelOfTheDay").append(html.model);
            $("#picOfTheDay").append(html.pic);
            $("#vidOfTheDay").append(html.vid);
			
            //this will trigger the 'grow' animation and show the model boxes;
            $(".modelBoxWrapLoaded").transition({ scale: 1 }, 500, function() { $(".modelBoxWrapLoaded").removeClass('modelBoxWrapLoaded')}); 
        
			//ajax request is done - allow next call;
            loading.PageToLoad++;
            loading.State = false; 
        }
    });  
};


/*
 * homeAnimation - used for homepage spotlight animation
 */
function homeAnimation() {
    var topRand, leftRand;
    topRand = Math.floor((Math.random()*4)+1) * 98;
    leftRand = Math.floor((Math.random()*15)+1) * 98;
    $("#hoverEffIntro").transition({"left" : leftRand + "px", "top" : topRand + "px"}, 1000, 'ease');
    
    //setTimeout(homeAnimation(), 1050);
};


/*
 * addDemo - used to add demo content
 */
function addDemo() {

    for (var i = 0; i<3; i++) {

        var demoHTMLModel = '<div class="modelBoxWrap modelBoxWrapLoaded">'+
                            '<a class="fancybox fancybox.ajax" rel="galleryMod" href="popup_profile.html"><div class="modelImage">'+
                                '<span class="modelVotes">+26k</span>'+
                                '<div class="zoomOverlay"></div>'+
                                '<img src="img/demo/d'+(Math.floor(Math.random() * 12) + 1)+'.jpg" class="img-responsiveEM" alt="Mary Adams">'+
                            '</div></a>'+
                            ''+
                        '</div>';
        var demoHTMLPic = '<div class="modelBoxWrap modelBoxWrapLoaded">'+
                            '<a class="fancybox fancybox.ajax" rel="galleryPic" href="popup_pic.html"><div class="modelImage">'+
                                '<span class="modelVotes">+26k</span>'+
                                '<div class="zoomOverlay"></div>'+
                                '<img src="img/demo/d'+(Math.floor(Math.random() * 12) + 1)+'.jpg" class="img-responsiveEM" alt="Mary Adams">'+
                            '</div></a>'+
                            ''+
                        '</div>';
        var demoHTMLVid = '<div class="modelBoxWrap modelBoxWrapLoaded">'+
                            '<a class="fancybox fancybox.ajax" rel="galleryVid" href="popup_vid.html"><div class="modelImage">'+
                                '<span class="modelVotes">+26k</span>'+
                                '<div class="playOverlay"></div>'+
                                '<img src="img/demo/d'+(Math.floor(Math.random() * 12) + 1)+'.jpg" class="img-responsiveEM" alt="Mary Adams">'+
                            '</div></a>'+
                            ''+
                        '</div>';
                    
        $("#modelOfTheDay").append(demoHTMLModel);
        $("#picOfTheDay").append(demoHTMLPic);
        $("#vidOfTheDay").append(demoHTMLVid);                
    }
    
    //initialize popup on newly added content
                $(".modelBoxWrapLoaded .fancybox").fancybox({
                    openEffect : 'fade',
                    padding : 0
                });   
};

/*
 * controlButton - called when user clicks on a day week month button
 * @dayWeekMonth - which button is clicked
 * @loading - pass the loading state (that "mutex semaphore")
 */
function controlButton(dayWeekMonth, loading) {
        //animation has finished loading
        $(".modelBoxWrap").remove();
        
        //REPLACE addDemo WITH AN AJAX CALL/WHATEVER THAT WILL RETRIEVE THE POSTS
        addDemo();

        $("#modelOfTheDay h2.ofTheDay").html("E-Model of the " + dayWeekMonth);
        $("#picOfTheDay h2.ofTheDay").html("Picture of the " + dayWeekMonth);
        $("#vidOfTheDay h2.ofTheDay").html("Video of the " + dayWeekMonth);
        
        //$("#modelOfTheDay, #picOfTheDay, #vidOfTheDay").transition({ opacity: 1 }, 500);
                                                                   
        $(".modelBoxWrapLoaded").transition({ scale: 1 }, 500, function() {
            $(".modelBoxWrapLoaded").removeClass('modelBoxWrapLoaded')
            loading.State = false; // unlock loading state
            }); 
}

/*
 * isElementInViewport - check if the passed element is in viewport
 * @el - DOM object
 */
function isElementInViewport (el) {
    var rect = el.getBoundingClientRect();
    //console.log(window.innerHeight + " " + rect.top);

    return (
        rect.top + 200 <= window.innerHeight 
    );
}