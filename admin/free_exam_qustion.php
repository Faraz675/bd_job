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
                            <h3 class="card-title">বিনামূল্যে পরীক্ষার প্রশ্ন</h3>
                        </div>
                        <!-- ./card-header -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষা শুরু হওয়ার তারিখ</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষা শুরু হওয়ার তারিখ" name="exam_star_date">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষা শেষ হওয়ার তারিখ</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষা শেষ হওয়ার তারিখ" name="exam_compleate_date">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষা শিরোনাম</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষা শিরোনাম" name="exam_title">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষা বিষয়</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষা বিষয়" name="exam_subject">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষা পেইড বা ফ্রি</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষা পেইড বা ফ্রি" name="exam_paid_free">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষার সময়</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষার সময়" name="exam_time">
                                </div>


                                
                                <div class="form-group">
                                    <label for="exampleInputName">পরীক্ষার সদস্য</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="পরীক্ষার সদস্য" name="exam_member">
                                </div>
                                
                                
                            

                             
                
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" name="crate_free_qustion" class="btn btn-primary" value="নতুন প্রশ্ন">
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