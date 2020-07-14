<?php
function select_all_student($conn)
{
    //global $conn;

    $sql = "SELECT * FROM student "; /* , Field WHERE  Student.fieldId = Field.fieldId */
    if ($result = $conn->query($sql)) {
        echo '<form   method = "POST" action = "hey.php">';
        if (($result->num_rows) > 0) {
            while ($row = $result->fetch_assoc()) {
                $myrow[] = $row;
            }
            return $myrow;
        } else {
            echo "0 results";
        }
    }
}