<!-- header part -->
<?php session_start();
include "header.php";

?>
  

  <!-- Top Navbar -->
  <?php
  include "top_nav.php";
  ?>
  
  <!-- /.navbar -->

  <!-- Left Sidebar Container -->
  <?php
  
  include "left_nav.php"; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php
        session_message();
        ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active">  Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    

    
  </div>
  <!-- /.content-wrapper -->






<!-- footer part -->
<?php
include "footer.php";

?>
