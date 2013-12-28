
$(document).ready(function(){
	//getting ajax frontpage content
	$(".tester").click(function(e){
	  e.preventDefault();
	  var theId = $(this).attr("id");
	  if(theId === "featuredProduct"){
	  //console.log("går ind i tester1");
		getUrl = "slider.php";	
	  } else if (theId === "newsletter") {
	  //console.log("går ind i tester2");
		getUrl = "vip.php";
	  } else{
	  //console.log("går ind i tester3");
		getUrl = "supportFront.php";
	  }
	  //console.log(getUrl);
	  $.get(getUrl,function(data,status){
		$(".contentPhp").html(data);
	  });/*
  var abc1 =$(this).parent().find(".arrow");
	var abc = $(".arrow").not(abc1);
	$(this).parent().find(".arrow").css("opacity","1").fadeIn(1000).addClass("arrow");
	$(abc).fadeOut(0);*/

    $('html, body').animate({
        scrollTop: $(".outerbox").offset().top
    }, 1000);
	if(getUrl === "slider.php"){
	//setTimeout(function(){$('.carousel').carousel()},3000);

		}
	});
	//on scroll change height of navbar and make it fixed
	$(window).scroll(function(){
		$(".navigationTop").css("opacity","1");	
	});

	$(".navigationTop").click(function(){
		 $('html, body').animate({scrollTop:0}, 'slow');
		   return false;
	});

	//Make pagination scroll button disappear, when on top of screen
	$(window).scroll(function(){
		var scrollTop     = $(window).scrollTop(),
			elementOffset = $('.navbar').offset().top;
			distance      = (elementOffset - scrollTop);
			//console.log("distance er: " +distance);
			if(distance >= -50){
					 $(".navigationTop").css("opacity","0");
		}
	});

	//form submit
	$("#newsletterButton").click(function(e){
		e.preventDefault();
	  $.post("welcome.php",
	  {
		email:$("#exampleInputEmail1").val(),
		name:$("#exampleInputText1").val()
	  },
	  function(data,status){
		$(".contentPhp").html(data);
	  });
	});

	$("#contactButton").click(function(e){
		e.preventDefault();
	  $.post("contactUsForm.php",
	  {
		email:$("#exampleInputEmail1").val(),
		name:$("#exampleInputText1").val()
	  },
	  function(data,status){
		$("#formContact").html(data);
	  });
	});

	var countSection; //global variable for scroll function(counter for sections)

	//scroll on pages counter function
	$("section").hover(function(){
		if($(this).attr("data-section")){
		//console.log("here");
		//console.log("new value: "+	$(this).attr("data-section"));
		countSection = $(this).attr("data-section");
		}
	}); 


	//scroll on pages
	$("#controler").click(function(){
		if(countSection >= 3){
		countSection = 0;
		}
		countSection++;
		var abc = $("section[data-section="+countSection+"]").offset().top;
		abc = abc -50;
		//console.log("højde section er :" + abc);
		$('html, body').animate({
		scrollTop: abc
		}, 1000);
		if(countSection >1){
			$(".navbar-default").css("opacity","1");
		} else{
			$(".navbar-default").css("opacity","0.8");
		}
	});

//set height for sections to make sure, they are always full screen height
/*
$(document).ready(function(){
	var abc = $(window).height();
	$(".outerbox, .soundcloud").height(abc);
	//TODO: hvis skærmstørrelsen ændres eller skærmstørrelsen ikke er over 1140, så skal højden ikke sættes
	//TODO: skal kun virke på store skærme - de andre skal tilpasses individuelt
	$(window).resize(function(){
		$(".outerbox, .soundcloud").height(abc);
	});
});


	


//making sure, that footer is in screen too
$(document).ready(function(){
	if($(window).width()>=1140){
	var abc = $(window).height();
	var abc = abc - $("footer").height();
	console.log("abc er: " + abc)
	$(".soundcloud").height(abc);
	}
});
*/


//prevent scroll on certain elements
/*
$( '#slides, .outerbox, .teampart, footer' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
    var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;

    this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
    e.preventDefault();
});
/*
$(window).ready(function(){
	var abc = $(window).height();
	abc = abc -50;
	$(".leftFrontendimg, .rightFrontendimg").height(abc);
});
*/
	//starting slideshow 
	$('.full-width').fullWidth();

	//isotope product code product.php
	$('#container').isotope({
	  // options
	  itemSelector : '.item',
	  layoutMode : 'fitRows'
	});

	// cache container
	var $container = $('#container');
	// initialize isotope
	$container.isotope({
	  // options...
	});

	$('#acc').click(function(){
	// filter items when filter link is clicked
	$('.acc').removeClass("inactive");
	$(".menu").not(".acc").removeClass("active").addClass("inactive");
	});
	$('#pedal').click(function(){
	// filter items when filter link is clicked
	$('.pedal').removeClass("inactive");
	$(".menu").not(".pedal").removeClass("active").addClass("inactive");
	});
	$('#amp').click(function(){
	// filter items when filter link is clicked
	$('.amp').removeClass("inactive");
	$(".menu").not(".amp").removeClass("active").addClass("inactive");
	});
		// Animation complete.	
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
  
	});
  	//instagram feed about.php
	 var feed = new Instafeed({
        get: 'tagged',
        tagName: 'carlmartin',
        clientId: '6bff3672c9b343c587f108f47afd756e',
		limit:6,
		template: '<a class="col-xs-6 col-sm-4 col-md-4 col-lg-2 animation" href="{{link}}"><img class="imagesInst" src="{{image}}" /> </a> '
    });
    feed.run();
	
	//Single product slideshow
	
	$(".rslides").responsiveSlides({
	  auto: false,             // Boolean: Animate automatically, true or false
	  speed: 500,            // Integer: Speed of the transition, in milliseconds
	  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
	  pager: false,           // Boolean: Show pager, true or false
	  nav: true,             // Boolean: Show navigation, true or false
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
	  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
	  manualControls: "",     // Selector: Declare custom pager navigation
	  namespace: "rslides",   // String: Change the default namespace used
	  before: function(){},   // Function: Before callback
	  after: function(){}     // Function: After callback
	});


	//dealer show
		$(".countryDealers").css("display","none");
		$(".dealer").click(function(){
			var countryId = $(this).attr("id");
			$(".countryDealers").css("display","none");
			$(".countryDealers"+"#"+countryId).css("display","inline-block");
		});
	
	//frontpage content boxes hover effect
	
	$("#productFeat").hover(function(){
	
		if($(this).attr("id")=== "productFeat"){
		//console.log("udenfor :" +imgSrc);
		var src = "img/products_hover.png";
			$(this).attr("src",src);
			}
		}, function(){
		
			$(this).attr("src","img/products.png")
		}
	);
	$("#vipNews").hover(function(){
	
		if($(this).attr("id")=== "vipNews"){
		//console.log("udenfor :" +imgSrc);
		var src = "img/vip_hover.png";
			$(this).attr("src",src);
			}
		}, function(){
		
			$(this).attr("src","img/vip.png")
		}
	);
	$("#supportImg").hover(function(){
	
		if($(this).attr("id")=== "supportImg"){
		//console.log("udenfor :" +imgSrc);
		var src = "img/support_hover.png";
			$(this).attr("src",src);
			}
		}, function(){
		
			$(this).attr("src","img/support.png")
		}
	);
	
	
});	
