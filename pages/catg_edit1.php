<?php
include('../includes/connection.php');
			$zz = $_POST['id'];
            $cat = $_POST['category'];
		
	 			$query = 'UPDATE category set CNAME ="'.$cat.'" WHERE CATEGORY_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

							
?>	
	<script type="text/javascript">
			alert("Vous avez mis à jour le produit avec succès.");
			window.location = "categories.php";
		</script>
