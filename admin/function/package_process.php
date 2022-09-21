<?php


if(isset($_POST['package_create']) && !empty($_POST['package_create'])){

    $package_name = $_POST['package_name'];
    $package_type = $_POST['package_type'];
    $created_at = date("Y-m-d H:i:s");
    $created_by = $_SESSION['user_id'];


    $sql  = "INSERT INTO food_package (package_name, package_type, created_at, created_by) VALUES('$package_name', '$package_type', '$created_at', '$created_by')";

    if($connect->query($sql)){
        header('Location: package_list.php');
    }

}


function get_packages(){

    global $connect;

    $data = [];

    $sql = "SELECT * FROM food_package ORDER BY package_name ASC";

    $result = $connect->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_object()){
            array_push($data, $row);
        }

    }

    return $data;

}


?>