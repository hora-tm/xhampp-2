<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masters</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php
	include("navbar.php");
	include("courseLogic.php");
	?>

    <div class="container-fluid mt-md-5 mb-5 py-5 col-12 ">

        <!-- contain each table -->

        <?php
		$result = Course::select_all_course($conn);

		?>
        <!-- </?php for ($i = 0; $i < 4; $i++) {?> -->
        <div class="container col-10 col-sm-12 col-md-10 mt-5 pb-5 pt-3 ml-0 px-auto mx-auto">
            <div class="row d-flex mx-auto mb-5">
                <div id="mainH" class=" h2 col-5 col-md-6 col-lg-5 mt-5 pl-4 font-weight-bold ml-4">
                    Courses Information
                </div>
                <div class="col-1 h4 mt-5">
                    <img class="h4" src="https://img.icons8.com/pastel-glyph/64/000000/books.png" />
                </div>
            </div>


            <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class=" mt-md-5 table-responsive text-nowrap justify-content-center mx-md-auto">
                <table class="table">
                    <div class="font-weight-bold h5  mt-5 ">
                        <?php if ($i < 3) {
								echo $majorName[$i] . " Courses" ?>
                        <?php
							} else {
								echo $majorName[$i - 1] . " Courses Semester 2 ";
							} ?>


                    </div>
                    <thead class="">
                        <tr>
                            <th class="th-sm">Name</th>
                            <th>Code</th>
                            <th>Unit</th>
                            <th>NumberOfStudent</th>
                            <th>Teacher ID</th>
                            <th>Semester</th>
                            <th>Field Id</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
							if ($i == 0) {
								foreach ($result as $rows => $row) {
									if ($row['fieldId'] == 1) { ?>

                        <tr>
                            <?php foreach ($row as $field => $fieldValue) {
												echo '<td>' . $fieldValue . ' </td>';
											}

											echo '<td><input class="btn btn-sm btn-warning" type="submit" value="Add"></td>';
											'<td><input type="hidden" value="' . $row['code'] . '" name="coursCode" readonly></td>'
											?>

                        </tr>
                    </tbody>
                    <?php }
								}
							} elseif ($i == 1) {
								foreach ($result as $rows => $row) {
									if ($row['fieldId'] == 2) { ?>
                    <tbody>
                        <tr>
                            <?php foreach ($row as $field => $fieldValue) {
											echo '<td>' . $fieldValue . ' </td>';
										}

										echo '<td><input class="btn btn-sm btn-warning" type="submit" value="Add"></td>';
										'<td><input type="hidden" value="' . $row['code'] . '" name="coursCode" readonly></td>'
								?>
                        </tr>
                    </tbody>
                    <?php }
								}
							} elseif ($i == 2) {
								foreach ($result as $rows => $row) {
									if ($row['fieldId'] == 3) {
										if ($row['term'] == 1) {


						?>
                    <tbody>
                        <tr>
                            <?php foreach ($row as $field => $fieldValue) {
												echo '<td>' . $fieldValue . ' </td>';
											}

											echo '<td><input class="btn btn-sm btn-warning" type="submit" value="Add"></td>';
											'<td><input type="hidden" value="' . $row['code'] . '" name="coursCode" readonly></td>'
									?>
                        </tr>
                    </tbody>
                    <?php }
									}
								}
							} elseif ($i == 3) {
								foreach ($result as $rows => $row) {
									if ($row['fieldId'] == $i) {
										if ($row['term'] == 2) {


						?>
                    <tbody>
                        <tr>
                            <?php foreach ($row as $field => $fieldValue) {
												echo '<td>' . $fieldValue . ' </td>';
											}
											echo '<td><input class="btn btn-sm btn-warning" type="submit" value="Add"></td>';
											'<td><input type="hidden" value="' . $row['code'] . '" name="coursCode" readonly></td>'
									?>
                        </tr>
                    </tbody>

                    <?php }
									}
								} ?>

                    <?php	}
			?>
                </table>

            </div>

            <?php

			}
			?>
        </div>
    </div>
</body>

</html>