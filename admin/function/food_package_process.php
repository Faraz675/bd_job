<?php


if(isset($_POST['package_food_details_update']) && !empty($_POST['package_food_details_update'])){

    $id     = $_POST['update_id'];
    $menu_category_id     = $_POST['menu_category_id'];
    $package_id     = $_POST['package_id'];
    $food_name      = $_POST['food_name'];
    $package_price  = $_POST['package_price'];
    $updated_at     = date("Y-m-d H:i:s");
    $updated_by     = $_SESSION['user_id'];


    $sql  = "UPDATE food_package_details SET menu_category_id=$menu_category_id, package_id=$package_id, food_name='$food_name', package_price=$package_price, updated_at='$updated_at', updated_by=$updated_by WHERE id=$id";

    if($connect->query($sql)){
        header('Location: food_package_details_list.php');
    }

}


if(isset($_POST['package_food_details']) && !empty($_POST['package_food_details'])){

    $menu_category_id     = $_POST['menu_category_id'];
    $package_id     = $_POST['package_id'];
    $food_name      = $_POST['food_name'];
    $package_price  = $_POST['package_price'];
    $created_at = date("Y-m-d H:i:s");
    $created_by = $_SESSION['user_id'];


    $sql  = "INSERT INTO food_package_details (menu_category_id,package_id, food_name, package_price, created_at, created_by) VALUES('$menu_category_id','$package_id', '$food_name', '$package_price', '$created_at', '$created_by')";

    if($connect->query($sql)){
        header('Location: food_package_details_list.php');
    }

}


function get_food_packages_by_id($id){
    
    global $connect;

    $sql = "SELECT * FROM food_package_details WHERE id=$id";

    $result = $connect->query($sql);

    $row = $result->fetch_object();

    return $row;

}


function get_food_packages(){



    global $connect;

    $data = [];

    $sql = "SELECT * FROM food_package_details";

    $result = $connect->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_object()){
            array_push($data, $row);
        }

    }

    return $data;


}


if(isset($_POST['ajaxPackageTypeId']) && !empty($_POST['ajaxPackageTypeId'])){


    include "../../connection/connection.php";

    $ajaxPackageTypeId = $_POST['ajaxPackageTypeId'];

    $data = [];

    $sql = "SELECT * FROM food_package WHERE package_type=$ajaxPackageTypeId";

    $result = $connect->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_object()){
            array_push($data, $row);
        }

    }

    load_food_package_options($data);


}



//food_package_delete_id

if(isset($_POST['food_package_delete_id']) && !empty($_POST['food_package_delete_id'])){


    include "../../connection/connection.php";

    $id = $_POST['food_package_delete_id'];

    $sql = "DELETE FROM food_package_details WHERE id=$id";

    $connect->query($sql);

    $response   =   [
        'id' => $id,
        'status' => 'success',
        'message' => 'Data have been successfully deleted.'
    ];

    echo json_encode($response);
    exit;


}




function load_food_package_options($data){
    echo "<option value=''>Please Select</option>";
    foreach($data as $row){ ?>

        <option value="<?php echo $row->id ?>"><?php echo $row->package_name; ?></option>


    <?php
    
    }
}


?>