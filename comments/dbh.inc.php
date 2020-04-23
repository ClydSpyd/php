<?php

$connDB = mysqli_connect('localhost', 'root', '', 'commentssection');

if (!$connDB){
  die("connection failed: ".mysqli_connect_error());
};



