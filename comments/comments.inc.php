<?php

function setComment($connDB){
  if (isset($_POST['commentSubmit'])){
    $uid = $_POST['uid'];
    $content = $_POST['message'];
    $date = $_POST['date'];

    $sql = "INSERT INTO comments (uid, content, date) VALUES (?, ?, ?)"; 
    // $result = $connDB->query($sql);
    $stmt = mysqli_stmt_init($connDB);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo 'SQL ERROR';
    } else {
      mysqli_stmt_bind_param($stmt, 'sss', $uid, $content, $date);
      mysqli_stmt_execute($stmt);
    }
    header("location: index.php?comment=success");
  }
};

function getComments($connDB){
  $sql = "SELECT * FROM comments";
  $result = $connDB->query($sql);

  while($row = mysqli_fetch_assoc($result)){ 
  // $row = $result->fetch_assoc();
    
  echo '<div class="commentBox">' .'"'.$row['content'].'"'.'<div class="uid">'.$row['uid'].', '.$row['date'].'</div></div>';
  }
};