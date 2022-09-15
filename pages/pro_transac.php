<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $pc = $_POST['prodcode'];
              $name = $_POST['name'];
              $desc = $_POST['description'];
              $qty = $_POST['quantity'];
              
              $pr = $_POST['price']; 
              $cat = $_POST['category'];
              $supp = $_POST['supplier'];
              $dats = $_POST['datestock']; 
              $datex=$_POST['dateexpir'];
        
              switch($_GET['action']){
                case 'add':  
                
                    $query = "INSERT INTO product
                              (PRODUCT_ID, PRODUCT_CODE, NAME, DESCRIPTION, QTY_STOCK, ON_HAND, PRICE, CATEGORY_ID, SUPPLIER_ID, DATE_STOCK_IN ,Expiration_date)
                              VALUES (Null,'{$pc}','{$name}','{$desc}','{$qty}',0,{$pr},{$cat},{$supp},'{$dats}','{$datex}')";
                    mysqli_query($db,$query)or die ('Erreur lors de la mise à jour de la base de données '.$query);

                break;
              }
            ?>
              <script type="text/javascript">window.location = "product.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>
