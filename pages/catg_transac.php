<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              
              $name = $_POST['name'];
               
        
              switch($_GET['action']){
                case 'add':  
                
                    $query = "INSERT INTO category
                              (CATEGORY_ID, CNAME)
                              VALUES (Null,'{$name}')";
                    mysqli_query($db,$query)or die ('Erreur lors de la mise à jour de la catégorie dans la base de données '.$query);
                    
                break;
              }
            ?>
              <script type="text/javascript">window.location = "categories.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>
