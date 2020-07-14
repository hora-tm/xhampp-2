<?php
include("sqlConnection.php");
$columns  = select_all_student("SELECT * FROM student");

return $columns;