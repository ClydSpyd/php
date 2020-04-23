
  <?php
  include 'dbh.inc.php';
  include 'comments.inc.php';
  date_default_timezone_set('Europe/Madrid');
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=vide, initial-scale=1.0">
  <title>Video</title>
  <link rel="stylesheet" href="styles.css">


</head>

<body>
  <div class='wrapper'>
    <div class="inner">
      <div>
        
      <video width="640" height="480" controls>
        <source src="movie.mp4" type="video/mp4">;
      </video>

      <form method='POST' action='<?php setComment($connDB) ?>'>
        <input type='hidden' name='uid' value='anonymous'>
        <input type='hidden' name='date' value=' <?php date('Y-m-d H:i:s') ?> '>
          <textarea name='message' placeholder='add comment'></textarea><br>
          <button name='commentSubmit' type='submit'>post</button>
        </form>

      <!--  // echo "
      //   <form method='POST' action='".setComment($connDB)."'>
      //   <input type='hidden' name='uid' value='anonymous'>
      //   <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
      //     <textarea name='message' placeholder='add comment'></textarea><br>
      //     <button name='commentSubmit' type='submit'>post</button>
      //   </form>"; -->
      
      </div>

    <div class="comments">
      <?php getComments($connDB); ?>
    </div>
    </div>
  </div>
</body>

</html>