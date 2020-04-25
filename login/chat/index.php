<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
    let from, userAnchors, start = 0,
      url = "http://localhost/php/login/chat/users.php";

    $(document).ready(function() {
      load();

      return false;
    });

    function load() {
      $.get(url, function(result) {
        if (result.users) {
          result.users.forEach(item => {
            $('#users').append(renderUser(item));
          })
        };
        userAnchors = Array.from(document.querySelectorAll('.userChatBtn'));

        userAnchors.forEach(a => a.addEventListener('click',function(e){
          console.log(e.target.id);
          let activeChat = e.target.id;
          $.post(url, {
            activeChat: activeChat
          })
        }))
        // load();
      })
    }

    function renderUser(user) {
      console.log(user)
      return ` <div class="user"><p>${user.uid_users}
              <form method="POST" action="">
                <input type="hidden" name="id" value="${user.uid_users}">
                <button class="userChatBtn" type="submit" name="chatBtnSubmit">chat</button>
              </form>
              </div>`
      // return `<div ><p>${user.uid_users}
      //         <button class="userChatBtn" id="${user.uid_users}" >chat</button>
      //         </p></div>`
    }
  </script>
</head>


</html>
<?php 
if(isset($_POST['chatBtnSubmit'])){
  $_SESSION['activeChat'] = $_POST['id'];
  // echo $_POST['id'];
};
?>