<?php include('bd.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" type="text/css" href="css\normalize.css">
</head>
<body>

  <div class="header">
  	<h2>Авторизация</h2>
  </div>
	 
  <form method="post" action="log.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Имя пользователя</label>
  		<br>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<br>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  	<p>
  		 <a href="reg.php">Нет аккаунта?</a>
  	</p>
  </form>

 
</body>
</html>