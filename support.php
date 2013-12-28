<?php
	include('header.php');
?>

<section class="row slider1" data-section="1">
	<article class="col-lg-7 col-sm-7 col-md-7 col-xs-12">
		<h2> Contact us </h2>
		<h4> Hey there! Have a question about Carl Martin gear? We’re glad to help. </h4>
		<p>Please visit our Products pages and our Frequently Asked Questions. Many of the most common questions are answered there. If you can’t find your answer, please feel free to send us your question. We try our very best to respond to requests within 1 business day.</p>
		<form role="form" id="formContact">
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputText1">Question</label>
			<textarea type="textarea" name="textarea" class="form-control" id="exampleInputText1" placeholder="Enter question"></textarea>
		  </div>
		  <a href="#" id="contactButton" class="btn btn-success newsletter">Submit</a>
		</form>
	</article>	

	<article class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
		<a href="#"><h4> Visit the FAQ</h4> </a>
		<h4> Or find us on facebook </h4>
		<a href="http://facebook.com"><img class="img-responsive" alt="facebook" src="img/facebook.jpg"></a>
	</article>
</section>


<?php
	include('footer.php');
?>