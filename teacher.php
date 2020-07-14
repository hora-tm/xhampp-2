<?php 
//include ("db_connection.php");
 //$conn = OpenCon();

class Teacher {
  // Properties
  public $teacherId;
  public $name;
  public $lastName;
  public $fieldId;
  public $academicRate;

  
  //constructor
  function __construct($teacherId ,$name ,$lastName ,$fieldId ,$academicRate ){
       $this->teacherId = $teacherId;
       $this->name = $name;
       $this->lastName = $lastName;
       $this->fieldId = $fieldId;
       $this->academicRate = $academicRate;   
   }

  // Methods
  
  function insert_teacher(){
       global $conn;
       $sql =" INSERT INTO Teacher (name, lastName, teacherID ,fieldId ,academicRate)
        VALUES ('$this->name' ,'$this->lastName' ,'$this->teacherID' ,
            '$this->fieldId' ,'$this->academicRate')";
        if ($conn -> query($sql) === TRUE) {
            echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
   }
   
   function select_all_teacher(){
       global $conn;
       $sql ="SELECT * FROM Teacher "; /*, Field WHERE  Student.fieldId = Field.fieldId*/
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
   
   //client should pass fieldId of specified student tath request to show teachers
   function same_field_techers($field){
       global $conn;
       $sql ="SELECT * FROM Teacher WHERE Teacher.fieldId = '$field' "; 
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
}  