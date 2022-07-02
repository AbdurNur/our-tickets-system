<!-- header part -->
<?php session_start();
include "header.php";
include "canection.php";
include "function/access_modul_process.php";

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
                                <form class="form-inline" method="POST" action="">
                                    <div class="form-group">
                                        <label for="user">User:</label>
                                        <select class="form-control select2" id="user_id" name="user_id">
                                            <option value="">Please Select</option>
                                            <?php $user = User();
                                            if (isset($user) && !empty($user)) {
                                                foreach ($user as $value) { ?>
                                                    <option value="<?php echo $value->user_type ?>">
                                                        <?php
                                                        echo $value->name . " " . $value->user_type;
                                                        ?>
                                                    </option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary"  name="user" value="Get Data">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                    <form action="" method="POST">
                        <div class="buttons text-right p-3">
                            <input type="submit" name="link_permission" class="btn btn-success" value="Save">
                        </div>

                        <div class="row">
                            <div class="col-md-12" id="user_link_permission_view_section">

                            <?php
                                if(isset($_POST['user']) && !empty($_POST['user']) ){
                                   if(isset($_POST['user_id']) && !empty($_POST['user_id']) ){                                    
                                    ?>                                
                                    
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl</th>
                                                    <th scope="col">Head</th>
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Complain</td>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Action  </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Complaint Create</td>
                                                                    <td class="d-flex">
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="add" name="add" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Add
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="edit" name="edit" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Edit
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="delet" name="delete" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Delete
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="view" name="view" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox"value="list" name="list" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                List
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="print" name="print"  id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                              Print
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Complaint List</td>
                                                                    <td class="d-flex">
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="add" name="add" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Add
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="edit" name="edit" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Edit
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="delet" name="delete" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Delete
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="view" name="view" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox"value="list" name="list" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                List
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="print" name="print"  id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                              Print
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Report</td>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Complaint Report</td>
                                                                    <td class="d-flex">
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Add
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Edit
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                Delete
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                                List
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check pe-3">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                              Print
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>     
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </form>                              
                                    <?php
                                    
                                        } }
                                    ?>
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
function User()
{

    global $conect;

    // default empty array variable
    $data = [];
    $select_query =  "SELECT * FROM `users`";

    $result       = $conect->query($select_query);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_object()) {


            array_push($data, $row);
            // $data[] =   $row;

        };
    }

    return $data;
}
?>



<?php
include "footer.php";

?>