<?php 

class ShopCart {
    
    
     private final $limiteUnit = 6;
     private $selectedCourseNum;
     private  $fieldId;
     private public $term;
     
     public $selectedCourse = array();
     global $confirmed;
     
     
     function __construct($fieldId , $term){
          $this->fieldId = $fieldId;
          $this->term = $term;
     }
     
     
     function choose_course($code ,$name ,$unit ,$studentNum ,$teacherId ,$term {
         if($this->selectedCourseNum > $this->limitedUnit){
             //throw an alert
             echo "maximum number of course is chosen !"
             return 0;
         }
         else if($fieldId != $this->fieldId || $term != $this->term){
             echo " inavlid course ";
             return 0;
         }
         else{
             array_push($selectedCourse , )
         }
     }
}
?>