<?php include "header.php" ?>
<?php include "top_menu.php" ?>
<?php include "left_menu.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Food Package Details Form</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->

            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Food Package Details Form</h3>
                            <a href="food_package_details_create.php" class="btn btn-primary">Create</a>
                        </div>
                        <!-- ./card-header -->
                        <form>
                            <div class="card-body">


                                <?php


                                $food_packages  =   get_food_packages();

                                if (isset($food_packages) && !empty($food_packages)) {

                                ?>


                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Menu Category</th>
                                                    <th>Package</th>
                                                    <th>Food Name</th>
                                                    <th>Package Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $sl =  1;

                                                foreach ($food_packages as $row) {

                                                    $prefix     =  "random_";

                                                    $id  =   base64_encode($prefix.$row->id);

                                                    $url    =   "food_package_details_edit.php?edit_id=".$id;



                                                ?>
                                                    <tr id="row_id_<?php echo $row->id ?>">
                                                        <td><?php echo $sl++; ?></td>
                                                        <td><?php echo get_package_type_name_by_id($row->menu_category_id); ?></td>
                                                        <td><?php echo get_package_name_by_id($row->package_id); ?> </td>
                                                        <td><?php echo $row->food_name; ?></td>
                                                        <td><?php echo $row->package_price; ?></td>
                                                        <td>

                                                            <a href="<?php echo $url; ?>">Edit</a>
                                                            <button type="button" onclick="delete_package_details('<?php echo $row->id ?>')" class="btn btn-sm btn-danger">Delete</button>

                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                <?php
                                } else { ?>

                                    <div class="alert alert-info">
                                        No Data.
                                    </div>

                                <?php } ?>

                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>

            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php include "footer.php" ?>
<?php include "footer_sub.php" ?>