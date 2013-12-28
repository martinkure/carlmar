	
	<article class="col-lg-6">
		
	<img src="img/supportform.png" alt="vip" class="img-responsive vipClub">
	</article>
	<article class="col-lg-6">
	<h3 class="vip-headline">Support </h3>
	<p> Hey there! Have a question about Carl Martin gear? We’re glad to help.</p>
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
	<script>
		//form submit
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
	</script>