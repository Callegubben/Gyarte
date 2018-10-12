<?php 
	$id = 1;
	include_once 'header.php';
	$title = "SELECT title FROM menu WHERE id = $id";
?>
<section class="main-container">
	<div class="main-wrapper">
		
		<?php
			if (isset($_SESSION['u_id'])) {
				echo '<p class="p1">Välkommen!<p>';
				echo '<a href="Index.php?menu id=1"><button type="button">banner</button></a>';
				echo '<a href="Index.php?menu id=2"><button type="button">$title</button></a>';
				echo '<textarea rows="4" cols="50">Hello World!</textarea>';
			}
			else {
				echo '<h2>Home</h2>';
			}
		?>
	</div>
</section>

<?php 
	include_once 'footer.php';
?>