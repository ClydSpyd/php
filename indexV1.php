
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
<form >
    <input type="number" name="num1" placholder="base">
    <input type="number" name="num2" placholder="exponent">
    <select name="operator" >
      <option >+</option>
      <option >-</option>
      <option >x</option>
      <option >/</option>
    </select>
  <br>
  <button type="submit" name="submit" value="submit">calculate</button>
  </form>
  Result: 

  <?php

  if(isset($_GET['submit'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch($operator){
      case "+":
        echo $num1 + $num2;
      break;
      case "-":
        echo $num1 - $num2;
      break;
      case "x":
        echo $num1 * $num2;
      break;
      case "/":
        echo $num1 / $num2;
    }
  };

  echo "<br> USERNAME: {$_SESSION['username']} ";

  ?>
</body>

<br>
<br>
<?php
  echo "hemlo, fren";
?>
</body>
</html>
  