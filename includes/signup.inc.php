<?php

  if(isset($_POST['submit'])){
    include_once 'link.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //VALIDATE NO EMPTY FEILDS
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
      header("location: ../index.php?signup=empty&first=$first&last=$last&uid=$uid&email=$email");
      exit();
    }
    //VALIDATE EMAIL
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
        exit();
    }

    //SUBMIT VALIDATED FORM USING PREPARED STATEMENTS TO AVOID SQL INJECTION
    else {
      $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
      VALUES (?, ?, ?, ?, ?)"; 
    
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'SQL ERROR';
      } else {
        mysqli_stmt_bind_param($stmt, 'sssss', $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
      }
      header("location: ../index.php?signup=success");
      exit();
    }
  } 
  else {
    header("location: ../index.php?signup=error");
  }