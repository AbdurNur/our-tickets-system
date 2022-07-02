<?php session_start();

include "canection.php";

?>



<!-- header part -->
<?php
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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin_dasbord.php">Home</a></li>
                        <li class="breadcrumb-item active">User List</li>
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
                <div class="col-md-12 common">

                    <!-- Modal -->
                    <table style="border: 4px solid gray" class="table table-light table-striped  table-hover myDataTable">
                    
                    
                        <thead>
                            <tr>

                            
                                
                                <th>Employee Id</th>                                
                                <th>Name</th>                               
                                <th>Emage</th>                               
                                <th>Email</th> 
                                <th>Users Type</th>                               
                                <th>Created at</th>
                                <th>Updated at</th>
                                

                            </tr>

                            
                        </thead>

                        <tbody>
                            <?php
                                // echo $employee_id= $_SESSION['login_employee_id'];
                            if ($conect->connect_error) {
                                die("Connection failed: " .  $conect->connect_error);
                            } else {
                               
                                $select_query =  "SELECT * FROM `users` ";

                                $result       = $conect->query($select_query);

                                if ($result->num_rows > 0) {
                                   

                                    while ($row = $result->fetch_object()) {  ?>

                                        <tr>
                                            
                                            <td><?php echo $row->employee_id ?></td>
                                            <td><?php echo $row->name ?></td>
                                            <td>
                                                <div class="image">
                                                    <div class="common img " >                                                        
                                                        <img  src='images/<?php  echo $row->image?>'>                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row->email ?></td>
                                            <td>
                                                <?php if($row->user_type==1 ){
                                                    echo "Super Admin ".$row->user_type;

                                                }elseif($row->user_type==2){
                                                    echo "Employee ".$row->user_type;
                                                }elseif($row->user_type==3){
                                                    echo "Support Team ".$row->user_type;
                                                }elseif($row->user_type==4){
                                                    echo "Users ".$row->user_type;
                                                } ?>
                                            </td>
                                            <td><?php echo $row->created_at ?></td>
                                            <td><?php echo $row->update_at ?></td>
                                            
                                            
                                        </tr>

                                    <?php     };
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="8">
                                            <div class="alert alert-danger">
                                                <strong>Sorry ! No data found </strong>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } ?>
                        </tbody>
                    </table>





                </div>






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