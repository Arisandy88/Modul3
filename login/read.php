
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/qwerty.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
  	  <div id="formContent">
        <form action="" method="post">
          <?php
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (($username == "figo") && ($password == "1234")){
              echo "<h1>LOGIN BERHASIL</h1>";
            }
            else {
              echo "<h1>LOGIN GAGAL</h1>";
            }
          ?>
        </form>
      </div>
    </div>
  </body>
</html>
