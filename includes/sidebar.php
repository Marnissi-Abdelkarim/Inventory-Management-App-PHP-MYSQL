<?php
  require('session.php');
  confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GESTOCK</title>
  <link rel="icon" href="https://www.freeiconspng.com/uploads/sales-icon-7.png">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class='fas fa-dolly' style='margin-left: 12px;'></i>
        </div>
        <div class="sidebar-brand-text mx-3">GESTOCK</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>ACCUEIL</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tables
      </div>
      <!-- Tables Buttons -->
      <li class="nav-item">
        <a class="nav-link" href="customer.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Clients</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="employee.php">
          <i class='far fa-address-book' style='font-size:16px;text-align: center;
    width: 1.25em;font-weight: 900;font-family: "Font Awesome 5 Free";font-size: 0.85rem;
    margin-right: 0.25rem;'></i>
          <span>Employ&eacute;s</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="prodDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-table"></i>
          <span>Produits</span>
        </a>
        <div class="dropdown-menu   "  aria-labelledby="prodDropdown">
                
                <a class="dropdown-item" href="product.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Liste Produits
                </a>
                
                <a class="dropdown-item" href="categories.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cat&eacute;gories Produits
                </a>
              </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="inventory.php">
          <i class="fas fa-fw fa-archive"></i>
          <span>Stocks</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="transaction.php">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Factures</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pos.php">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Vente</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="supplier.php">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Fournisseurs</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Comptes d'utilisateurs</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <?php include_once 'topbar.php'; ?>
