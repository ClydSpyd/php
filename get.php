

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

    include 'header.php';

?>
  <form method="GET">
    <input type="hidden" name="name" value="DaveGET">
    <button type="submit"name="submit" value="submit">submit</button>
  </form>
  <?php 
  
  // echo $_POST['name'];
  
  if(isset($_GET['submit'])){
    echo $_GET['name'];
  }
  ?>
 
  <br>
  <br>
  <form method="POST">
    <input type="hidden" name="name" value="DavePOST">
    <button type="submit"name="submitPOST" value="submit">submit</button>
  </form> 


  <?php 
  if(isset($_POST['submitPOST'])){
    echo $_POST['name'];
  }
  echo "<br>USERNAME: {$_SESSION['username']} ";
  ?>
</body>
</html>