

<div class="container">
    <footer class="footer">
    	<p class="kings">Yawar Fighters - Todos los derechos no están reservados.</p> 
    	<!-- This should go at the end of your footer, it will load the JS scripts you set to load here in functions.php -->

     	<?php wp_footer(); ?>
    </footer>
</div>
<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("pjslide");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 3000); // Change image every 2 seconds
    console.log("está con 3");
}
</script>
</body>
</html>