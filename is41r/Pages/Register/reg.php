<?php
$connection = mysqli_connect('localhost', 'root', '', 'cinema');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

  /*if(strlen($username)<=3)
  exit();
  else if(strlen($email)<=3)
  exit();
  else if(strlen($login)<=3)
  exit();
  else if(strlen($pass)<=3)
  exit();

  $hash = "qwdqwd124asfd";
  $pass = md5($pass . $hash);*/


$user = 'root';
$password = '';
$db = 'cinema';
$host ='localhost';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);
  $sql = 'INSERT INTO users(name,email,login,pass) VALUES(?,?,?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$username,$email,$login,$pass]);
   ?>
<div class="col-md-12">
  <h4>Forma de registrare</h4>
  <form action="" method="post">
    <label for="username">Numele</label>
    <input type="text" name="username" id="username" class="form-control">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control">

    <label for="login">Login</label>
    <input type="text" name="login" id="login" class="form-control">

    <label for="pass">Parola</label>
    <input type="password" name="pass" id="pass" class="form-control">
    <button type="submit" class="btn btn-success mt-5">

      Registrare
    </button>
  </form>
</div>
