<!-- header part -->
<?php session_start();
    include "function/ticket_process.php";
    include "array.php";
    include "header.php";
    

?>
  

 <!-- Top Navbar -->
 <?php
  include "top_nav.php";
  ?>
  
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Left Sidebar Container -->
<?php
 include "left_nav.php";    
?>
<?php
  
    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ticket From</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dasbord.php">Home</a></li>
              <li class="breadcrumb-item active">New Ticket</li>
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
                <div class="col-md-4 common">
                    <!-- general form elements -->
                    <div class="card p-5 ">
                        <div class=" common">
                            <h1>Creat Ticket</h1>
                            <?php session_message(); ?>
                        </div>
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form  method="POST" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Employee Id</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="employee_id"  value="<?php echo $_SESSION['login_employee_id'];?>">
                                </div>
                                

                                <div class="form-group">                                   
                                                         
                                    <label>Problem Details</label>
                                    <textarea class="form-control" rows="3" name="problem_details" placeholder="Enter Your Problem Details..."><?php  if(isset($_SESSION['form_field']['problem_details']) 
                                    && !empty($_SESSION['form_field']['problem_details'])){ echo $_SESSION['form_field']['problem_details']; 
                                    unset($_SESSION['form_field']['problem_details']); } ?></textarea>
                                      
                                   

                                     
                                    
                                    

                                    <?php 
                                    if(isset($_SESSION['data']['error_field']['problem_details']) && !empty($_SESSION['data']['error_field']['problem_details'])){ 
                                  ?>
                                      <span class="text-danger">
                                        <?php 
                                        
                                        echo $_SESSION['data']['error_field']['problem_details'];

                                        unset($_SESSION['data']['error_field']['problem_details']);
                                        ?>
                                      </span>

                                  <?php 
                                    }                             
                                  ?>
                                
                                </div>


                                <div class="mt-3 col-md-12">
                                  <label for="inputState" class="form-label">Priority</label>
                                  <select class="form-select" aria-label="" name="priority" >
                                      <option> </option>
                                    
                                    <?php  foreach($problem_priority as $key=>$val){ ?>

                                      
                                                          
                                      <option value="<?php echo $val ?>" <?php if(isset($_SESSION['form_field']['priority']) && 
                                      $_SESSION['form_field']['priority'] == $val)
                                      { echo "selected";  unset($_SESSION['form_field']['priority']); } ?>>
                                          <?php echo $val ?>
                                      </option>



                                      <?php } ?>



                                  </select>
                                  
                                  <?php 
                                    if(isset($_SESSION['data']['error_field']['priority']) && !empty($_SESSION['data']['error_field']['priority'])){ 
                                  ?>
                                      <span class="text-danger">
                                        <?php 
                                        
                                        echo $_SESSION['data']['error_field']['priority'];

                                        unset($_SESSION['data']['error_field']['priority']);
                                        ?>
                                      </span>

                                  <?php 
                                    }                             
                                  ?>

                                </div>

                                <div class="col-md-12">

                                    <label for="formFile" class="form-label">Choose file</label>
                                    
                                    <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-file-arrow-up"></i></span>
                                    <input class="form-control" name="problem_file" type="file" id="formFile">

                                    
                                    
                                    </div>
                                  </div>

                                
                                

                              </div>
                              <!-- /.card-body -->

                                <div class="" >
                                    <div class="common">
                                    <input type="submit" class="btn btn-primary" name="ticket_btn" value="Submit">

                                    </div>
                                    
                                </div>
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
