<?php

session_start();
if(isset($_POST['take'])){
    //Course::same_field_course($field , $term , $conn);
    $_SESSION['cart'] [] = array('code'=>$_POST['courseCode'] ,
                                 'name'=>$_POST['courseName']),
                                 'unit'=>$_POST['courseUnit']),
                                 'teacherId'=>$_POST['teacherId']),
                                 'fieldId'=>$_POST['fieldId']),
                                 'term'=>$_POST['term']);
                                 
}

foreach ($_SESSION['cart'] as $key => $value) {
    $value[]
}


?>
