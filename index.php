<?php session_start();

include "function/login_process.php";
include "function/session_info.php";


    if(isset( $_SESSION['login_status'])){

       
    
    
    
    }
    date_default_timezone_set('Asia/Dhaka');
    


 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='img/112-1124337_logo-ticket-png-transparent-png1.png'>
  <title>Ticket Systyme</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="theme/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="theme/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="theme/plugins/summernote/summernote-bs4.min.css">
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- css_style -->
  <link rel="stylesheet" href="style.css">

</head>
<body>

    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand img" href="#">
        <img src="img/112-1124337_logo-ticket-png-transparent-png1.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        
        
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<div class="container-fluid " style="background-color: rgb(8, 115, 78);height: 43rem;">
    <div class="row ">
        <div class="col-md-3 froms " >
            <form class="row from" method="POST">
                    <div class=" heading">
                        <?php session_message(); ?>
                        <h1>Login</h1>

                        

                    </div>
                    
                    <div class="input-group col-md-12">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-paper-plane"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1"  value="<?php  if(isset($_SESSION['form_field']['email']) 
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
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock" ></i></span>
                        <input type="password" class="form-control"id="password_1"  name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"  value="<?php   if(isset($_SESSION['form_field']['name']) 
                                    && !empty($_SESSION['form_field']['password'])){ echo $_SESSION['form_field']['password']; 
                                    unset($_SESSION['form_field']['password']); } ?>">
                        <span class="input-group-text" id="addon-wrapping" id="icon"><i
                         class="fa-solid fa-eye-slash" onclick="myFunction()"></i></span>
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
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox" value="1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                      </div>

                    </div>
                                          
                      <div class="col-12 mt-5" >
                          <input class="btn btn-primary" name="login_form" type="submit" value="Login">
                      </div>
            </form>

        </div>
    </div>
</div>



<?php
include "footer.php";

?>