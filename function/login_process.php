
<?php include "canection.php";
      

      if(isset($_POST['login_form']) && !empty($_POST['login_form'])){
        



        $validate_response   = input_validation_l();
        
        // print "<pre>";
        // print_r($validate_response);
        // print "</pre>";


        if( $validate_response->status == "error"){


            $_SESSION["error"]    = true;
            $_SESSION["message"]  = $validate_response->message;
            $_SESSION["data"]     = $validate_response->data;

           
        }

      
        $email=$_POST["email"];
        $password=$_POST["password"];

        if($email ==false || $password==false ){
            $message    =   "All data required";
    
            $_SESSION['error']            =   'error';
            $_SESSION['message']    =   $message;

            

        }else{
            
            $cheek ="SELECT * FROM users WHERE email='$email' ";
            $result=$conect->query($cheek);
            
            if($result->num_rows > 0){

                $select="SELECT * FROM users WHERE email='$email' AND password='$password'";
                $result=$conect->query($select);

                if($result->num_rows > 0){

                    $user_data=$result->fetch_object();

                    
                    

                    $_SESSION['login_status'] =1;
                    $_SESSION['login_id'] =$user_data->id;
                   
                    $_SESSION['login_username'] =$user_data->name;
                    $_SESSION['login_email'] =$user_data->email;
                    $_SESSION['login_employee_id'] =$user_data->employee_id;
                    $employee_id= $_SESSION['login_employee_id'] =$user_data->employee_id;

                    
                    
                    $_SESSION['user_type'] =$user_data->user_type;
                    $user_type=$_SESSION['user_type'] =$user_data->user_type;
                    $_SESSION['user_image'] =$user_data->image;

                    
                    
                    
                    
                    
                    

                    $_SESSION['user_mail'] =$email;
                    $is_login_error   = false;

                    $message    =   "Login was successfull";

                    $_SESSION['success']            =   'success';
                    $_SESSION['message']    =   $message;
                    
                

                }else{
                    $is_login_error   = true;
                    $message    =   "Password not matched!";
            
                    $_SESSION['error']            =   'error';
                    $_SESSION['message']    =   $message;


                }
            }else{
                $is_login_error   = true;

                $message    =   "Email not found";
        
                $_SESSION['error']            =   'error';
                $_SESSION['message']    =   $message;


            }

            if($is_login_error==false){
               
                if($user_type== "1"){
                    header('Location:dashbord.php');
                    exit;

                }elseif($user_type== "2"){
                    header('Location:dashbord.php');

                }elseif($user_type== "3"){
                    header('Location:dashbord.php');
                   

                }
                elseif($user_type== "4"){
                    header('Location:dashbord.php');
                   

                }

                if(isset($_POST["checkbox"]) && !empty($_POST["checkbox"])){
       
                    $cookie_index = "login_name";
                    $cookie_value = $email;
                    $expire_date = time()+(60);
                    setcookie($cookie_index,$cookie_value,$expire_date);
            
                   
            
                    $cookie_index = "login_password";
                    $cookie_value = $_POST["password"];
                    setcookie($cookie_index,$cookie_value,$expire_date);
            
            
                    $cookie_index = "remember_me";
                    $cookie_value = 1;
                    setcookie($cookie_index,$cookie_value,$expire_date);
            
                };
            
               


            }elseif($is_login_error==true){
                header('Location:index.php');
                exit;

            }
       

        }
        
    }

    
    function input_validation_l(){
        $has_error    = false;
        $error_data   =  [];
        $required     = "is required";

        
        if(empty($_POST["email"])){
            $has_error   = true;
            $error_data["error_field"]["email"]  = "Email".$required;
        }else{
            $_SESSION['form_field']['email'] =   $_POST['email'];
        }
       
        if(empty($_POST["password"])){
            $has_error   = true;
            $error_data["error_field"]["password"]  = "Password".$required;
        }else{
            $_SESSION['form_field']['password'] =   $_POST['password'];
        }
      

    

        if($has_error){
            $response     = (object)[
               "status"   => "error",
               "message"  => "please fill-up all required data",
               "data"     => $error_data,
            ];   
        }else{
           $response  = (object)[
            "status"  => "success",
            "message" => "no error",
           ];
        }

        return $response;
    }

?>