<?php session_start();

include "function/user_pro_update_porccess.php";
include "array.php";


?>



<!-- header part -->
<?php
include "header.php";

?>
    
 <!-- Top Navbar -->
  <?php
  include "emplyee_top_nav.php";
  ?>
  
  

  <!-- Left Sidebar Container -->
<?php
  
  include "employee_left_nav.php";  
?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update From</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dasbord.php">Home</a></li>
              <li class="breadcrumb-item active">Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="height:62.5rem ;">
            <div class="row ">
                <div class="col-md-4 froms ">
                    <form class="row from shadow-lg p-3 mb-5 bg-body " method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="hidden" value="<?php echo $_SESSION['login_id']?>">
                        <div class=" heading">
                            <h1>User Update</h1>
                            <?php session_message(); ?>

                        </div>
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" aria-label="Username"
                            aria-describedby="basic-addon1"  value="<?php  if(isset($_SESSION['form_field']['name']) 
                                            && !empty($_SESSION['form_field']['name'])){ echo $_SESSION['form_field']['name']; 
                                            unset($_SESSION['form_field']['name']); } ?>">

                                <?php   
                                            
                                            if(isset($_SESSION['data']['error_field']['name']) && !empty($_SESSION['data']['error_field']['name'])){

                                            ?>
                                            <div class="error_show">
                                                <span class="text-danger">
                                                    <?php

                                                        echo $_SESSION['data']['error_field']['name'];

                                                        unset($_SESSION['data']['error_field']['name']);

                                                    ?>
                                                    </span>
                                            </div>

                                <?php } ?>

                        </div>

                        <div class="input-group col-md-12">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-paper-plane"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Usernamearia-describedby"  aria-describedby="basic-addon1" value="<?php  if(isset($_SESSION['form_field']['email']) 
                                            && !empty($_SESSION['form_field']['email'])){ echo $_SESSION['form_field']['email']; 
                                            unset($_SESSION['form_field']['email']); } ?>">

                                <?php   
                                            
                                            if(isset($_SESSION['data']['error_field']['email']) && !empty($_SESSION['data']['error_field']['email'])){

                                            ?>
                                            <div class="error_show">
                                                <span class="text-danger">
                                                    <?php

                                                        echo $_SESSION['data']['error_field']['email'];

                                                        unset($_SESSION['data']['error_field']['email']);

                                                    ?>
                                                    </span>
                                            </div>

                                <?php } ?>
                        
                        </div>

                        <div class="input-group col-md-12">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-address-card"></i></span>
                            <input type="text" class="form-control" name="empley_id" placeholder="Empley Id"
                                aria-label="Username" aria-describedby="basic-addon1"
                                value="<?php  if(isset($_SESSION['form_field']['empley_id']) 
                                            && !empty($_SESSION['form_field']['empley_id'])){ echo $_SESSION['form_field']['empley_id']; 
                                            unset($_SESSION['form_field']['empley_id']); } ?>">

                                <?php   
                                            
                                            if(isset($_SESSION['data']['error_field']['empley_id']) && !empty($_SESSION['data']['error_field']['empley_id'])){

                                            ?>
                                            <div class="error_show">
                                                <span class="text-danger">
                                                    <?php

                                                        echo $_SESSION['data']['error_field']['empley_id'];

                                                        unset($_SESSION['data']['error_field']['empley_id']);

                                                    ?>
                                                    </span>
                                            </div>

                                <?php } ?>
                                                                        
                        </div>

                       

                        <div class="input-group col-md-12">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" id="password_1" name="password" placeholder="Old Password"
                                aria-label="Username" aria-describedby="basic-addon1"
                                value="<?php  if(isset($_SESSION['form_field']['password']) 
                                            && !empty($_SESSION['form_field']['password'])){ echo $_SESSION['form_field']['password']; 
                                            unset($_SESSION['form_field']['password']); } ?>">


                                <span class="input-group-text" id="addon-wrapping" id="icon"><i class="fa-solid fa-eye-slash"
                                onclick="myFunction()"></i></span>
                                <?php   
                                            
                                            if(isset($_SESSION['data']['error_field']['password']) && !empty($_SESSION['data']['error_field']['password'])){

                                            ?>
                                            <div class="error_show">
                                                <span class="text-danger">
                                                    <?php

                                                        echo $_SESSION['data']['error_field']['password'];

                                                        unset($_SESSION['data']['error_field']['password']);

                                                    ?>
                                                    </span>
                                            </div>

                                <?php } ?>

                        </div>
                        <div class="input-group col-md-12">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" id="password_2" name="new_password" placeholder="New Password"
                                aria-label="Username" aria-describedby="basic-addon1"
                                value="<?php  if(isset($_SESSION['form_field']['new_password']) 
                                            && !empty($_SESSION['form_field']['new_password'])){ echo $_SESSION['form_field']['new_password']; 
                                            unset($_SESSION['form_field']['new_password']); } ?>">


                                <span class="input-group-text" id="addon-wrapping" id="icon"><i class="fa-solid fa-eye-slash"
                                onclick="myFunction_2()"></i></span>
                                <?php   
                                            
                                            if(isset($_SESSION['data']['error_field']['new_password']) && !empty($_SESSION['data']['error_field']['new_password'])){

                                            ?>
                                            <div class="error_show">
                                                <span class="text-danger">
                                                    <?php

                                                        echo $_SESSION['data']['error_field']['new_password'];

                                                        unset($_SESSION['data']['error_field']['new_password']);

                                                    ?>
                                                    </span>
                                            </div>

                                <?php } ?>

                        </div>

                        <div class="col-md-12">

                            <label for="formFile" class="form-label">Profile Image</label>
                            <input class="form-control" name="image" type="file" id="formFile">

                        </div>
                    
                        <div class="col-12 mt-5">
                            <input class="btn btn-primary" name="update_btn" type="submit" value="Update">
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </section>


</div>


<!-- footer part -->


<?php
include "footer.php";

?>