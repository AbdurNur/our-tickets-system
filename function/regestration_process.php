

<?php 
include "canection.php";
    

    if(isset($_POST['registration_form']) && !empty($_POST['registration_form'])){



                    
            $validate_response   = input_validation();

            
            if( $validate_response->status == "error"){
                $_SESSION["error"]    = true;
                $_SESSION["message"]  = $validate_response->message;
                $_SESSION["data"]     = $validate_response->data;
            
            }


            //dublucate cheek
            if( $validate_response->status == "success"){
                

                $user_type         =$_POST['user_type'];

               
                $name               =trim($_POST['name']);
                $email              =trim($_POST['email']);
                $empley_id          =trim($_POST["empley_id"]);

                $image_name=$_FILES["image"]['name'];

                $tmp_name=$_FILES["image"]['tmp_name'];

                $file_name='images./'.$image_name;
                $upload=move_uploaded_file($tmp_name,$file_name);

                
                $password           = $_POST["password"];
                $created_at         =  date("Y-m-d H:i:s");


                    if(empty($user_type)||empty($name)||empty($email)||empty($empley_id)||empty($password)){
                        $message    =   "All data required";
    
                        $_SESSION['error']            =   'error';
                        $_SESSION['message']    =   $message;
            

                    }else{


                        $email_cheek ="SELECT* FROM ticket_regestration_table WHERE email='$email'";
                        $result=$conect->query($email_cheek);

                        if($result->num_rows>0){
                            $message    =   "This email already exist,Please try to anothert Email";
    
                            $_SESSION['error']            =   'error';
                            $_SESSION['message']    =   $message;
                            
                                
                           
                            
                        }else{                    
                                //$speachil_chr=preg_match('@[^\w@',$password);
                                if(strlen($password)==7||strlen($password)<8){
                                    $message    =   "Password Must be six chreacte";
    
                                    $_SESSION['error']            =   'error';
                                    $_SESSION['message']    =   $message;
                                                           
                                                                
                                }else{
                                    $insert = " INSERT INTO ticket_regestration_table ( user_type,name,email,employee_id,password,image,created_at) VALUES ('$user_type', '$name', '$email', '$empley_id','$password','$image_name','$created_at')";

                                    $result = $conect->query($insert);

                                    if($result){
                                        $message    =   "Rigestration Success";
        
                                        $_SESSION['success']            =   'success';
                                        $_SESSION['message']    =   $message;




                                    }
                                   

                                    
                                
                                   
                                

                                }

                            
                        }
                    }
                        
                    
            }



    }
        
        
    function input_validation(){
        $has_error    = false;
        $error_data   =  [];
        $required     = "is required";

        if(empty($_POST["name"])){
            $has_error   = true;
            $error_data["error_field"]["name"]  = "Name".$required;
        }else{
            $_SESSION['form_field']['name'] =   $_POST['name'];
        }
        if(empty($_POST["email"])){
            $has_error   = true;
            $error_data["error_field"]["email"]  = "Email".$required;
        }else{
            $_SESSION['form_field']['email'] =   $_POST['email'];
        }
        if(empty($_POST["empley_id"])){
            $has_error   = true;
            $error_data["error_field"]["empley_id"]  = "Empley_id".$required;
        }else{
            $_SESSION['form_field']['empley_id'] =   $_POST['empley_id'];
        }
        
        if(empty($_POST["user_type"])){
            $has_error   = true;
            $error_data["error_field"]["user_type"]  = "User_type".$required;
        }else{
            $_SESSION['form_field']['user_type'] =   $_POST['user_type'];
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