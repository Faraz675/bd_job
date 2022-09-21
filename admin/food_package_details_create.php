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
                            <a href="food_package_details_list.php" class="btn btn-primary">List</a>
                        </div>
                        <!-- ./card-header -->
                        <form accept="" method="post" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">


                                        <?php
                                        

                                        $package_type   =   get_package_type();

                                        foreach($package_type as $row){
                                        
                                        
                                        ?>

                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="menu_category_id" value="<?php echo $row->id ?>" onclick="get_packages();"><?php echo $row->name ?>
                                            </label>
                                        </div>

                                        <?php } ?>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPackageDetails">Package</label>
                                            <div class="form-group">
                                                <select class="form-control" id="package_id" name="package_id">
                                                <option value="">Please Select</option>
                                                    <?php 
                                                    
                                                    $package    =   get_packages();

                                                    foreach($package as $row){
                                                    
                                                    ?>

                                                    <option value="<?php echo $row->id ?>"><?php echo $row->package_name ?></option>

                                                    <?php } ?>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPackageDetails">Food Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter food name" name="food_name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIndividualPrice">Food Package Price</label>
                                    <input type="float" class="form-control" id="exampleInputFoodPackagePrice" placeholder="Enter food pavkage price" name="package_price">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPackageImage">Food Package Imge</label>
                                    <input type="file" class="form-control" name="package_image">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="package_food_details" value="Create">
                            </div>
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