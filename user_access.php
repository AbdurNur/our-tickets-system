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
       

        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-inline" action="/action_page.php">
                                        <div class="form-group">
                                            <label for="user">User:</label>
                                            <select class="form-control select2" id="user_id" name="user_id">
                                                <option value="">Please Select</option>



                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary" >Get Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="buttons text-right p-3">
                                <button type="button" name="link_permission"  class="btn btn-success">Save</button>
                            </div>

                            <div class="row">
                                <div class="col-md-12" id="user_link_permission_view_section">

                                        
                                    
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php
include "footer.php";

?>