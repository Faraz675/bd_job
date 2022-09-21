<?php require("header.php") ?>

    <!-- mid nav end -->
    <!-- Main Nav start -->
    <?php require("navbar.php") ?>

    <!-- Main Nav end -->
    <main>
    
    <!-- bratcam area  end-->
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-header py-3 bg-success text-white fs-5">রেজিস্ট্রেশন ফরম</div>
    
                    <div class="card-body">
                        <form method="POST" action="https://bdjobwar.com/register">
                            <input type="hidden" name="_token" value="prD15O6JOMtUXujRLXvAGZdk0ZHgYbfodXbwOjXL">
                            <div class="row mb-4 px-4 pt-4">
    
                                <div class="col-md-12">
                                    <input id="name" placeholder="আপনার নাম" type="text" class="border border-success form-control py-2 " name="name" value="" required autocomplete="name" autofocus>
    
                                                                </div>
                            </div>
    
                            <div class="row mb-4 px-4">
    
                                <div class="col-md-12">
                                    <input id="phone" type="phone" placeholder="মোবাইল নম্বর" class=" border border-success form-control py-2 " name="phone" value="" required autocomplete="phone">
                                                                </div>
                                <!-- <div class="col-md-3 mt-2">
                                    <a href="#" class="btn-danger" id="otp-btn" style="cursor:pointer">OTP send</a>
                                </div>  -->
                            </div>
    
                          
     
                            <div class="row mb-4 px-4">
    
                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="পাসওয়ার্ড" class=" border border-success form-control py-2 " name="password" required autocomplete="new-password">
                                    <button type="button" id="hidePassword" style="" onclick="myFunction()" class="field-icon"><i class=" text-secondary fas fa-eye"></i></button>
                                    <div id="emailHelp" class="form-text">আপনার পছন্দমত পাসওয়ার্ড সেট করুন ।</div>
    
                                                                </div>
                            </div>
    
                            <div class="row mb-4 px-4">
    
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" placeholder="কনফার্ম পাসওয়ার্ড" class=" border border-success form-control py-2" name="password_confirmation" required autocomplete="new-password">
                                    <button type="button" id="hideConfirmPassword" style="" onclick="myFunction2()" class="field-icon"><i class=" text-secondary fas fa-eye"></i></button>
                                    <div id="emailHelp" class="form-text">উপরের পাসওয়ার্ডটি পুনরায় দিন ।</div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="ms-4">
                                    <button type="submit" class="btn btn-danger">
                                    ফ্রি রেজিস্ট্রেশন করুন 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </main>
      <!-- foo
    <?php require("footer_sub.php") ?>
    <?php require("footer.php") ?>