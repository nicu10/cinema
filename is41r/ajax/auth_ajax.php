<?php
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

$error = '';
  if(strlen($login)<=3)
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

  $sql = 'SELECT `ID-user` FROM `users` WHERE `login` = :login && `pass` = :pass';
  $query = $pdo->prepare($sql);
  $query->execute(['login' => $login, 'pass' => $pass]);

$user = $query -> fetch (PDO::FETCH_OBJ);
if($user->id == '0')
echo 'asa utilizator nu exista';
else {
  setcookie('log', $login, time() + 3600 * 24, "/");
  echo 'Logare terminata';
}

?>
