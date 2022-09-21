<?php


if(isset($_POST['admin_login']) && !empty($_POST['admin_login'])){

    $table      =   "users";

    $email      = input_data_validation($_POST['email']);
    $password   = input_data_validation($_POST['password']);
    $password   = md5($password);



    $sql  = "SELECT id,user_type,user_name,email,user_status,profile_image FROM $table WHERE email='$email' AND password='$password' AND user_type IN (1,3,4)";

    $result = $connect->query($sql);

    if($result->num_rows > 0){

    $admin_data    =   $result->fetch_object();

    $status             =   "success";

    $_SESSION['status'] = "success";
    $_SESSION['message'] = "Login was successfull";

    $_SESSION['is_admin_logged'] = true;

    $_SESSION['user_id']    = $admin_data->id;
    $_SESSION['user_type'] = $admin_data->user_type;
    $_SESSION['user_email'] = $admin_data->email;
    $_SESSION['user_name'] = $admin_data->user_name;
    $_SESSION['profile_image'] = $admin_data->profile_image;


    if($status == "success"){
        header("Location: dashboard.php");
        exit;
    }else{
        header("Location: index.php");
        exit;
    }


    }
}



?>