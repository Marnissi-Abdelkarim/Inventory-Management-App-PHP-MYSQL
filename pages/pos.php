<?php
include'../includes/connection.php';
include'../includes/topp.php';
// session_start();
$product_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'addpos')){
    if(isset($_SESSION['pointofsale'])){
        
        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['pointofsale']);
        
        //create sequantial array for matching array keys to products id's
        $product_ids = array_column($_SESSION['pointofsale'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['pointofsale'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['pointofsale'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['pointofsale'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['pointofsale'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['pointofsale'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['pointofsale'] = array_values($_SESSION['pointofsale']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
                ?>
                <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow mb-0">
                  <div class="card-header py-2">
                    <h4 class="m-1 text-lg text-primary">Cat&eacute;gorie Produit</h4>
                  </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
<!------------------------------------------------------------------->
  <?php  $query = 'SELECT * FROM category ORDER by CATEGORY_ID ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($category = mysqli_fetch_assoc($result)):
                                                
                                      ?>
                                       <li class="nav-item">
                                <a class="nav-link" href="#" data-target="#<?php echo $category['CNAME'];?>" data-toggle="tab"><?php echo $category['CNAME']; ?></a>
                              </li>
                                    
                                      <?php endwhile; ?>
                                    
                                            <?php
                                        endif;
                                    endif;   
                                    ?>
<!------------------------------------------------------------------->
  

                            
                              <li class="nav-item">
                                <a class="nav-link" href="#others" data-toggle="tab">Tous les Produits</a>
                              </li>
                            </ul>

<?php include 'postabpane.php'; ?>

        <div style="clear:both"></div>  
        <br />  
        <div class="card shadow mb-4 col-md-12">
        <div class="card-header py-3 bg-white">
          <h4 class="m-2 font-weight-bold text-primary">Vente</h4>
        </div>
        
      <div class="row">    
      <div class="card-body col-md-9">

        <div class="table-responsive">

        <!-- trial form lang   -->
<form role="form" method="post" action="pos_transac.php?action=add">
    <?php if(isset($_GET['message'])) { ?>
            <div class="alert alert-danger" role="alert" >
            <?=htmlspecialchars($_GET['message'])?>            
            </div>
        <?php }?>
  <div class="form-group" style="width: fit-content;">
  <h6><b>Saisir Numero du Facture :</b></h6>
  <input type="text" class="form-control" placeholder="Numero du Facture" name="trid" required>
  </div>

  <input type="hidden" name="employee" value="<?php echo $_SESSION['FIRST_NAME']; ?>">
  <input type="hidden" name="role" value="<?php echo $_SESSION['JOB_TITLE']; ?>">
  
        <table class="table">    
        <tr> 
               
             <th width="55%">Nom Produit</th>  
             <th width="10%">Quantit&eacute;</th>  
             <th width="15%">Prix</th>  
             <th width="15%">Totale</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php  

        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>  
        <tr> 
         
          <td>
            <input type="hidden" name="name[]" value="<?php echo $product['name']; ?>">
            <?php echo $product['name']; ?>
          </td>  

           <td>
            <input type="hidden" name="quantity[]" value="<?php echo $product['quantity']; ?>">
            <?php echo $product['quantity']; ?>
          </td>  

           <td>
            <input type="hidden" name="price[]" value="<?php echo $product['price']; ?>">
            € <?php echo number_format($product['price']); ?>
          </td>  

           <td>
            <input type="hidden" name="total" value="<?php echo $product['quantity'] * $product['price']; ?>">
            € <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>

            <input type="hidden" name="id[]" value="<?php echo $product['id']; ?>">
            
            
               <a href="pos.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn bg-gradient-danger btn-danger"><i class="fas fa-fw fa-trash"></i></div>
               </a>
           </td>  
        </tr>
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
             endforeach;  
        ?>


        <?php  
        endif;
        ?>  
        </table> 
         </div>
       </div> 

<?php
include 'posside.php';
include '../includes/footer.php';
?>
