<?php
	include('header.php');
?>

<section class="row" data-section="1" id="slides">

<nav class="navbar navbar-default topSection"  role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
 

  <!-- Collect the nav links, forms, and other content for toggling -->

    <ul id="filters" class="nav navbar-nav nav-center aboutmenu"> 
    	<li class="rightMenu"><a data-filter=".acc" id="acc" href="#">Accessories</a></li>    
	  <li class="rightMenu"><a data-filter=".amp" id="amp" href="#">Amplifiers</a></li>
       <li class="active rightMenu"><a data-filter=".pedal" id="pedal" href="#">Pedal</a></li>
      
      
    </ul>
</nav>
<section class="active menu pedal">
<nav class="navbar navbar-default whiteback"  role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
 

  <!-- Collect the nav links, forms, and other content for toggling -->
  <!--VIC CHANGE -->
    <ul id="filters" class="nav navbar-nav nav-center aboutmenuSub headerline">
      <li><a href="#" data-filter="*">all</a></li>
      <li><a href="#" data-filter=".pro">pro-series</a></li>
	  <li><a href="#" data-filter=".vintage">vintage series</a></li>
      <li><a href="#" data-filter=".distortion">distorstion</a></li>
      <li><a href="#" data-filter=".delay">delay</a></li>
      <li><a href="#" data-filter=".reverb">reverb</a></li>
      <li><a href="#" data-filter=".modulation">modulation</a></li>
      
    </ul>
</nav>
</section>


  <!-- Brand and toggle get grouped for better mobile display -->
 <section class="inactive menu amp">
<nav class="navbar navbar-default whiteback"  role="navigation">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <!--
    <ul id="filters" class="nav navbar-nav nav-center aboutmenuSub whiteback headerline">
      <li><a href="#" data-filter="*">all</a></li>
      <li><a href="#" data-filter=".grey">custom shop 50</a></li>
	  <li><a href="#" data-filter=".purple">custom shop stack</a></li>
      -->
   </section>   
    </ul>
</nav>
	


<section class="inactive menu acc">
<nav class="navbar navbar-default whiteback"  role="navigation">
<!-- I commet because i think its not necessary since there is not other menues
<ul id="filters" class="nav navbar-nav nav-center aboutmenuSub headerline">
  <li><a href="#" data-filter="*">show all amp </a></li>
  <li><a href="#" data-filter=".grey">grey</a></li>
  <li><a href="#" data-filter=".yellow">yellow</a></li>
  <li><a href="#" data-filter=".purple">purple moon</a></li>
</ul>
-->
</section>

<!--
<section class="amp inactive menu">
<ul id="filters">
  <li><a href="#" data-filter="*">show all amp </a></li>
  <li><a href="#" data-filter=".grey">grey</a></li>
  <li><a href="#" data-filter=".yellow">yellow</a></li>
  <li><a href="#" data-filter=".purple">purple moon</a></li>
</ul>
</section>
<section class="acc inactive menu">
<ul id="filters">
  <li><a href="#" data-filter="*">show all acc</a></li>
  <li><a href="#" data-filter=".grey">grey acc</a></li>
  <li><a href="#" data-filter=".yellow">yellow acc</a></li>
  <li><a href="#" data-filter=".purple">purple moon acc</a></li>
</ul>
</section>
</nav>
-->

<article id="container">
     <a href="singleproduct.php"><div class="item pro delay pedal"><img src="img/ac_tone.jpg"/></div></a> 
     <a href="singleproduct.php"><div class="item pro pedal" ><img src="img/grey.png"/></div></a> 
   <a href="singleproduct.php"><div class="item pro pedal"><img src="img/bass_driv.png"/></div></a>
     <a href="singleproduct.php"><div class="item pro pedal"><img src="img/compressor.png"/></div></a>
     <a href="singleproduct.php"><div class="item pro pedal"><img src="img/the_fuzz.png"/></div></a>
    <a href="singleproduct.php"><div class="item pro delay pedal" ><img src="img/contour.png"/></div></a>
   <a href="singleproduct.php"><div class="item pro pedal"><img src="img/tremovibe.png"/></div></a>
   <a href="singleproduct.php"><div class="item pro modulation pedal" ><img src="img/AC-Tone.png"/></div></a>
   <a href="singleproduct.php"><div class="item pro distortion pedal"><img src="img/small.png"/></div></a>
    <a href="singleproduct.php"><div class="item purple pedal"><img src="img/purple.png"/></div></a>
    <a href="singleproduct.php"><div class="item vintage pedal"><img src="img/classic_chorus.png"/></div></a>
    <a href="singleproduct.php"><div class="item reverb pedal" ><img src="img/classic_flang.png"/></div></a>
   <a href="singleproduct.php"><div class="item vintage distortion pedal"><img src="img/classic_opto_copressor.png"/></div></a>
     <a href="singleproduct.php"><div class="item vintage pedal"><img src="img/classic_opto_copressor_blue.png"/></div></a>
     <a href="singleproduct.php"><div class="item vintage pedal"><img src="img/red_rep.png"/></div></a>

   <a href="singleproduct.php"><div class="item vintage pedal"><img src="img/dc_drive.png"/></div></a>
     <a href="singleproduct.php"><div class="item vintage pedal"><img src="img/red_repeat.png"/></div></a>
    <a href="singleproduct.php"><div class="item reverb modulation pedal" ><img src="img/rock_bug.png"/></div></a>
   <a href="singleproduct.php"><div class="item vintage delay distortion pedal"><img src="img/ZWAH.png"/></div></a>

    <!--amplifier has to show up only when u are in the amp nav bar -->
    <a href="singleproduct.php"><div class="item amp"><img src="img/combinator.png"/></div></a>
     <a href="singleproduct.php"><div class="item amp"><img src="img/custom_shop.png"/></div></a>
     <a href="singleproduct.php"><div class="item amp"><img src="img/blond.png"/></div></a>
    <!--has to be in acc menu -->
     <a href="singleproduct.php"><div class="item acc"><img src="img/powerjack.png"/></div></a>
     <a href="singleproduct.php"><div class="item reverb modulation acc" ><img src="img/cm_tuner.png"/></div></a>
     <a href="singleproduct.php"><div class="item reverb modulation acc" ><img src="img/power_supply.png"/></div></a>
    
  
</article>


</section>

<?php
	include('footer.php');
?>