<?php include('bd.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" type="text/css" href="css\normalize.css">
</head>
<body>


</ul>
</div>
</div>
</div>
</header>
  <div class="header">
  	<h2>Регистрация</h2>
  </div>
	
  <form method="post" action="reg.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		 
  	  <label>Имя пользовтаеля</label>
  	  <br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	    <br>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	    <br>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  		  <br>
  	  <label>Подтвердите пароль</label>
  	    <br>
  	  <input type="password" name="password1">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Регистрация</button>
  	</div>
  	<p>
  	 <a href="log.php">Есть аккаунт?</a>
  	</p>
  </form>

 
</body>
</html>