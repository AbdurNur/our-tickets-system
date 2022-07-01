<?php
include "canection.php";

if(isset($_POST['ticket_btn']) && !empty($_POST['ticket_btn'])){
   

    $validate_response   = input_validation_ticket();
    
    

    
    
    $employee_id          =trim($_POST['employee_id']);
    $problem_details      =trim($_POST['problem_details']);
    $priority             =trim($_POST['priority']);

    $problem_file=$_FILES["problem_file"]['name'];

    $tmp_name=$_FILES["problem_file"]['tmp_name'];

    $file_name='problem_file./'.$problem_file;
    $upload=move_uploaded_file($tmp_name,$file_name);

    $created_at         =  date("Y-m-d H:i:s");

    

 

    if( $validate_response->status == "error"){


        $_SESSION["error"]    = true;
        $_SESSION["message"]  = $validate_response->message;
        $_SESSION["data"]     = $validate_response->data;

       
    }
    
       
    if( $validate_response->status == "success"){
        
        
    $insert = " INSERT INTO problem_ticket ( employee_id,problem_detail,problem_priority,problem_file,created_at) VALUES ('$employee_id', '$problem_details', '$priority','$file_name','$created_at')";
        $result = $conect->query($insert);

        if($result){
            $message    =   "Your Ticket has been accepted";

            $_SESSION['success']            =   'success';
            $_SESSION['message']    =   $message;




        }


    }


    if(empty($employee_id)||empty($problem_details)||empty($priority)){
        $message    =   "All data required";

        $_SESSION['error']            =   'error';
        $_SESSION['message']    =   $message;

    }


}
function input_validation_ticket(){
    $has_error    = false;
    $error_data   =  [];
    $required     = "is required";

    if(empty($_POST["employee_id"])){
        $has_error   = true;
        $error_data["error_field"]["employee_id"]  = "Employee_id".$required;
    }else{
        $_SESSION['form_field']['employee_id'] =   $_POST['employee_id'];
    }

    if(empty($_POST["problem_details"])){
        $has_error   = true;
        $error_data["error_field"]["problem_details"]  = "Problem_details".$required;
    }else{
        $_SESSION['form_field']['problem_details'] =   $_POST['problem_details'];
    }

    if(empty($_POST["priority"])){
        $has_error   = true;
        $error_data["error_field"]["priority"]  = "Priority".$required;
    }else{
        $_SESSION['form_field']['priority'] =   $_POST['priority'];
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