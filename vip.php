	<h3 class="vip-headline">Be a VIP member </h3>
	<p> Receive info about new products and participate in our FREE product contests</p>
	<article class="col-lg-6">
		<form role="form" id="formVip">
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputText1">Name</label>
			<input type="text" name="personName" class="form-control" id="exampleInputText1" placeholder="Enter name">
		  </div>
		  <a href="#" id="newsletterButton" class="btn btn-success newsletter">Submit</a>
		</form>
	</article>	
	<article class="col-lg-6">
		<img src="img/vip_bg.png" alt="vip" class="img-responsive vipClub">
	</article>
	<script>
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
	</script>