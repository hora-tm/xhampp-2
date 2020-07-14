<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <style>
    body {
        /* background-color: rgb(113, 114, 114); */
        font-size: 17px;
    }
    </style>
</head>



<!-- <?php include("navbar.php"); ?> -->

<?php
include("db_connection.php");
$conn = OpenCon();
include("select.php"); //return colomns of students
$columns = select_all_student($conn);

?>

<body class="bg-secondary text-warning" style="font-family: sans-serif;">
    <div class="container-fluid d-flex justify-content-center  mt-5">

        <!-- 
        </?php
        $columns =  include("includeSQL.php");
        ?> -->

        <?php
        $ar = array("Bargh", "computer", "Electerical");
        for ($i = 0; $i < 3; $i++) {
        ?>
        <div class="container mt-5">
            <div class="row mt-5  justify-content-between">
                <div class="col-4 col-lg-6  h4 text-dark">
                    <?php echo $ar[$i] ?> Students Table
                </div>
                <div class="col-1 col-lg-2"> <button class="btn btn-sm btn-warning">MastersPage </button></div>
            </div>

            <!-- CreateTable -->
            <div class="row">
                <table class="table table-bordered table-dark table-responsive-md">
                    <thead class="thead-light text-warning">
                        <tr class="">
                            <th>studentID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Major</th>
                            <th>passedUnit</th>
                            <th>Grade</th>
                            <th>EditInfo</th>
                        </tr>
                    </thead>
                    <?php

                        foreach ($columns as $key => $value) {
                            // echo ($ar[$i]);
                            if ($value['fieldId'] == $i + 1) {
                        ?>


                    <tbody>
                        <tr>
                            <?php foreach ($value as $field => $fieldValue) {
                                            if ($field == 'fieldId') { ?>
                            <td class="align-self-start"><?php echo $ar[$fieldValue - 1] ?></td>
                            <?php } else { ?>

                            <td class="align-self-start"><?php echo $fieldValue ?></td>
                            <?php }
                                        } ?>
                            <form method="POST" action="editStudent.php">
                                <td class="d-flex justify-content-center" name="this">
                                    <!-- <button class="btn btn-sm btn-warning"
                                    onclick="openEdit()">Edit</button> -->
                                    <input type="hidden" value="hide" name="field">
                                    <input class="btn btn-sm btn-warning" type="submit" value="harchi">
                            </form>
                            </td>
                        </tr>
                    </tbody>

            </div>
            <?php
                            }
                        }
        ?>

            </table>
        </div>
        <?php
        }
        ?>


    </div>

</body>

</html>