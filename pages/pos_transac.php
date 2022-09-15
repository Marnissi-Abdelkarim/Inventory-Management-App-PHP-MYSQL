<?php
include'../includes/connection.php';
session_start();

              $date = $_POST['date'];
              $customer = $_POST['customer'];
              $subtotal = $_POST['subtotal'];
              $lessvat = $_POST['lessvat'];
              $netvat = $_POST['netvat'];
              $addvat = $_POST['addvat'];
              
              
              $emp = $_POST['employee'];
              $rol = $_POST['role'];
              
              $today = $_POST['trid'];
              $total =$_POST['subtotal'];

              $montantHT=$subtotal;
              $TVA=$lessvat;
              $Remise=$netvat;
              $montantTTC=$montantHT+$TVA-$Remise;
              
              $countID = count($_POST['name']);
             
             $query33 = "SELECT * FROM transaction WHERE TRANS_D_ID='{$today}'";
                    $result1 = mysqli_query($db, $query33);
              if(mysqli_num_rows($result1)>0){
              $message="Numero de facture est déjà existe ,veuillez choisir un autre numero";
              header("Location:pos.php?message=$message");
              }
              else{
                $ana=0;
                 for($i=1; $i<=$countID; $i++)
                  {
                    $query99 = "SELECT NAME,QTY_STOCK FROM product WHERE PRODUCT_ID='".$_POST['id'][$i-1]."' ";
                     $result99=mysqli_query($db,$query99)or die (mysqli_error($db));
                     $row99 = mysqli_fetch_assoc($result99);  
                     if($row99['QTY_STOCK']>=$_POST['quantity'][$i-1])
                      {$ana++;}
                     else{
                      $message2="ERREUR ";
                      header("Location:pos.php?message=$message2");


                      exit();
                     }
                  }
                if($ana==$countID){
                  
                
              // echo "<table>";
              switch($_GET['action']){
                case 'add':  
                for($i=1; $i<=$countID; $i++)
                  {
                    // echo "'{$today}', '".$_POST['name'][$i-1]."', '".$_POST['quantity'][$i-1]."', '".$_POST['price'][$i-1]."', '{$emp}', '{$rol}' <br>";
                    $query92 = "SELECT ON_HAND,QTY_STOCK FROM product WHERE PRODUCT_ID='".$_POST['id'][$i-1]."' ";
                    $result92=mysqli_query($db,$query92)or die (mysqli_error($db));
                     $row92 = mysqli_fetch_assoc($result92); 
                     $a= $row92['QTY_STOCK']-$_POST['quantity'][$i-1];
                     $b=$row92['ON_HAND']+$_POST['quantity'][$i-1];
                     $query54 = 'UPDATE product set QTY_STOCK="'.$a.'", ON_HAND="'.$b.'" WHERE
          PRODUCT_ID ="'.$_POST['id'][$i-1].'"';
          $result54 = mysqli_query($db, $query54) or die(mysqli_error($db));

                    $query = "INSERT INTO `transaction_details`
                               (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`, `EMPLOYEE`, `ROLE`)
                               VALUES (Null, '{$today}', '".$_POST['name'][$i-1]."', '".$_POST['quantity'][$i-1]."', '".$_POST['price'][$i-1]."', '{$emp}', '{$rol}')";

                    mysqli_query($db,$query)or die (mysqli_error($db));

                    }
                    $query111 = "INSERT INTO `transaction`
                               (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`)
                               VALUES (Null,'{$customer}','{$countID}','{$montantHT}','{$TVA}','{$Remise}','{$montantTTC}','{$total}','{$date}','{$today}')";
                    mysqli_query($db,$query111)or die (mysqli_error($db));

                break;
              }
                    unset($_SESSION['pointofsale']);

               ?>
              <script type="text/javascript">
                alert("Facture creer avec succ\u00e8s.");
                window.location = "transaction.php";
              </script>
          </div>
        <?php }}?>





























<?php
              // switch($_GET['action']){
              //   case 'add':     
              //       $query = "INSERT INTO transaction_details
              //                  (`ID`, `PRODUCTS`, `EMPLOYEE`, `ROLE`)
              //                  VALUES (Null, 'here', '{$emp}', '{$rol}')";
              //       mysqli_query($db,$query)or die ('Error in Database '.$query);
              //       $query2 = "INSERT INTO `transaction`
              //                  (`TRANS_ID`, `CUST_ID`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `CASH`, `DATE`, `TRANS_D_ID`)
              //                  VALUES (Null,'{$customer}','{$subtotal}','{$lessvat}','{$netvat}','{$addvat}','{$total}','{$cash}','{$date}','{$today}'')";
              //       mysqli_query($db,$query2)or die ('Error in updating Database2 '.$query2);
              //   break;
              // }

              // mysqli_query($db,"INSERT INTO transaction_details
              //                 (`ID`, `PRODUCTS`, `EMPLOYEE`, `ROLE`)
              //                 VALUES (Null, 'a', '{$emp}', '{$rol}')");

              // mysqli_query($db,"INSERT INTO `transaction`
              //                 (`TRANS_ID`, `CUST_ID`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `CASH`, `DATE`, `TRANS_DETAIL_ID`)
              //                 VALUES (Null,'{$customer}',{$subtotal},{$lessvat},{$netvat},{$addvat},{$total},{$cash},'{$date}',(SELECT MAX(ID) FROM transaction_details))");

              // header('location:posdetails.php');

            ?>
<!--  <script type="text/javascript">
      alert("Transaction successfully added.");
      window.location = "pos.php";
      </script> -->