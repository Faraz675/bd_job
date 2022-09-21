<?php


if (isset($_POST['crate_free_qustion']) && !empty($_POST['crate_free_qustion'])) {

    $table      =   "users";

    // $email      = input_data_validation($_POST['phone']);
    $exam_star_date           = $_POST['exam_star_date'];
    $exam_compleate_date      = $_POST['exam_compleate_date'];
    $exam_title               = $_POST['exam_title'];
    $exam_subject             = $_POST['exam_subject'];
    $exam_paid_free           = $_POST['exam_paid_free'];
    $exam_time                = $_POST['exam_time'];
    $exam_member              = $_POST['exam_member'];

    
   $sql = "INSERT INTO exam_test(exam_star_date, exam_compleate_date, exam_title, exam_subject, exam_paid_or_free, exam_time, exam_member) VALUES ('$exam_star_date','$exam_compleate_date','$exam_title','$exam_subject','$exam_paid_free','$exam_time','$exam_member')";
 

    $result = $connect->query($sql);

}



?>








