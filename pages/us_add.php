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
$sql = "SELECT DISTINCT TYPE, TYPE_ID FROM type order by TYPE_ID asc";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='type'>
        <option>Select Type</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['TYPE_ID']."'>".$row['TYPE']."</option>";
  }

$opt .= "</select>";
?>
<script>
window.onload = function() {  

  // ---------------
  // basic usage
  // ---------------
  var $ = new City();
  $.showProvinces("#province");
  $.showCities("#city");

  // ------------------
  // additional methods 
  // -------------------

  // will return all provinces 
  console.log($.getProvinces());
  
  // will return all cities 
  console.log($.getAllCities());
  
  // will return all cities under specific province
  console.log($.getCities("Batangas")); 
  
}
</script>
          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Ajouter Utilisateur</h4>
            </div>
            <a href="user.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Retour</a>
            <div class="card-body">
              <div class="table-responsive">
                        <form role="form" method="post" action="us_transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Prenom" name="firstname" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nom" name="lastname" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nom d'utilisateur" name="username" required>
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                            </div>
                            <div class="form-group">
                              <?php
                                echo $opt;
                              ?>
                            </div>
                            <div class="form-group">
                              <select class="form-control" id="province" placeholder="Pays" name="province" required></select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" id="city" placeholder="Ville" name="city" required></select>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Numéro de téléphone" name="phonenumber" required>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i>Enregister</button>
                            <button type="reset" class="btn btn-danger btn-block"><i class="fa fa-times fa-fw"></i>Reinitialiser</button>
                            
                        </form>  
                      </div>
            </div>
          </div></center>
        
<?php
include '../includes/footer.php';
?>
