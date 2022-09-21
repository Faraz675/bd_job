
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>gggggggggg - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://bdjobwar.com/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="https://bdjobwar.com/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://bdjobwar.com">
    
    <div class="sidebar-brand-text mx-3">Bd Jobwar</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>


<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li> -->



<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/exams">
    <i class="fab fa-pied-piper"></i>
        <span>Your Exams</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/orders">
    <i class="fas fa-file-invoice-dollar"></i>
        <span>Your Orders</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/courses">
    <i class="fas fa-chalkboard-teacher"></i>
        <span>Your Courses</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/favourites">
    <i class="fas fa-heart"></i>
        <span>Your Favourites</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/package">
    <i class="fas fa-box"></i>
        <span>Subscribed Package</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/edit/profile">
    <i class="fas fa-user-edit"></i>
        <span>Edit Profile</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com">
    <i class="fas fa-home"></i>
        <span>Back to home</span></a>
</li>

<!-- <li class="nav-item">
    <a class="nav-link" href="https://bdjobwar.com/dashboard/test-history">
        <i class="fas fa-fw fa-table"></i>
        <span>Test history</span></a>
</li> -->
<li class="nav-item">
<a class="nav-link" href="https://bdjobwar.com/logout" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span class="fas fa-toggle-off mr-3"></span>Sign Off</a>
        <form id="logout-form" action="https://bdjobwar.com/logout" method="POST" class="d-none">
            <input type="hidden" name="_token" value="5y2xLeGAUVMwmNrbCJ3TBVcuw3IaIZM9QTSNwbo1">        </form>
</li>




</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                      
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                    
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                 

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">gggggggggg</span>
                                <img class="img-profile rounded-circle"
                                    src="https://bdjobwar.com/storage/users/default.png" style="object-fit:cover;">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="https://bdjobwar.com/dashboard/home">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
          
             
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="modal" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                    <form id="logout-form" action="https://bdjobwar.com/logout" method="POST" class="d-none">
                                      <input type="hidden" name="_token" value="5y2xLeGAUVMwmNrbCJ3TBVcuw3IaIZM9QTSNwbo1">                                     </form>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               <main>
                           <div class="container">
        <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h1>2</h1>
                                    <span>Exams</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h1>0</h1>
                                    <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h1>0</h1>
                                    <span>Orders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mt-2">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h1>0</h1>
                                    <span>Favourites</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 col-12 mt-2">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h1>1</h1>
                                    <span>Exam Attended</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 col-12 mt-2">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h1>1</h1>
                                    <span>Exam not taken</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 col-12 mt-2">
                <div class="card shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pencil primary font-large-2 float-left"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h1>0.00</h1>
                                    <span>Averge Mark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="card mt-2 shadow">
                <div class="card-body d-flex gap-5  flex-wrap align-items-center ">
                    <img src="https://bdjobwar.com/storage/users/default.png"   height="250px" alt="">
                    <dl>
                        <dt>Name :</dt>
                        <dd>gggggggggg</dd>
                        <dt>Email :</dt>
                        <dd>n/a</dd>
                        <dt>Phone :</dt>
                        <dd>01771594675</dd>
                        <dt>Roll</dt>
                        <dd>876404</dd>
                        <a href="https://bdjobwar.com/dashboard/edit/profile" class="btn btn-primary">Update Profile</a>
                    </dl>
                    

                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="  card border border-success shadow package-hover ">

                                <div
                                    class="card-body d-flex  flex-column justify-content-center align-items-center shadow  p-5 gap-2">
                                    <div style="height:80px;width:80px"
                                        class="text-success shadow rounded-circle border-success border d-flex justify-content-center flex-column  align-items-center">
                                        <i class="fa fa-gifts fa-2x"></i>
                                    </div>
                                    <h4 class="text-uppercase" style="font-weight:700 ;">
                                        Free
                                    </h4>

                                    <h5 style="font-weight:700;">

                                        Expire at : 22 Sep, 2022

                                    </h5>

                                    <ul class="premium-feature">
                                        <li><span>প্রশ্ন ব্যাংক সার্স</span></li>
                                        <li><span>সকল পেইড কোর্স</span></li>
                                        <li><span>জব সলিউশন</span></li>
                                        <li><span>পিডিএফ ডাউনলোড</span></li>
                                        <li><span>সকল লাইভ ও আর্কাইভ পরীক্ষা</span></li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





    </div>
               </main>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="https://bdjobwar.com/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="https://bdjobwar.com/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://bdjobwar.com/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://bdjobwar.com/dashboard/js/sb-admin-2.min.js"></script>
    <script src="https://bdjobwar.com/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="https://bdjobwar.com/dashboard/js/demo/chart-area-demo.js"></script>
    <script src="https://bdjobwar.com/dashboard/js/demo/chart-pie-demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        </body>

</html>