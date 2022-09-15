<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>
          <div class="row show-grid">
            <!-- Customer ROW -->
            <div class="col-md-3">
            <!-- Customer record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class=" text-xs font-weight-bold text-uppercase mb-1" style="color: #4e73df " >Total Clients</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800" style="text-align: center;font-size: 2.5rem;">
                        <?php 
                        $query = "SELECT COUNT(*) FROM customer";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                        ?> 
                      </div>
                      <a href="customer.php" class="small-box-footer" style="font-size:0.8rem;font-weight:0.9;">En savoir plus <i class="fa fa-arrow-circle-right" ></i></a>
                    </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-800" style="font-size: 2.8em;"></i>
                      </div>
                      
                  </div>
                </div>
              </div>
            </div>

            <!-- Supplier record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Fournisseurs</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800" style="text-align: center;font-size: 2.5rem;">
                        <?php 
                        $query = "SELECT COUNT(*) FROM supplier";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                        ?> 
                      </div>
                      <a href="supplier.php" class="small-box-footer" style="font-size:0.8rem;font-weight:0.9;">En savoir plus <i class="fa fa-arrow-circle-right" ></i></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-800" style="font-size: 2.8em;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
            <!-- Employee ROW -->
          <div class="col-md-3">
            <!-- Employee record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Employ&eacute;s</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800" style="text-align: center;font-size: 2.5rem;">
                        <?php 
                        $query = "SELECT COUNT(*) FROM employee";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                        ?> 
                      </div>
                      <a href="employee.php" class="small-box-footer" style="font-size:0.8rem;font-weight:0.9;">En savoir plus <i class="fa fa-arrow-circle-right" ></i></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-800" style="font-size: 2.8em;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- User record -->
            

          </div>
          <!-- PRODUCTS ROW -->
          <div class="col-md-3">
            <!-- Product record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 5px;">
                  <div class="row no-gutters align-items-center">

                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Produits</div>
                      
                        
                      <div class="h6 mb-0 font-weight-bold text-gray-800" style="text-align: center;font-size: 2.5rem;">
                          <?php 
                          $query = "SELECT COUNT(*) FROM product";
                          $result = mysqli_query($db, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "$row[0]";
                            }
                          ?> 
                      </div>
                        
                      
                      <a href="product.php" class="small-box-footer" style="font-size:0.8rem;font-weight:0.9;">En savoir plus <i class="fa fa-arrow-circle-right" ></i></a>
                    </div>

                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-800" style="font-size: 2.8em;"></i>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            </div>
            
          <!-- RECENT PRODUCTS -->
                <div class="col-lg-3">
                    <div class="card shadow h-100">
                      <div class="card-body" >
                        <div class="row no-gutters align-items-center">

                          <div class="col-auto">
                            <i class="fa fa-th-list fa-fw"></i> 
                          </div>

                        <div class="panel-heading"> Produits recents
                        </div>
                        <div class="row no-gutters align-items-center mt-1">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-0 text-gray-800">
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="list-group">
                              <?php 
                                $query = "SELECT NAME, PRODUCT_CODE FROM product order by PRODUCT_ID DESC LIMIT 10";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {

                                    echo "<a href='#' class='list-group-item text-gray-800'>
                                          <i class='fa fa-tasks fa-fw'></i> $row[0]
                                          </a>";
                                  }
                              ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="product.php" class="btn btn-default btn-block">Voir tous les produits</a>
                        </div>
                        <!-- /.panel-body -->
                    </div></div></div></div></div></div>
          <!--
          <div class="col-md-3">
           <div class="col-md-12 mb-2">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><i class="fas fa-list text-danger">&nbsp;&nbsp;&nbsp;</i>Recent Products</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                        <?php 
                          $query = "SELECT NAME FROM product order by PRODUCT_ID DESC LIMIT 10";
                          $result = mysqli_query($db, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<ul style='list-style-position: outside'>";
                              echo "<li>$row[0]</li>";
                              echo "</ul>";
                            }
                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div> -->
            

          </div>
<div style="margin-top:470px">
<?php
include'../includes/footer.php';
?>
</div>