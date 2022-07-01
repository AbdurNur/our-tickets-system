
<?php 
include "canection.php";
    

    if(isset($_POST['update_btn']) && !empty($_POST['update_btn'])){


        // print"<pre>";
        // print_r($_POST);
        // print"</pre>";
        // exit;




                    
            $validate_response   = input_validation_update();
           
         

            
            if( $validate_response->status == "error"){
                $_SESSION["error"]    = true;
                $_SESSION["message"]  = $validate_response->message;
                $_SESSION["data"]     = $validate_response->data;
            
            }


            //dublucate cheek
            if( $validate_response->status == "success"){
                

              

               
                $id          =trim($_POST['hidden']);
                $name               =trim($_POST['name']);
                $email              =trim($_POST['email']);
               
                $empley_id              =trim($_POST['empley_id']);
               

                $image_name=$_FILES["image"]['name'];

                $tmp_name=$_FILES["image"]['tmp_name'];

                $file_name='images./'.$image_name;
                $upload=move_uploaded_file($tmp_name,$file_name);

                
                $old_password           = $_POST["password"];
                $new_password           = $_POST["new_password"];
                $updated_at         =  date("Y-m-d H:i:s");


                    if(empty($name)||empty($email)||empty($empley_id)||empty($old_password)||empty($new_password)){
                        $message    =   "All data required";
    
                        $_SESSION['error']            =   'error';
                        $_SESSION['message']    =   $message;
            

                    }else{

                        // $select="SELECT * FROM ticket_regestration_table WHERE password='$old_password'";
                        // $result=$conect->query($select);

                        

                        

                        // if($result->num_rows>0){
                        //     $message    =   "Password not macth";
    
                        //     $_SESSION['error']            =   'error';
                        //     $_SESSION['message']    =   $message;
                            
                                
                           
                            
                        // }else{     
                                                                
                                

                                    $update       = "UPDATE  ticket_regestration_table SET name='$name',email='$email',employee_id='$empley_id',password='$new_password',image='$image_name',update_at='$updated_at' WHERE id =$id";


                                    $result = $conect->query($update);
                                                                
                                    


                                    if($result){
                                        $message    =   "Update  Success";
        
                                        $_SESSION['success']            =   'success';
                                        $_SESSION['message']    =   $message;

                                        header('Location:index.php');
                                        exit;




                                    }
                           
                        
                    }                     
           }
    }
        
        
    function input_validation_update(){
        $has_error    = false;
        $error_data   =  [];
        $required     = " is required";

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
        
        
        
        if(empty($_POST["password"])){
            $has_error   = true;
            $error_data["error_field"]["password"]  = "Password".$required;
        }else{
            $_SESSION['form_field']['password'] =   $_POST['password'];
        }

        if(empty($_POST["new_password"])){
            $has_error   = true;
            $error_data["error_field"]["new_password"]  = "New_password".$required;
        }else{
            $_SESSION['form_field']['new_password'] =   $_POST['new_password'];
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