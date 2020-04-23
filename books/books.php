<?php 

  function getBooks($connDB){
    $sql = "SELECT * FROM books";
    $result = $connDB->query($sql);

    while($row = mysqli_fetch_assoc($result)){ 

  
      
    echo '
    
    <div class="bookRow">
      <div class="bookInfo">
        <p>' . $row['author'] . ' - ' . $row['title'] . '</p>
      </div>
      <div class="symbols">
        <form method="POST" action="">
          <input type="hidden" name="id" value="' . $row['id'] . '">
          <button class="editButton" type="submit" name="edit">edit</button>
        </form>
        <form method="POST" action="' . removeBook($connDB) . '">
          <input type="hidden" name="id" value="' . $row['id'] . '">
          <button class="deleteButton" type="submit" name="removeSubmit">X</button>
        </form>
      </div>
    </div>
    
    <div class="bookRowEdit hidden">
      <div  class="bookInfo">
        <form  method="POST" action="'. editBook($connDB) . '">
          <input onkeydown="retSub(event)" name="author" value="'. $row['author'] .'">
          <input onkeypress="retSub(event)" name="title" value="'. $row['title'] .'"> 
        </div>
        <div class="symbols">
          <input type="hidden" name="id" value="'. $row['id'].'">
          <button class="doneButton" type="submit" name="editSubmit">done</button>
      </form>
      </div>
    </div>
    ';

    }
  };

  function addBook($connDB){
    if(isset($_POST['bookSubmit'])){
      $title = $_POST['title'];
      $author = $_POST['author'];
      $isbn = $_POST['isbn'];
      $date = $_POST['date'];

    $sql = "INSERT INTO books (title, author, isbn, dateAdded) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($connDB);
    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, 'ssss', $title, $author, $isbn, $date);
    mysqli_stmt_execute($stmt);

    header("location: index.php?comment=success");
    }
  }

  function removeBook($connDB){
    if(isset($_POST['removeSubmit'])){
      $id=$_POST['id'];

      $sql = "DELETE FROM books WHERE id=$id";

      $stmt = mysqli_stmt_init($connDB);
      mysqli_stmt_prepare($stmt, $sql);

      mysqli_stmt_execute($stmt);

      header("location: index.php?remove=$id");
    }
  }
  
  function editBook($connDB){
    if(isset($_POST['editSubmit'])){
      $author = $_POST['author'];
      $title = $_POST['title'];
      $id = $_POST['id'];
      
      $sql="UPDATE books SET author='$author', title='$title' WHERE id=$id";
      $result = $connDB->query($sql); 
      header("location: index.php?edit=$id");
      // print $id;   
      
    }
  };