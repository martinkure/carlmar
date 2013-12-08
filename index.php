<?php
	include('header.php');
?>
<section class="row outerbox">
	<!-- links for ajax content in next row ".featuredbackground" -->
	<div class="outer1">
		<a href="product" class="tester tester1"> <div class="left box1"></div><img class="arrow"  src="img/arrow.png"></a>
	</div>
	<div class="outer2">
		<a href="product" class="tester tester2"><div class="right box2"></div><img class="gone arrow"  src="img/arrow.png"></a>
	</div>		
</section>



</section>
<section class="row featuredbackground">

	<p>Dette er section text </p>
	
	<!-- different iframes/objects for soundcloud test -->
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

</section>


<?php
	include('footer.php');
?>