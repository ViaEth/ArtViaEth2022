<?php

//Start of Matomo Tracker Code
function Matomo_Tags(){
?>
	<!-- Matomo Tag Manager -->
	<!-- End Matomo Tag Manager -->
<?php
}
add_action('wp_head', 'Matomo_Tags');
//End of Matomo Tracker Code

//Custom Footer Credits
function storefront_credit() {
?>
	<div class="site-info">
		<center>
			A <a href="https://ViaEth.io/">Via.Eth</a> Project.
			<br/>
			Copyright &copy;
			<script>
                		var mydate=new Date()
                		var year=mydate.getYear()+1900
				document.write(year)
			</script>
			<br/>
			<a title="Go to top" href="#">Go to top &uarr;</a>
		</center>
	</div><!-- .site-info -->
<?php
}

?>
