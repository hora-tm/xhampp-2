<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <style>
    #container {
        margin-top: 10px;
    }

    input {
        /* height: 50px; */
    }

    td {
        /* background-color: khaki; */
    }
    </style>
    <script>
    document.getElementsByTagName("INPUT").className = "text-light";
    </script>

</head>





<body>
    <div class="container-field justify-content-center mt-5 pt-5" id="container">

        <?php
        global $id;
        include("navbar.php");
        ?>
        <div class="container col-10 col-sm-11 col-md-10 col-lg-8 justify-content-center mt-5 pb-5 pt-4"
            id=" container">
            <div class="col-5 col-md-4 bg-warning text-dark mt-3 mx-auto">
                <?php
                include("studentLogic.php"); //return colomns of students
                $myrows = Student::select_all_student($conn);
                if (isset($_POST['student_save'])) {
                    $id = $_POST['s_studentId_edited'];
                    // echo $id;
                    $edited_name = $_POST['s_name_edited'];
                    $edited_sId = $_POST['s_studentId_edited'];
                    $edited_lastName = $_POST['s_lastName_edited'];
                    $edited_fieldId = $_POST['s_fieldId_edited'];
                    $edited_passedUnit = $_POST['s_passedUnit_edited'];
                    $edited_grade = $_POST['s_grade_edited'];
                    $past_value = $_POST['past_studentId'];
                    Student::update_student(
                        $edited_sId,
                        $edited_name,
                        $edited_lastName,
                        $edited_fieldId,
                        $edited_passedUnit,
                        $edited_grade,
                        $past_value,
                        $conn
                    );
                } else {
                    $id = $_POST['postID'];
                }
                ?>
            </div>


            <?php
            $myrows = Student::select_all_student($conn);

            foreach ($myrows as $row) {
                // $temp_row['s_studentId_edited'] = 0;
                if ($row['studentId'] == $id) {
                    $temp_row = $row;
            ?>

            <div class=" row d-flex mt-2" id="rows">
                <div class="col-10">
                    <!-- inputs -->
                    <div class="input-groups d-flex flex-wrap flex-md-nowrap mt-4">
                        <?php
                                foreach ($temp_row as $field => $w) {
                                ?>
                        <form method="POST" action="studentEditView.php">
                            <?php
                                        echo '<td><input class="col-4 col-md-2 col- form-control" type="text" value="' . $temp_row[$field] . '" name="s_' . $field . '_edited"></td> '
                                        ?>
                            <!-- save button -->
                            <?php }
                                echo '<td><input type="hidden" value="' . $temp_row['studentId'] . '" name="past_studentId"></td>';
                                echo '<td><input class="btn btn-secondary  btn-sm col-2 ml-2" type="submit" value="save" name="student_save"></td>';
                            }
                        }
                            ?>
                        </form>
                        </tr>

                    </div>
                </div>
            </div>













        </div>
    </div>

</body>



</html>