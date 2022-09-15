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



?>

            
            <div class="card shadow mb-4 " style="margin-left: auto;margin-right: auto;width: 70%;">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Cat&eacute;gories&nbsp;<a  href="#" data-toggle="modal" data-target="#aModal" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    
                     <th>Cat&eacute;gorie</th>
                     <th>Action</th>
                   </tr>
               </thead>
          <tbody>

<?php                  
    $query = 'SELECT  CNAME, CATEGORY_ID FROM category c ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['CNAME'].'</td>';
                      echo '<td align="right">

                            <div style="display: flex;
                                            flex-direction: row;
                                            flex-wrap: nowrap;
                                            justify-content: space-evenly;
                                            align-items: flex-end">
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="catg_edit.php?action=edit & id='.$row['CATEGORY_ID']. '">
                                    <i class="fas fa-fw fa-edit"></i> Editer
                                  </a>

                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="catg_supp.php?action=supprimer & id='.$row['CATEGORY_ID']. '">
                                    <i class="fas fa-fw fa-trash"></i> Supprimer
                                  </a>
                            </div>

                            </div>
                          </div> </td>';
                echo '</tr> ';
                        }
?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

<?php
include'../includes/footer.php';
?>

  <!-- Categorie Modal-->
  <div class="modal fade" id="aModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter Cat&eacute;gorie</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="catg_transac.php?action=add">
           
           <div class="form-group">
             <input class="form-control" placeholder="Nom cat&eacute;gorie" name="name" required>
           </div>

            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Enregistrer</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Réinitialiser</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>
