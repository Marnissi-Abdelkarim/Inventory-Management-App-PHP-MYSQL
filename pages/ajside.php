<!-- SIDE PART NA SUMMARY -->
        <div class="card-body col-md-3">
        <?php   
        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
                  $lessvat = ($total / 1.12) * 0.12;
                  $netvat = ($total / 1.12);
                  $addvat = ($total / 1.12) * 0.12;

             endforeach;

//DROPDOWN FOR CUSTOMER
$sql = "SELECT CUST_ID, FIRST_NAME, LAST_NAME
        FROM customer
        order by FIRST_NAME asc";
$res = mysqli_query($db, $sql) or die ("Error SQL: $sql");

$opt = "<select class='form-control'  style='border-radius: 0px;' name='customer' required>
        <option value='' disabled selected hidden>Select Customer</option>";
  while ($row = mysqli_fetch_assoc($res)) {
    $opt .= "<option value='".$row['CUST_ID']."'>".$row['FIRST_NAME'].' '.$row['LAST_NAME']."</option>";
  }
$opt .= "</select>";
// END OF DROP DOWN
        ?>  
<div class="form-group">
  <h6><b>Entrer la Date de Facture:</b></h6>
             <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="Date de Facture" name="date" required>
           </div>
          
          <div class="form-group row text-left mb-3">
            <div class="col-sm-12 text-primary btn-group">
            <?php echo $opt; ?>
            <a  href="#" data-toggle="modal" data-target="#poscustomerModal" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a>
            </div>

          </div>
          <div class="form-group row mb-2">

            <div class="col-sm-5 text-left text-primary py-2">
              <h6>
                Total
              </h6>
            </div>
            <div class="col-sm-7">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($total, 2); ?>" readonly name="subtotal">
              </div>
            </div>

          </div>
          <div class="form-group row mb-2">

            <div class="col-sm-5 text-left text-primary py-2">
              <h6>
                Moins de TVA
              </h6>
            </div>

            <div class="col-sm-7">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($lessvat, 2); ?>" readonly name="lessvat">
              </div>
            </div>

          </div>
          <div class="form-group row mb-2">

            <div class="col-sm-5 text-left text-primary py-2">
              <h6>
                Net de TVA
              </h6>
            </div>

            <div class="col-sm-7">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($netvat, 2); ?>" readonly name="netvat">
              </div>
            </div>

          </div> 
          <div class="form-group row mb-2">

            <div class="col-sm-5 text-left text-primary py-2">
              <h6>
                Ajouter la TVA
              </h6>
            </div>

            <div class="col-sm-7">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($addvat, 2); ?>" readonly name="addvat">
              </div>
            </div>

          </div>
          <div class="form-group row text-left mb-2">

            <div class="col-sm-5 text-primary">
              <h6 class="font-weight-bold py-2">
                Total
              </h6>
            </div>

            <div class="col-sm-7">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">€</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($total, 2); ?>" readonly name="total">
              </div>
            </div>

          </div>
<?php endif; ?>       
          <button type="submit" class="btn btn-block btn-success" >Enregistrer</button>

       

        </form>
      </div> <!-- END OF CARD BODY -->

     </div>

