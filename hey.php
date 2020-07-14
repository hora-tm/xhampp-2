<?php

include ("student.php");
include("teacher.php");
include ("db_connection.php");
$conn = OpenCon();
global $temp_row;
if(isset($_POST['student_save'])){
	$edited_name = $_POST['s_name_edited'];
	$edited_sId = $_POST['s_id_edited'] ;
	$edited_lastName = $_POST['s_lastName_edited'];
	$edited_fieldId = $_POST['s_fieldId_edited'];
	$edited_passedUnit = $_POST['s_passedUnit_edited'];
	$edited_grade = $_POST['s_grade_edited'];
	$past_value = $_POST['past_studentId'];
	Student::update_student($edited_sId ,$edited_name , $edited_lastName ,$edited_fieldId ,$edited_passedUnit ,$edited_grade , $past_value ,$conn);
}
if(isset($_POST['show_teacher'])){
		  echo "heloo";
		  $field = $_POST['fieldId'];
		  Teacher::same_field_techers($field);
	  }

 		$myrow = Student::select_all_student($conn);
		echo '<form   method = "POST" action = "index.php">';
		echo '<table>' ;
		foreach ($myrow as $row ) {
   		$temp_row = $row;
		echo '<tr><td>';
		
		//if a student requests to edit his/her profile
		if(isset($_POST['edit_'.$row['studentId']]))
      {
        echo '<td><input type="text" value="'.$temp_row['studentId'].'" name="s_id_edited"></td>
        <td><input type="text" value="'.$temp_row['name'].'"  name="s_name_edited"></td>
        <td><input type="text" value="'.$temp_row['lastName'].'"  name="s_lastName_edited"></td>
        <td><input type="text" value="'.$temp_row['fieldId'].'"  name="s_fieldId_edited"></td>
        <td><input type="text" value="'.$temp_row['passedUnit'].'"name="s_passedUnit_edited"></td>  
        <td><input type="text" value="'.$temp_row['grade'].'"  name="s_grade_edited"></td>
		<td><input type="hidden" value="'.$temp_row['studentId'].'" name="past_studentId"></td>             
        <td><input type="submit" value="save" name="student_save"></td>';
		 echo '</tr>';
      }
      else{
		  echo  '<td>'." | id : ".$row['studentId'].'</td>'.
		 		'<td>'." | name : ".$row['name'].'</td>'.
				'<td>'." | lastName : ".$row['lastName'].'</td>'.
				'<td>'." | fieldId : ".$row['fieldId'].'</td>'.
				'<td>'." | passedUnit : ".$row['passedUnit'].'</td>'.
				'<td>'." | grade : ".$row['grade'].'</td>';
				echo '<td>
					<button type = "submit" name="show_teacher">
						show teachers<input type="hidden" value="'.$row['fieldId'].'" name ="fieldId">
					</button>
					</td>';
				echo '<td><input type="submit" value="edit" name="edit_'.$row['studentId'].'"></td>';
				echo '</tr>';
	  }
    }
    echo '</table>';
    echo '</form>';
	
	
	function show_all_student(){
	//this method should implemented in client side
	//just show students in student page
	// isset(x) ??	
	}
	
		 




$student1 = new Student("mary" , "poppin" ,"1213141516" , 1 , 20 , "grade1" );
$student2 = new Student("hue" , "jackman" ,"1414" , 2 , 90 , "grade3" );
$student3 = new Student("john" , "doe" ,"142536" , 3 , 43 , "grade2" );
$student4 = new Student("brad" , "pitt" ,"14145" , 2 , 80 , "grade0" );
#$field1 = new Field(1 ,"Computer" ,1);
#$field1 = new Field(2 ,"Computer" ,1);


/*$student1->insert_student();
$student2->insert_student();
$student3->insert_student();
$student4->insert_student();*/

//$result_of_select = Student::select_all_student();
//show_all_student($result_of_select);
//student_edit();
?>
