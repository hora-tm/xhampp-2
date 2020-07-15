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



<?php
include("navbar.php");
?>

<?php
// include("db_connectionhora.php");
// $conn = OpenCon();
include("studentLogic.php"); //return colomns of students
$columns = Student::select_all_student($conn);

?>

<body class="bg-secondary text-warning" style="font-family: sans-serif;">
    <div class="container-fluid d-flex justify-content-center  mt-5">

        <div class="container col-sm-12 col-md-10 mt-5 bg-danger">
            <?php
            // global $major;

            for ($i = 0; $i < 3; $i++) {
            ?>


            <div class="bg-info py-5 my-5 ">
                <div class="row mt-5 ml-3 justify-content-between">
                    <div class="font-weight-bold col-6 col-lg-5 ml-2 h5 text-dark">
                        <?php echo $majorName[$i] ?> Students Table
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 mb-2 ">
                        <form method="POST" action="masterView.php">
                            <?php echo ' <input class="btn btn-sm btn-warning" type="submit" value="MastersPage"> '; ?>
                            <?php '<input type="hidden" value="' . $i . '" name="major">' ?>
                        </form>
                    </div>
                </div>

                <!-- CreateTable -->
                <div class="col-12">
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
                                $postStudentId = 1515;
                                if ($value['fieldId'] == $i + 1) {
                            ?>


                        <tbody>
                            <tr>
                                <?php foreach ($value as $field => $fieldValue) {
                                                if ($field == 'studentId') {
                                                    $postStudentId = $value['studentId'];
                                                    // echo "jj";
                                                }
                                                if ($field == 'fieldId') {
                                            ?>
                                <td class="align-self-start"><?php echo $majorName[$fieldValue - 1] ?></td>
                                <?php
                                                } else { ?>

                                <td class="align-self-start"><?php echo $fieldValue ?></td>
                                <?php
                                                }
                                                // echo $post;
                                            } ?>

                                <form method="POST" action="studentEditView.php">
                                    <td class="d-flex justify-content-center">

                                        <input class="btn btn-sm btn-warning" type="submit" value="edit"> </td>
                            </tr>
                            <?php '<input type="hidden" value= "' . $postStudentId . '" name="postID"> ' ?>
                            </form>

                        </tbody>

                </div>


                <?php
                                }
                            }
            ?>

                </table>
                <!-- comtain each table and top-->
            </div>

            <!-- container -->
        </div>
        <?php
            }
    ?>

        <!-- container-fluid -->
    </div>

</body>
<!-- <a href="/editStudent.php?id=</?= $_SESSION['islog'] ?>"> -->

</html>