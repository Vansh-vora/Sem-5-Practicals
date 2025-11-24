<?php

class Person{
  public $name;
  public $age;

  function __construct($name,$age){
    $this->name=$name;
    $this->age=$age;
  }
  function display(){
    echo "Name: $this->name<br>";
    echo "Age: $this->age<br>";
  }
}

class Student extends Person{
  public $rollno;

  function __construct($name,$age,$rollno){
    parent::__construct($name,$age);
    $this->rollno=$rollno;
  }

  function display(){
      echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Roll No: $this->rollno<br>";
  }
}

$student1=new Student("vansh",20,101);

$student1->display();
?>