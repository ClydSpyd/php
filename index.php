


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DBS</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
<br>
  <?php 
  // SIGNUP FORM WITH IF STATEMENTS IN ORDER TO CHECK FOR EXISTANT FORM DATA IN URL
  if(isset($_GET['first'])){
    $first = $_GET['first'];
    echo '<input type="text" name="first" placeholder="first name" value="'.$first.'"><br>';
    } 
    else {
      echo '<input type="text" name="first" placeholder="first name"><br>';
    };
  if(isset($_GET['last'])){
    $last = $_GET['last'];
    echo '<input type="text" name="last" placeholder="last name" value="'.$last.'"><br>';
    }
    else {
      echo '<input type="text" name="last" placeholder="last name"><br>';
    };
  if(isset($_GET['email'])){
    $email = $_GET['email'];
    echo '<input type="text" name="email" placeholder="email" value="'.$email.'"><br>';
    } 
    else {
      echo '<input type="text" name="email" placeholder="email"><br>';
    }
  if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    echo '<input type="text" name="uid" placeholder="uid" value="'.$uid.'"><br>';
    } 
    else {
      echo '<input type="text" name="uid" placeholder="uid"><br>';
  }
  ?>
    <input type="password" name="pwd" placeholder="password">
    <br>
    <button type="submit" name = "submit">Sign up</button>
  </form>


  <?php
  include 'test.php';

    // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if(strpos($fullUrl, "signup=empty") == true){
    //   echo "<br> Please complete all fields";
    // } else if(strpos($fullUrl, "signup=invalidemail") == true){
    //   echo "<br> Please enter a valid email address";
    // } else if(strpos($fullUrl, "signup=success") == true){
    //   echo "<br> Signed up successfully!";
    // }

    // CHECK URL FOR 'SIGNUP' PARAMETER, SHOW ERROR/SUCCESS MESSAGE
    if(!isset($_GET['signup'])){
      exit();
    } else {
      $signupCheck = $_GET['signup'];
      
      if($signupCheck == 'empty'){
        echo "<br> Please complete all fields";
        exit();
      } 
      elseif($signupCheck == 'invalidemail'){
        echo "<br> Please enter a valid email";
        exit();
      } 
      elseif($signupCheck == 'success'){
        echo "<br> Signed up successfully!";
        exit();
      }
    }

    ?>
</body>
</html>