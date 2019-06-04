<?php
    session_start();
    if(!isset($_SESSION['em'])){
        header('Location: register.php');
    }
?>
<?php include'./functions/queries.php' ?>

<?php
 

    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
    
      <title>Expenses</title>
    
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="icon" href="../php/img/expenses.png" type="image/x-icon"/>
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <link href="../../Project/css/main.css" rel="stylesheet">
      
    
    </head>
    
    <body id="page-top">
    
      <!-- Page Wrapper -->
      <div id="wrapper">
    
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-hand-holding-usd"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Expenses</div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
    
          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-fw fa-home"></i>
              <span>Home Page</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Interface
          </div>
          <!-- Jurnal -->
          <li class="nav-item">
            <a class="nav-link" href="jurnal.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Jurnal</span></a>
          </li>
          <!-- Expenses -->
          <li class="nav-item">
            <a class="nav-link" href="expenses.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Expenses</span></a>
          </li>
          <!-- Gain -->
          <li class="nav-item">
            <a class="nav-link" href="gain.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Gain</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <i class="fas fa-fw fa-person-booth"></i>
                <span>Profile</span></a>
            </li>
          <!-- Nav Item - Pages Collapse Menu -->
          
        </ul>
        <!-- End of Sidebar -->
    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
          <!-- Main Content -->
          <div id="content">
    
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
    
              <!-- Topbar Search -->
              <form action="expenses.php" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input name="search_q" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button name="btn_search" class="btn btn-primary" type="submit">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
    
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
    
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
    
                <!-- Nav Item - Alerts -->';
?>