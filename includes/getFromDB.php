  

<!-- GET INFO FROM DB USING PREPARED STATEMENTS -->
<?php
  include_once 'includes/link.php';

$data = 'clydspyd';
//CREATE A TEMPLATE
$sqlGet = "SELECT * FROM users where user_uid = ?;";
//CREATE A PREPARED STATEMENT
$stmt = mysqli_stmt_init($conn);
//PREPARE THE STATEMENT
if(!mysqli_stmt_prepare($stmt, $sqlGet)) {
  echo "SQL statement failed";
}else {
  //BIND PARAMETERS TO THE PLACEHOLDER
  mysqli_stmt_bind_param($stmt, 's', $data);
  //RUN PARAMETERS INSIDE DATABASE
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  // while ($row = mysqli_fetch_assoc($result)) {
  //   echo '<br>' . $row['user_uid']. '<br>';
  //   // echo "{$row['user_uid']}<br>";
  // }  
}
?>



<!-- //STORE RESULTS IN ARRAY -->
<?php
$sql = "SELECT * FROM users;";
$resultAll = mysqli_query($conn, $sql);
$resArr = array();
if (mysqli_num_rows($resultAll) > 0) {
  while($row = mysqli_fetch_assoc($resultAll)){
    $resArr[] = $row;
    echo "<br>".$row['user_first']."<br>";
  }
}
print_r($resArr);

foreach($resArr as $item){
  echo "<br>".$item['user_first']."<br>";
};



?>