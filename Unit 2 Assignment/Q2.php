<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
</head>
<body style="font-family: Arial;">

<h2>Enter Book Details</h2>
<form method="post">
    <label>Title:</label>
    <input type="text" name="title" required><br><br>
    <label>Author:</label>
    <input type="text" name="author" required><br><br>

    <input type="submit" name="submit" value="Display Info">
</form>

<?php
class Book {
  public $title;
  public $author;

  function __construct($title, $author) {
    $this->title= $title;
    $this->author=$author;
    echo "<h3>Book created successfully!</h3>";
  }

  function displayInfo() {
    echo "<div style='margin-top:20px; padding:10px; border:2px solid black; width:300px;'>";
    echo "<h3>Book Information</h3>";
    echo "Title: " . $this->title . "<br>";
    echo "Author: " . $this->author . "<br>";
    echo "</div>";
  }

  function __destruct() {
    echo "<h3>Book object destroyed.</h3>";
  }
}

if(isset($_POST['submit'])) {
  $title= $_POST['title'];
  $author= $_POST['author'];


  $book=new Book($title,$author);
  $book->displayInfo();
}
?>
</body>
</html>