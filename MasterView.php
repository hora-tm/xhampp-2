<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // include("navbar.php");
    include("teacher.php");
    // include("db_connectionhora.php");
    // $conn = OpenCon();
    ?>



    <table>
        <thead>

        </thead>
        <tbody>

        </tbody>
    </table>

    <?php
    if (isset($_POST['major'])) {
        $masterFieldId =  $_POST['major'];
        // include('teacher.php');
        $row = Teacher::same_field_techers($masterFieldId);

        foreach ($row as $rowfield => $value){ //value is a array with fild and value
             foreach ($value as $field => $fieldValue){


    }
    ?>




</body>

</html>