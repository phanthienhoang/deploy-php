<?php 

    session_start();
    // session_destroy();
    if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
      $data = explode('@',$_SESSION['sess_name']);
      $name = $data[0];
    } else { 
      header("Location: /login");
    }

 
 ?>


<?php require_once VIEW . 'layout-admin\header.php'?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php require_once VIEW . 'layout-admin\navbar.php'?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once VIEW . 'layout-admin\sidebar.php'?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    <!-- Main content -->

    <div id="text-admin">
        <?php require_once VIEW . 'admin\home-page.php' ?>

    </div>
<!--  -->


     <!-- Main content -->
  </div>
</div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  </div>

  <?php require_once VIEW . 'layout-admin\footer.php'?>