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





<body class="bg-light">
    <div class="container-field justify-content-center d-flex mt-5" id="container">
        <?php

        // include("navbar.php");

        ?>
        <?php
        include("db_connectionhora.php");
        $conn = OpenCon();
        include("studentLogic.php"); //return colomns of students
        $myrows = Student::select_all_student($conn);
        ?>


        <?php foreach ($myrows as $row) {
            if ($row['studentId'] == $_POST['postID']) {

                $temp_row = $row;
        ?>
        <div class=" container justify-content-center mt-5 bg-dark" id=" container" style="height:500px">

            <div class=" row d-flex py-5 mt-5" id="rows">
                <div class="col-10 ">
                    <!-- inputs -->
                    <div class="input-groups d-flex mt-5">


                        <?php   //print inputs     
                                foreach ($temp_row as $field => $w) {
                                ?>
                        <?php
                                    echo '<td><input class="col-2 form-control" type="text" value="' . $temp_row[$field] . '" name="s_' . $field . '_edited"></td> '
                                    ?>

                        <!-- save button -->
                        <?php }

                                echo '<td><input type="hidden" value="' . $temp_row['studentId'] . '" name="past_studentId"></td>';
                                echo '<td><input class="btn btn-secondary btn-sm col-1 ml-2" type="submit" value="save" name="student_save"></td>';
                                echo '<td> <input type="hidden" value= "' . $_POST['postID'] . '" name="postID"></td> ';
                                // include('studentEditLogic.php');
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="row d-flex mt-4 bg-warning mx-5">
                <div class="col-6">
                    <?php
                            // echo "gabfe";
                            if (isset($_POST['student_save'])) {
                                // echo "hhkjikijuh";
                                $edited_name = $_POST['s_name_edited'];
                                // echo $edited_name;
                                $edited_sId = $_POST['s_studentId_edited'];
                                $edited_lastName = $_POST['s_lastName_edited'];
                                $edited_fieldId = $_POST['s_fieldId_edited'];
                                $edited_passedUnit = $_POST['s_passedUnit_edited'];
                                $edited_grade = $_POST['s_grade_edited'];
                                $past_value = $_POST['past_studentId'];
                                Student::update_student($edited_sId, $edited_name, $edited_lastName, $edited_fieldId, $edited_passedUnit, $edited_grade, $past_value, $conn);
                            }
                            ?>
                </div>
            </div>










        </div>

</body>



</html>