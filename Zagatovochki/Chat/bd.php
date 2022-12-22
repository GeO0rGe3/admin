<?php
session_start();


$username = "";
$email    = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', 'root', 'login');


if (isset($_POST['reg_user'])) {

  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);

  if (empty($username)) { array_push($errors, "Имя пользователя обязательно"); }
  if (empty($email)) { array_push($errors, "Email обязательно"); }
  if (empty($password)) { array_push($errors, "Пароль обязательно"); }
  if ($password != $password1) {
  array_push($errors, "Пароли не совпадают");
  }


  $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' OR password = '$password' OR password1 = '$password1' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Имя пользователя уже используется");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email уже используется");
    }
  }


  if (count($errors) == 0) {
    $password = md5($password1);

    $query = "INSERT INTO login (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Вы вошли";
    header('location: index.html');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Имя пользователя обязательно");
  }
  if (empty($password)) {
    array_push($errors, "Пароль обязательно");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Вы вошли в систему";
      header('location: index.html');
    }else {
      array_push($errors, "Неправильное имя пользователя или пароль");
    }
  }
}

?>
