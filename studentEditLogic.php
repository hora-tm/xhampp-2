<?php

include("studentLogic.php");
include("fatherOfLogics.php");
global $temp_row;


if (isset($_POST['student_save'])) {
	$edited_name = $_POST['s_name_edited'];
	echo $edited_name;
	$edited_sId = $_POST['s_id_edited'];
	$edited_lastName = $_POST['s_lastName_edited'];
	$edited_fieldId = $_POST['s_fieldId_edited'];
	$edited_passedUnit = $_POST['s_passedUnit_edited'];
	$edited_grade = $_POST['s_grade_edited'];
	$past_value = $_POST['past_studentId'];
	Student::update_student($edited_sId, $edited_name, $edited_lastName, $edited_fieldId, $edited_passedUnit, $edited_grade, $past_value, $conn);
}