<?php
include ("student.php");
global $temp_row;

//update editted records of students
 if(isset($_POST['student_save'])){
			$sql = "UPDATE student 
            SET studentId='" .$_POST['s_id_eddited']. "'
            , name ='" .$_POST['s_name_ediited']. "'
            , lastName ='" .$_POST['s_lastName_ediited']. "'
            , fieldId ='" .$_POST['s_fieldId_ediited']. "'
            , passedUnit ='" .$_POST['s_passedUnit_ediited']. "'
            , grade ='" .$_POST['s_grade_ediited']. "' 
            WHERE studentId ='".$_POST['past_studentId']."'";
            if ($conn -> query($sql) === TRUE) {
            echo 'نام به روز شد.';
            }
		 }
 		$myrow = Student::select_all_student();
		echo '<form   method = "POST" action = "index.php">';
		echo '<table>' ;
		foreach ($myrow as $row ) {
   		$temp_row = $row;
		echo '<tr><td>';
		
		//if a student requests to edit his/her profile
		if(isset($_POST['edit_'.$row['studentId']]))
      {
        echo '<td><input type="text" value="'.$temp_row['studentId'].'" name="s_id_eddited"></td>
        <td><input type="text" value="'.$temp_row['name'].'"  name="s_name_ediited"></td>
        <td><input type="text" value="'.$temp_row['lastName'].'"  name="s_lastName_ediited"></td>
        <td><input type="text" value="'.$temp_row['fieldId'].'"  name="s_fieldId_ediited"></td>
        <td><input type="text" value="'.$temp_row['passedUnit'].'"  name="s_passedUnit_ediited"></td>  
        <td><input type="text" value="'.$temp_row['grade'].'"  name="s_grade_ediited"></td>
		<td><input type="hidden" value="'.$temp_row['studentId'].'" name="past_studentId"></td>              
        <td><input type="submit" value="save" name="student_save"></td>';
		 echo '</tr>';
      }
      else{
		  echo  '<td>'." | id : ".$row['studentId'].'</td>'.
		 		'<td>'." | name : ".$row['name'].'</td>'.
				'<td>'." | lastName : ".$row['lastName'].'</td>'.
				'<td>'." | grade : ".$row['grade'].'</td>';
			echo '<td><input type="submit" value="edit" name="edit_'.$row['studentId'].'"></td>';
			echo '</tr>';
	  }
    }
    echo '</table>';
    echo '</form>';
	
	
		 




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
