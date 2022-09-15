<?php require('session.php');?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "index.php";
          </script>
    <?php
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sales And Inventory</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: rgb(93,167,166);
             background: linear-gradient(90deg, rgba(93,167,166,1) 0%, rgba(6,56,56,1) 100%);">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-light">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class=" shadow">

              <div class="">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenue à GESTOCK</h1>
                  </div>
                  <form class="user" role="form" action="processlogin.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Nom d'utilisateur" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Mot de passe" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Se Souvenir de moi</label>
                      </div>
                    </div>
                    <button class="btn  btn-user btn-block" style="background-color:#26706f;color:#FFFFFF" type="submit" name="btnlogin">Login</button>
                    <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div> -->
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>









