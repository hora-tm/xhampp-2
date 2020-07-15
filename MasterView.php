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

<body class="bg-light bg-dark">
    <div class="container-fluid bg-secondary mt-md-5 mb-5 py-5 col-10 ">
        <div class="h4  col-10 mt-5 mx-4 py-2">
            Masters Page
        </div>

        <?php
        include("navbar.php");
        include("masterLogic.php");
        // include("db_connectionhora.php");
        // $conn = OpenCon();
        ?>

        <div class="col-5 h3">

        </div>

        <!-- tables container -->
        <div class="container  col-md-10 col-8 mt-5  bg-secondary pb-5 pt-3 pl-0 ml-0 mx-md-auto">

            <!-- contain each table -->
            <div class="mt-md-5 col-6 col-md-12  justify-content-center">
                <table class="table ">

                    <div class="h5">
                        <?php if (isset($_POST['major'])) { ?>
                        <?php echo $majorName[$_POST['major']] ?>

                        <?php   }
                        ?>
                        Masters
                    </div>
                    <thead class="thead-dark">
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Email</th>
                            <th>Email</th>

                        </tr>

                    </thead>
                    <tbody class="bg-light">


                        <?php
                        if (isset($_POST['major'])) {
                            $masterFieldId =  $_POST['major'];
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