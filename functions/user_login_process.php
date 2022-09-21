<?php


if(isset($_POST['user_login']) && !empty($_POST['user_login'])){

    $table      =   "users";

    // $email      = input_data_validation($_POST['phone']);
    $mobile      = $_POST['phone'];
    $password   = $_POST['password'];
    // $password   = input_data_validation($_POST['password']);
    $password   = md5($password);



    $sql  = "SELECT * FROM $table WHERE user_mobile_number='$mobile' AND user_password='$password'";

    $result = $connect->query($sql);


    if($result->num_rows > 0){

    $user_data    =   $result->fetch_object();

    $status             =   "success";

    $_SESSION['status'] = "success";
    $_SESSION['message'] = "Login was successfull";

    $_SESSION['is_user_logged_in'] = true;

    $_SESSION['user_id']    = $user_data->user_id;
    $_SESSION['user_type'] = $user_data->user_type;
    $_SESSION['user_email'] = $user_data->user_email;
    $_SESSION['user_name'] = $user_data->user_name;
    $_SESSION['profile_image'] = $user_data->user_profile_img;




    if($status == "success"){
        header("Location:index.php");
        exit;
    }else{
        header("Location:kk.php");
        exit;
    }


    }
}



?>