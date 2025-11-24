<?php

class Book{
  public $title;
  public $author;

  function __construct($title,$author){
    $this->title=$title;
    $this->author=$author;

    echo "<b>Book Created</b>";
    echo "Title: $this->title<br>";
    echo "Author: $this->author<br>";
  }

  function __destruct(){
    echo "Goodbye<br>";
  }
}

$book1=new Book("Wings of Ice","Vansh Vora");
?>