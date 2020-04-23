<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>

<?php
include 'functions/user-functions.php';

include 'header.php';
echo "<br> USERNAME: {$_SESSION['username']} ";

 $dayOfWeek = date("l");
 $dayOfMonth = date("d");
 $month = date("F");

 echo "$dayOfWeek $dayOfMonth $month"
?>

  <div class="result">
<p>is weekend?:
  <?php 
    switch($dayOfWeek){
      case "Sunday":
        echo "<span> YES </span>";
      break;
      case "Saturday":
        echo "<span> YES </span>";
      break;

      default: echo "<span> no :( </span>";
    }

    ?>
    </p>
    
</div>
  <div>
  </div>
<?php
echo "hai";
for($x = 0 ; $x<3 ; $x++){
  echo "<br>$x <br>";
}
?>

<?php 
$names = ['Baloo', 'Yako', 'Mayo'];

foreach ($names as $name){
  echo "$name is a good boi <br>";
}

echo divide(12,2)
?>
</body>
</html>

