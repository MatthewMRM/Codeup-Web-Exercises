<?php
function pageController()
{
  $login = 'LOGIN';
  if(!empty($_POST)){
    if($_POST['name'] == 'guest' && $_POST['password'] == 'password') {
      header('Location: authorized.php');
      die();
    } else {
      $login = "LOGIN FAILED";
    }
  }
    return ['login' => $login];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | PHP</title>
</head>
<body>
<h1><?= $login; ?></h1>
  <form method="POST" action="login.php">
    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Password</label>
    <input type ="password" name="password"><br>
    <input type ="submit">
  </form>
</body>
</html>