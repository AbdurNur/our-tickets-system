<!-- header part -->
<?php session_start();
    include "header.php";

?>
  


  <!-- Top Navbar -->
  <?php
  include "emplyee_top_nav.php";
  ?>
  
  <!-- /.navbar -->

  
  <!-- /.navbar -->

  <!-- Left Sidebar Container -->
<?php
  
  include "employee_left_nav.php";  
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="emplyee_dasbord.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->


    <section class="content">
        <div class="container-fluid">
            <div class="row ">
              
              



                <!-- left column -->
                <div class="col-md-6 common " id="profile_main_div">
                     <!-- general form elements -->
                      <div class="card float-left border border-primary" id="profile_img" style="height: 378px;">
                              <div class="common " id="profile_img">
                                
                                   <img class="border border-danger " src='images/<?php  echo $_SESSION['user_image']?>'>
                                      
                                  
                                  
                              </div>
                              <!-- /.card-header -->
                              <!-- form start -->
                            <form>
                              <div class="card-body">
                                <div class="form-group" style="text-align:center;">
                                  <h2>
                                    <?php
                                      if($_SESSION['user_type']=="1"){
                                        echo"Admin";

                                      }elseif($_SESSION['user_type']=="2"){
                                        echo"Employee User";

                                      }elseif($_SESSION['user_type']=="3"){
                                        echo"Service Staf";

                                      }
                                    
                                    ?>

                                  </h2>
                                  
                                    
                                    
                                </div>
                                <div class="form-group" >
                                  <?php echo $_SESSION['login_email'];?>
                                  
                                   
                                </div>
                                
                                                                
                              </div>
                                <!-- /.card-body -->

                                
                            </form>
                                  
                              <!-- /.card-body -->
                                  
                      </div>
                    <!-- /.card -->
                    <!-- general form elements -->
                    <div class="card col-md-5 border border-danger " style="height: 378px; ">
                        <div class=" common profile_detail">
                            <h1>Profile</h1>
                        </div>
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                              <div class="card-body">
                                <div class="form-group border p-2">
                                    <label for="exampleInputEmail1">Name</label>
                                    <div class="name">
                                    <?php echo $_SESSION['login_username'];?>
                                    </div>
                                    
                                   
                                </div>
                                <div class="form-group border p-2">
                                    <label for="exampleInputEmail1">Email</label>
                                    <div class="email" style="font-size:14px ;">
                                     
                                        <?php echo $_SESSION['login_email'];?>

                                      
                                    

                                    </div>
                                    
                                </div>
                                <div class="form-group border p-2">
                                    <label for="exampleInputEmail1">Employee Id</label>
                                    <div class="id">
                                      
                                    <?php echo $_SESSION['login_employee_id'];?>

                                    </div>
                                   
                                </div>
                                                                
                              </div>
                                <!-- /.card-body -->

                                
                            </form>
                    </div>
                    <!-- /.card -->

                

                    

                </div>
                <!--/.col (left) -->
            
            </div>
            <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->


<!-- footer part -->
<?php
    include "footer.php";

?>
