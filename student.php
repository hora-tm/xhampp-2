<?php 
/*include ("db_connection.php");
$conn = OpenCon();*/
//$conn = OpenCon();

class Student {
  // Properties
  public $studentId;
  public $name;
  public $lastName;
  public $fieldId;
  public $passedUnit;
  public $grade;

  
  //constructor
  function __construct($name ,$lastName ,$studentId ,$fieldId ,$passedUnit ,$grade){
       $this->set_studentId($studentId);
       $this->set_name($name);
       $this->set_lastName($lastName);
       $this->set_fieldId($fieldId);
       $this->set_passedUnit($passedUnit);
       $this->set_grade($grade);
   }

  // Methods
  
  //if one condition is not aaceptable are we can distruct this object ?
  function set_studentId($studentId) {
    $this->studentId = $studentId;
  }
  function get_studentId() {
    return $this->studentId;
  } 
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_lastName($lastName) {
    $this->lastName = $lastName;
  }
  function get_lastName() {
    return $this->lastName;
  }
  function set_fieldId($fieldId) {
      
        $this->fieldId = $fieldId;
  }
  function get_fieldId() {
    return $this->fieldId;
  }
  function set_passedUnit($passedUnit) {
    $this->passedUnit = $passedUnit;
  }
  function get_passedUnit() {
    return $this->passedUnit;
  }
  function set_grade($grade) {
        $this->grade = $grade;
  }
  function get_grade() {
    return $this->grade;
   }
   
   function insert_student(){
       global $conn;
       $sql =" INSERT INTO Student (name, lastName, studentID ,fieldId ,passedUnit ,grade)
        VALUES ('$this->name' ,'$this->lastName' ,'$this->studentId' ,
            '$this->fieldId' ,'$this->passedUnit' ,'$this->grade')";
        if ($conn -> query($sql) === TRUE) {
            echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
   }
   
   function select_all_student($conn){
       //global $conn;

       $sql ="SELECT * FROM Student "; /* , Field WHERE  Student.fieldId = Field.fieldId */
        if($result = $conn->query($sql)){
            echo '<form   method = "POST" action = "hey.php">';   
            if (($result-> num_rows) > 0) {
                while($row = $result->fetch_assoc()) {
                    $myrow[] = $row;
                }
                    return $myrow;
                    
          } else {
                echo "0 results";  
          }
        }
       
   }
   
   
   
   function update_student($s_id_eddited ,$s_name_ediited ,
    $s_lastName_ediited ,$s_fieldId_ediited ,$s_grade_ediited ,$s_passedUnit_ediited ,$past_studentId ,$conn){
      //global $conn;
			$sql = "UPDATE student 
            SET studentId='$s_id_eddited' 
            , name ='$s_name_ediited'
            , lastName ='$s_lastName_ediited'
            , fieldId ='$s_fieldId_ediited'
            , passedUnit ='$s_passedUnit_ediited'
            , grade ='$s_grade_ediited'
            WHERE studentId ='$past_studentId'" ;
              if($result = $conn->query($sql)) {
                echo 'نام به روز شد.';
   }
}
}
