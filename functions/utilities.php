<?php

function test_exam(){

global $connect;

$data = [];
$sql = "SELECT * FROM exam_test";


$result = $connect->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_object()){
        array_push($data, $row);
    }

}

return $data;
};
