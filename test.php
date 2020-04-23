<?php
echo "<p style='margin-top:100px'>TEST</p>";

//PASWORD HASH AND UNHASH
// echo "test123";
// echo password_hash('test123', PASSWORD_DEFAULT); 
$input = "test123";
$hashedPWD = password_hash('test123', PASSWORD_DEFAULT);
echo password_verify($input, $hashedPWD). '<br>';

//ARRAYS
$data = array();
array_push($data, 'Baloo','Dave','Lina');
// $data[] = "dave";
print_r($data);
echo "<br><br>";
include 'includes/getFromDB.php';
