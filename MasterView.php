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

</head>

<body>
    <div class="container-fluid mt-md-5 mb-3 py-5 col-10 ">


        <?php
        include("navbar.php");
        include("masterLogic.php");
        // include("db_connectionhora.php");
        // $conn = OpenCon();
        ?>

        <!-- tables container -->
        <div class="container col-md-10 col-12 mt-5 pb-5 pt-2 pl-0 ml-0 mx-sm-auto">
            <div class="row d-flex mx-auto mb-5">
                <div id="mainH" class=" h2 col-5 col-md-8 col-lg-6 mt-5 pl-4 font-weight-bold ml-4">
                    Masters Information
                </div>
                <div class="col-1 h2 mt-5">
                    <img class="" src="https://img.icons8.com/material-sharp/24/000000/teacher.png" />
                </div>
            </div>

            <!-- contain each table -->
            <div class="mt-md-12 col-7 col-sm-11 justify-content-center mx-sm-auto ml-3">
                <table class="table ">

                    <div class="h5">
                        <?php if (isset($_POST['majorId'])) {

                            echo $majorName[$_POST['majorId']] . "Masters" ?>

                        <?php   }
                        ?>

                    </div>
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Teacher ID</th>
                            <th>Field ID</th>
                            <th>academic Rate</th>

                        </tr>

                    </thead>
                    <tbody>


                        <?php
                        if (isset($_POST['majorId'])) {
                            $masterFieldId =  $_POST['majorId'] + 1;
                            // include('teacher.php');
                            $row = Teacher::same_field_techers($masterFieldId);

                            foreach ($row as $rowfield => $value) { //value is a array with fild and value
                                echo ' <tr> ';
                                foreach ($value as $field => $fieldValue) {
                                    echo '
                    <td>' . $value[$field] . '</td>';
                                }
                                '</tr>';
                            }
                        } else {
                            $row = Teacher::select_all_teacher();
                            // print_r($row);
                            foreach ($row as $rowfield => $value) { //value is a array with fild and value
                                echo ' <tr> ';
                                foreach ($value as $field => $fieldValue) {
                                    echo '
                    <td>' . $value[$field] . '</td>';
                                }
                                '</tr>';
                            }
                        }
                        ?>

                    </tbody>
                </table>

                <!--   container -->
            </div>


            <!-- contain each table -->

        </div>

        <!-- "container-fluid"> -->
    </div>


</body>

</html>