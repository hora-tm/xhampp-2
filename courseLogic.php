<?php

include("fatherOfLogics.php");

//  $conn = OpenCon();

class Course
{
    // Properties
    public $code;
    public $name;
    public $unit;
    public $studentNum;
    public $teacherId;
    public $fieldId;
    public $term;


    //constructor
    function __construct($code, $name, $unit, $teacherId, $term, $fieldId)
    {
        $this->code = $code;
        $this->name = $name;
        $this->unit = $unit;
        $this->teacherId = $teacherId;
        $this->fieldId = $fieldId;
        $this->term = $term;
        $this->studentNum++;
    }

    // Methods

    function insert_course($conn)
    {
        $sql = " INSERT INTO Course  (code ,name ,unit ,studentNum ,teacherId ,term )
        VALUES ('$this->code' ,'$this->name' ,'$this->unit' ,
            '$this->studentNum' ,'$this->studentNum' ,  '$this->fieldId' = '$fieldId, $this->term')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function select_all_course($conn)

    {
        // global $conn;
        $sql = "SELECT * FROM Course ";
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

    //client should pass fieldId of specified student tath request to show teachers
    function same_field_course($field, $term, $conn)
    {
        //global $conn;
        $sql = "SELECT * FROM Course WHERE Course.fieldId = $field AND Course.term = $term ";
        if ($result = $conn->query($sql)) {
            // echo '<form   method = "POST" action = "hey.php">';   
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
    function chosed_courses()
    {
    }
}


// $course1 = new Course(101260, "java", 3, 12131516, 1, 1);
// $course2 = new Course(102030, "IOS", 3, 15425814, 1, 1);
// $course3 = new Course(101290, "compiler", 3, 1213141516, 1, 1);
// $course4 = new Course(102035, "Operating", 3, 1425814, 1, 1);
// $course5 = new Course(202060, "madar1", 2, 854716, 1, 2);
// $course6 = new Course(207070, "madar2", 2, 5746858, 1, 2);
// $course7 = new Course(205060, "amar", 3, 36217716, 1, 2);
// $course8 = new Course(202070, "azmayeshgah1", 1, 5993587, 1, 2);
// $course9 = new Course(202071, "azmayeshgah2", 1, 8189758, 1, 2);
// $course10 = new Course(301080, "static", 3, 821967, 1, 3);
// $course11 = new Course(301090, "fizik1", 2, 1214736, 2, 3);
// $course12 = new Course(301010, "dynamic", 3, 1204508, 1, 3);
// $course13 = new Course(302090, "naqshekeshi", 1, 9548762, 2, 3);
// $course14 = new Course(302091, "naqshekeshi2", 1, 58721762, 1, 3);
// $course14 = new Course(302091, "naqshekeshi2", 1, 58721762, 1, 3);

// $course1->insert_course($conn);
// $course2->insert_course($conn);
// $course3->insert_course($conn);
// $course4->insert_course($conn);
// $course5->insert_course($conn);
// $course6->insert_course($conn);
// $course7->insert_course($conn);
// $course8->insert_course($conn);
// $course9->insert_course($conn);
// $course10->insert_course($conn);
// $course11->insert_course($conn);
// $course12->insert_course($conn);
// $course13->insert_course($conn);
// $course14->insert_course($conn);