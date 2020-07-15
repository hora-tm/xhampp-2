<?php 
include ("db_connection.php");
 $conn = OpenCon();

class Field {
  // Properties
  public $fieldId;
  public $name;
  public $terms;

  
  //constructor
  function __construct($name ,$fieldId ,$terms ){
       $this->fieldId = $fieldId;
       $this->name = $name;
       $this->terms = $terms;
     
   }

  // Methods
  
  