
</main>
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

<script>
$(".tester").click(function(e){
  e.preventDefault();
  $.get("product.php",function(data,status){
    $(".featuredbackground").html(data);
  });
  var abc1 =$(this).parent().find(".arrow");
	var abc = $(".arrow").not(abc1);
	$(this).parent().find(".arrow").fadeIn(1000);
	$(abc).fadeOut(500);
});

</script>

</body>

</html> 