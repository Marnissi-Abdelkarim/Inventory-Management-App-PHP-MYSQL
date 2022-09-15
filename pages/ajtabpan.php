
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <!---------------->
                               <?php  $query = 'SELECT * FROM category ORDER by CATEGORY_ID ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($categori = mysqli_fetch_assoc($result)):
                                                  
                                      ?>

                              <!---------------->
                              <!-- 1ST TAB -->
                                <div class="tab-pane fade in mt-2" id="<?php echo $categori['CNAME'];?>">
                                  <div class="row">
                                      <?php  $query1 = "SELECT * FROM product p WHERE CATEGORY_ID='{$categori['CATEGORY_ID']}' GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC";
                                        $result1 = mysqli_query($db, $query1);

                                        if ($result1):
                                            if(mysqli_num_rows($result1)>0):
                                                while($product = mysqli_fetch_assoc($result1)):
                                                //print_r($product);
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="AjouterFacture.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                          <div class="products">
                                              <h6 class="text-info"><?php echo $product['NAME']; ?></h6>
                                              <h6>€ <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-info"
                                                     value="Ajouter" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile; ?>
                                    </div>
                                </div>
                                            <?php
                                        endif;
                                    endif;   
                                    ?>
                                    <?php endwhile; ?>
                                    
                                            <?php
                                        endif;
                                    endif;   
                                    ?>
                              
                              <!-- 8th TAB -->
                                <div class="tab-pane fade in mt-2" id="others">
                                  <div class="row">
                                      <?php  $query2 = 'SELECT * FROM product  GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result2 = mysqli_query($db, $query2);

                                        if ($result2):
                                            if(mysqli_num_rows($result2)>0):
                                                while($product = mysqli_fetch_assoc($result2)):
                                                //print_r($product);
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="AjouterFacture.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                          <div class="products">
                                              <h6 class="text-info"><?php echo $product['NAME']; ?></h6>
                                              <h6>€ <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-info"
                                                     value="Add" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- /.panel-body -->
                      </div>
                    </div>
                  </div>
