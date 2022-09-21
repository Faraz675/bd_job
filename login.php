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
                    <div class="card-header py-3 bg-success text-white fs-5">লগইন ফরম</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="prD15O6JOMtUXujRLXvAGZdk0ZHgYbfodXbwOjXL">
                            <div class="row mb-4 px-4 pt-4">


                                <div class="col-md-12">
                                    <input id="phone" type="text" placeholder="মোবাইল অথবা রোল নম্বর" class="border border-success form-control py-2 " name="phone" value="" autocomplete="phone" autofocus>

                                </div>
                            </div>

                            <div class="row mb-4 px-4">

                                <div class="col-md-12">
                                    <input id="password" placeholder="পাসওয়ার্ড" type="password" class=" border border-success form-control " name="password" required autocomplete="current-password">
                                    <button type="button" id="hidePassword" style="" onclick="myFunction()" class="field-icon"><i class=" text-secondary fas fa-eye"></i></button>

                                </div>
                            </div>
                            <div class="">
                                <a class="text-decoration-none text-muted  ms-4" href="https://bdjobwar.com/password/reset">
                                    পাসওয়ার্ড ভুলে গেছেন? রিসেট করুন
                                </a>
                            </div>
                            <div class="">
                                <div class=" mt-3 ms-4">
                                    <input type="submit" name="user_login" class="btn  btn-danger px-4">
                                    লগইন করুন
                                    </input>

                                </div>
                            </div>
                            <div class="mt-2">
                                <a id="register" class="text-decoration-none fs-6 ms-4 custom-reg-btn" href="register.php">
                                    আপনি কি নতুন ইউজার? ফ্রি অ্যাকাউন্ট খুলুন
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require("footer_sub.php") ?>
<?php require("footer.php") ?>