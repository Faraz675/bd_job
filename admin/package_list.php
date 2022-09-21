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
                        <li class="breadcrumb-item active">Package Form</li>
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
                            <h3 class="card-title">Package Form</h3>
                        </div>
                        <!-- ./card-header -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Package Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter package name" name="name">
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputPackageType">Package Type</label><br>
                                    <input type="radio" id="package_type_1" name="package_type" value="lunch">
                                    <label for="Slider_staus">Lunch</label><br>
                                    <input type="radio" id="package_type_2" name="package_type" value="Dinner">
                                    <label for="Slider_staus">Dinner</label><br>
                                </div>

                             
                                
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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