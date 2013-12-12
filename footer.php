	<footer class="row">
		<article class="col-lg-3 footerFirstContent">
			<h3>Get in touch </h3>
			<p> Lorem Ipsum is simply dummy
of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
		</article>
		<article class="col-lg-3">
		<h3>Contact </h3>
		<p><span class="glyphicon glyphicon-map-marker"></span> Adresse</p>
		<p><span class="glyphicon glyphicon-envelope"></span> info@carlmartin.com</p>
		<p><span class="glyphicon glyphicon-earphone"></span> 8967 4523</p>

		</article>
		<article class="col-lg-3">

			<iframe width="100%" height="95%" style="padding:5px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=da&amp;q=R%C3%A5dmandsvej+24,+Gren%C3%A5,+Danmark&amp;oq=Raadmandsvej+24&amp;sll=37.0625,-95.677068&amp;sspn=41.818029,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=R%C3%A5dmandsvej+24,+8500+Gren%C3%A5,+Danmark&amp;t=m&amp;z=14&amp;ll=56.398883,10.87333&amp;output=embed"></iframe> 
		</article>
		<article class="col-lg-2">
			<img class="img-responsive" src="img/social.png" alt="socials">
		</article>
	</footer>
	
<script src="js/jquery-1.10.2.js"></script>
<script src="js/affix.js"></script> 
<script src="js/alert.js"></script> 
<script src="js/button.js"></script> 
<script src="js/carousel.js"></script> 
<script src="js/collapse.js"></script> 
<script src="js/dropdown.js"></script> 
<script src="js/modal.js"></script> 
<script src="js/scrollspy.js"></script> 
<script src="js/tab.js"></script> 
<script src="js/transition.js"></script> 
<script src="js/tooltip.js"></script>
<script src="js/popover.js"></script> 
<script src="js/jquery.scrollTo.js"></script>
<script src="js/newslider.js"></script>
<script src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/instafeed.js"></script>

<!--<script src="js/jquery.slideme-1.19.69.js"></script> -->

<script>

//getting ajax frontpage content
$(".tester").click(function(e){
  e.preventDefault();
  var getUrl;
  if($(this).offset().top === $(".tester1").offset().top){
	getUrl = "product.php";	
  } else if ($(this).offset().top === $(".tester2").offset().top) {
	getUrl = "vip.php";
  } else{
	getUrl = "vip.php";
  }
  $.get(getUrl,function(data,status){
    $(".contentPhp").html(data);
	console.log(status);
  });/*
  var abc1 =$(this).parent().find(".arrow");
	var abc = $(".arrow").not(abc1);
	$(this).parent().find(".arrow").css("opacity","1").fadeIn(1000).addClass("arrow");
	$(abc).fadeOut(0);*/
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

var countSection; //global variable for scroll function(counter for sections)

//scroll on pages counter function
$("section").hover(function(){
	if($(this).attr("data-section")){
	//console.log("here");
	console.log("new value: "+	$(this).attr("data-section"));
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
	console.log("højde section er :" + abc);
	$('html, body').animate({
	scrollTop: abc
	}, 1000);
	if(countSection >1){
		$(".navbar-default").css("opacity","1");
	} else{
		$(".navbar-default").css("opacity","0.8");
	}
});

//set height for slideshow
$(document).ready(function(){
	if($(window).width()>=1140){
	var abc = $(window).height();
	$(".slider1, .outerbox").height(abc);
	}
	//TODO: hvis skærmstørrelsen ændres eller skærmstørrelsen ikke er over 1140, så skal højden ikke sættes
	//TODO: skal kun virke på store skærme - de andre skal tilpasses individuelt
});


$(window).scroll(function(){
	var scrollTop     = $(window).scrollTop(),
        elementOffset = $('.outerbox').offset().top;
        distance      = (elementOffset - scrollTop);
		if(distance <= 100){
			$(".navbar-header").height(40);
		} else {
			$(".navbar-header").height("");
		}
	
});

$( '#slides, .outerbox, .teampart, footer' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
    var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;

    this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
    e.preventDefault();
});

$(window).ready(function(){
	var abc = $(window).height();
	abc = abc -50;
	$(".leftFrontendimg, .rightFrontendimg").height(abc);
});

$('.full-width').fullWidth();

//isotope product arrangement

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
  	
	 var feed = new Instafeed({
        get: 'tagged',
        tagName: 'northside',
        clientId: '6bff3672c9b343c587f108f47afd756e',
		limit:6,
		template: '<a class="col-xs-12 col-md-6 col-lg-2 animation" href="{{link}}"><img class="imagesInst" src="{{image}}" /><p class="caption">{{caption}} &nbsp;{{likes}} likes</p> </a> '
    });
    feed.run();

</script>

</body>

</html> 