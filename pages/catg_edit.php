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
    alert("Page restreinte! Vous serez redirigé vers le point de vente");
    window.location = "pos.php";
  </script>
<?php
  }           
}


  $query = 'SELECT CNAME, CATEGORY_ID FROM category WHERE CATEGORY_ID ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $D = $row['CNAME'];
      $zz = $row['CATEGORY_ID'];
    }
      
?>

  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Modifier Cat&eacute;gorie</h4>
            </div>
            <a href="categories.php" type="button" class="btn btn-primary bg-gradient-primary">Annuler</a>
            <div class="card-body">

            <form role="form" method="post" action="catg_edit1.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />
              
              
              
              
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Nom Categorie :
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Nom Categorie" name="category" value="<?php echo $D; ?>" required>
                </div>
              </div>
              <hr>

                <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Mettre à jour</button>
              </form>  
            </div>
          </div></center>

<?php
include'../includes/footer.php';
?>
