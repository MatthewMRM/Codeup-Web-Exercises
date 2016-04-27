<?php 

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//if (!empty($_POST)) {
    //Check user password
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ('$username' === 'guest' && '$password' === 'password'){
        header('Location: authorized.php');
        die;
    } else {

        $message = 'this is a get request';
}
}

?>

 <!doctype html>
 
 <html>
     <head>
         
         <title>Login</title>

     </head>
     <body>
        
         <form method="POST">
            <label>username</label>
            <input type="text" name="username"><br>
            <label>password</label>
            <input type="password" name="password"><br>
            <input type="submit" value= "Login">
         </form>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     </body>
 </html>