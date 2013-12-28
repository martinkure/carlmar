<?php
	include('header.php');
?>

<section class="row" data-section="1" id="slides">

<div class="full-width">

    <div class="inner">
        <div class="slide">
            
            <span class="img-responsive" data-picture data-alt="product image">
        <span class="img-responsive" data-src="img/CMbanner_d.jpg"></span>
        <span class="img-responsive" data-src="img/CMbanner_t.jpg"      data-media="(max-width : 1099px)"></span>
		<span class="img-responsive" data-src="img/CMbanner_hori.jpg"      data-media="(max-width : 799px)"></span>
        <span class="img-responsive" data-src="img/CMbanner_m.jpg" data-media="(max-width: 700px)"></span>
		<!--<span class="img-responsive" data-src="img/CMbanner2_tHori.png"     data-media="(min-width: 320px) and (max-width: 480px) and (orientation:landscape)"></span> -->
		  <noscript>
            <img class="img-responsive" src="img/CMbanner_d.jpg" alt="product image">
        </noscript> 
    </span>
			
			
        </div>
        <div class="slide">
            
            <span class="img-responsive" data-picture data-alt="product image">
         <span class="img-responsive" data-src="img/CMbanner2_d.jpg"></span>
        <span class="img-responsive" data-src="img/CMbanner2_t.jpg"      data-media="(max-width : 1099px)"></span>
		<span class="img-responsive" data-src="img/CMbanner2_hori.jpg"      data-media="(max-width : 799px)"></span>
		<!--<span class="img-responsive" data-src="img/CMbanner2_tHori.png"     data-media="(min-width: 320px) and (max-width: 480px) and (orientation:landscape)"></span> -->
        <span class="img-responsive" data-src="img/CMbanner2_m.jpg" data-media="(max-width: 700px)"></span>
		  <noscript>
            <img class="img-responsive" src="img/CMbanner_d.jpg" alt="product image">
        </noscript> 
    </span>
        </div>
		<div class="slide">
            
            <span class="img-responsive" data-picture data-alt="product image">
         <span class="img-responsive" data-src="img/CMbanner3_d.jpg"></span>
        <span class="img-responsive" data-src="img/CMbanner3_t.jpg"      data-media="(max-width : 1099px)"></span>
		<span class="img-responsive" data-src="img/CMbanner3_hori.jpg"      data-media="(max-width : 799px)"></span>
		<!--<span class="img-responsive" data-src="img/CMbanner2_tHori.png"     data-media="(min-width: 320px) and (max-width: 480px) and (orientation:landscape)"></span> -->
        <span class="img-responsive" data-src="img/CMbanner3_m.jpg" data-media="(max-width: 700px)"></span>
		  <noscript>
            <img class="img-responsive" src="img/CMbanner3_d.jpg" alt="product image">
        </noscript> 
    </span>
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
	<section class="row middleContainer hidden-mobile">
		
	<article class="col-lg-4 col-xs-4 hide-xs mobileHidden">
			<a class="tester" id="featuredProduct"><img id="productFeat" src="img/products.png" alt="productImg" class="img-responsive contentImg"></a>
			
		</article>
		<article class="col-lg-4 col-xs-4 mobileHidden">
			<a class="tester" id="newsletter"><img src="img/vip.png" id="vipNews" alt="vip" class="img-responsive contentImg"></a>
			
		</article>
	
		<article class="col-lg-4 col-xs-4 mobileHidden">
			<a class="tester" id="support"><img id="supportImg" src="img/support.png" alt="support" class="img-responsive contentImg"></a>
			
			</article>
		</section>
			<!-- only display links on mobile/remove javascript -->
		<section class="row middleContainer mobileShow">
			<article class="col-md-6 col-xs-6">
				<a href="product.php">
					<img src="img/productimg.jpg" class="img-responsive" alt="productimage">
				</a>
			</article>
			<article class="col-md-6 col-xs-6">
				<a href="support.php" >
					<img src="img/support.jpg" class="img-responsive" alt="support">
				</a>
			</article>
		</section>
	</section>	
	<section class="row contentPhp visible-md visible-lg mobileHidden"> 
		<section class="row mobileHidden">
		<!--
		<article class="col-lg-6">
			<img src="img/small-plex.png" alt="product" class="img-responsive">
		</article>
		<article class="col-lg-6"> 
			<h2>Analog sound something cool, something cool, something cool</h2>
		</article>
	-->
		</section>
	</section>



<section class="row teampart" data-section="3">
	<section class="row">
	<article class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
	<img src="img/team1.png" class="team img-responsive" alt="team">
	</article>
	<article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h4 class="teamheadline">MEET THE TEAM</h4>
	<p class="teamtext"> Our vision at CarlMartin is to make the sounds we hear in our heads come to life. Just like you!
To do this you need a bunch of dedicated nerdy guys, who don’t mind tweaking sounds hours on end, in order to take your sound to the next level.</p>
	<a href="about.php"><button type="button" class="btn btn-lg btn-success teambutton">Meet the guys</button></a>
	</article>
	
	</section>
</section>


<?php
	include('footer.php');
?>