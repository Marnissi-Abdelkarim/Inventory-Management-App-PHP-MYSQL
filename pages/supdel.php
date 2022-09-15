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
    alert("Page restreinte! Vous serez redirigé vers le point de vente!");
    window.location = "pos.php";
  </script>
<?php
  }           
}


  $query = 'SELECT SUPPLIER_ID,COMPANY_NAME FROM supplier WHERE SUPPLIER_ID ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $n=$row['COMPANY_NAME'];
      $zz = $row['SUPPLIER_ID'];
    }
      
?>

  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Etes Vous Sure de Supprimer Founisseur " <?php echo $n; ?> " ? </h4>
              <h6>La suppression de Founisseur " <?php echo $n; ?> " va supprimer tous les elements en relation avec ce fournisseur</h6>
            </div>
            
            <div class="card-body">

            <form role="form" method="post" action="supdel1.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />
           <input type="hidden" name="nom" value="<?php echo $n; ?>" />
              

                <button type="submit" class="btn btn-warning btn-block" style="width: 40%;"><i class="fa fa-edit fa-fw"></i>Confirmer</button>  

              </form> 
               <a href="supplier.php" type="button" class="btn btn-primary bg-gradient-primary">Annuler</a>   
            </div>
          </div></center>

<?php
include'../includes/footer.php';
?>
