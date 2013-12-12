<?php
	include('header.php');
?>

<section class="row" data-section="1" id="slides">

<div class="full-width">
    <div class="inner">
        <div class="slide">
            <div>
                Lorem ipsum dolor sit amet, consectetur. <br>
                Curabitur molestie elit et ultricies vehicula.
            </div>
            <img src="img/CMbanner2.png" width="1400" height="933">
        </div>
        <div class="slide">
            <!-- Caption can be omitted without any change in functionality -->
            <img src="img/CMbanner2.png" width="1400" height="933">
        </div>
    </div>
    <div class="controls">
        <a href="#" class="left">&lt;</a>
        <a href="#" class="right">&gt;</a>
    </div>
    <div class="slide-nav"></div>
</div>


</section>
<section class="row outerbox" data-section="2">
	<!-- links for ajax content in next row ".featuredbackground" -->
	<article class="col-lg-3 frontendimg leftFrontendimg">
		<article class="col-lg-12 col-xs-12 frontendimg">
			<a href="product tester tester1" class="tester tester1"><img src="img/productimg.jpg" class="img-responsive "></a>
			
		</article>
		<article class="col-lg-12 col-xs-12 frontendimg">
			<a href="product tester tester2" class="tester tester2"><img src="img/vip.jpg" class="img-responsive"></a>
			
		</article>
		<article class="col-lg-12 col-xs-12 frontendimg">
			<a href="product tester" class="tester tester3"><img src="img/support.jpg" class="img-responsive"></a>
			
		</article>
	</article>	
	<article class="col-lg-9 contentPhp frontendimg rightFrontendimg">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>


  <div class="carousel-inner slider1">
    <div class="item active">
      <img src="img/purple_moon.png" alt="product-image" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="img/z.png" alt="product-image" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="img/gray_bg.png" alt="product-image" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
  </div>


  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	<article class="col-lg-4 idNewsletter" >
	</article>
</section>




<!--<section class="row featuredbackground"> -->


	
	<!-- different iframes/iflash-objects for soundcloud test -->
	<!--
	<object style="margin:auto" height="81" width="50%" id="myPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
  <param name="movie" value="http://player.soundcloud.com/player.swf?url=https://soundcloud.com/classic-rock-guitar-rick/rolling-stones-tumbling-dice&enable_api=true&object_id=myPlayer"></param>
  <param name="allowscriptaccess" value="always"></param>
  <embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url=https://soundcloud.com/classic-rock-guitar-rick/rolling-stones-tumbling-dice&enable_api=true&object_id=myPlayer" type="application/x-shockwave-flash" width="50%" name="myPlayer"></embed>
</object>

<object style="margin:auto" height="81" width="50%" id="myPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
  <param name="movie" value="http://player.soundcloud.com/player.swf?url=https://soundcloud.com/classic-rock-guitar-rick/jimi-hendrixs-wind-cries-mary&enable_api=true&object_id=myPlayer"></param>
  <param name="allowscriptaccess" value="always"></param>
  <embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url=https://soundcloud.com/classic-rock-guitar-rick/jimi-hendrixs-wind-cries-mary&enable_api=true&object_id=myPlayer" type="application/x-shockwave-flash" width="50%" name="myPlayer"></embed>
</object>
<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/122272486&amp;color=2d2926&amp;auto_play=false&amp;show_artwork=true"></iframe>
-->
<!-- </section> -->
<section class="row teampart" data-section="3">
	<article class="col-lg-6">
	<img src="img/team1.png" class="team img-responsive">
	</article>
	<article class="col-lg-6">
	<h4 class="teamheadline">MEET THE TEAM</h4>
	<p class="teamtext"> Our vision at CarlMartin is to make the sounds we hear in our heads come to life. Just like you!
To do this you need a bunch of dedicated nerdy guys, who don’t mind tweaking sounds hours on end, in order to take your sound to the next level.</p>
	<a href="#"><button type="button" class="btn btn-lg btn-success teambutton">Meet the guys</button></a>
	</article>
	
	
</section>


<?php
	include('footer.php');
?>