<doctype html>
  <html>
    <body>  
      <form method="POST">
        Username:
        <input type="text" name="username"><br>
        ID:
        <input type="text" name="id"><br>
        <input type="submit" value="Submit">
</form>
        <?php
#Create a form with username and id fields using the POST method.
#On submission, show:
#• "Welcome [username]" if the id is blank display appropriate message.
#• "Invalid login" otherwise.

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $username=$_POST['username'];
  $id=$_POST['id'];

  if (empty($username)){
    echo "Username is required.";
  }
  else if (empty($id)){
    echo "Welcome $username";
  }
  else {
    echo "Invalid login";
  }
}
?>
    </body>
  </html>