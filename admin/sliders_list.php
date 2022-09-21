<?php include "header.php" ?>
<?php include "top_menu.php" ?>
<?php include "left_menu.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Slider List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Settings</a></li>
                        <li class="breadcrumb-item active">Slider List</li>
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


                    <?php


                    $data   =   slider_all();

                    


                    ?>


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Slider List</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">


                            <?php


                            if (isset($data) && !empty($data)) {

                            ?>

                                <table id="slider_list" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Slider Order</th>
                                            <th>Slider Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        
                                            $sl = 1;
                                            foreach($data as $row){
                                        
                                        ?>


                                        <tr>
                                            <td><?php echo $sl++; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td>

                                                <img src="../uploads/sliders/<?php echo $row->image_path;?>" height="100" />
                                                
                                            </td>
                                            <td><?php echo $row->slider_order; ?></td>
                                            <td><?php echo $row->slider_status; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info"> 
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-primary"> 
                                                    <i class="fas fa-list"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger"> 
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>


                                        <?php } ?>



                                    </tbody>
                                </table>


                            <?php 
                            
                            } else {

                                no_data_alert();
                            }
                                
                            ?>

                        </div>
                        <!-- /.card-body -->
                    </div>


                </div>

            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php include "footer_sub.php" ?>
<?php include "footer.php" ?>