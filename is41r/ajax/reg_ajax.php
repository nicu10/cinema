<?php
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

$error = '';
  if(strlen($username)<=3)
  $error = 'introduceti numele';
  else if(strlen($email)<=3)
  $error = 'introduceti Email';
  else if(strlen($login)<=3)
  $error = 'introduceti login';
  else if(strlen($pass)<=3)
  $error = 'introduceti parola';
  if($error !=''){
    echo $error;
    exit();
  }

  $hash = "qwdqwd124asfd";
  $pass = md5($pass . $hash);

require_once '../mysqli_connect.php';

  $sql = 'INSERT INTO users(name,email,login,pass) VALUES(?,?,?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$username,$email,$login,$pass]);

echo 'terminat';

?>
