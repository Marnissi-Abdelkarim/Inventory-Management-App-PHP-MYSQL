
	<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
  if ($Aa=='User'){
?>
  <script type="text/javascript">
    //then it will be redirected
    alert("Page restreinte! Vous serez redirigé vers le point de vente !");
    window.location = "pos.php";
  </script>
<?php
  }           
}
      

$zz = $_POST['id'];
$n=$_POST['nom'];

	   	
		
	 			$query = 'DELETE FROM `category` WHERE `category`.`CATEGORY_ID` ="'.$zz.'"';
					$result = mysqli_query($db, $query) ;
if($result){ ?>

	
	

  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary"> Suppression du Categorie " <?php echo $n ; ?> " avec succes ! </h4>
            </div>
            
            <div class="card-body">

            
               <a href="categories.php" type="button" class="btn btn-primary bg-gradient-primary">Retour</a>   
            </div>
          </div></center>
<?php } else { 
	
	   ?>
	   <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary"> ECHEC Suppression du Categorie " <?php echo $n; ?> "  </h4>
            </div>
            
            <div class="card-body">

            
               <a href="categories.php" type="button" class="btn btn-primary bg-gradient-primary">Retour</a>   
            </div>
          </div></center>
	<?php } ?>
<?php
include'../includes/footer.php';
?>
