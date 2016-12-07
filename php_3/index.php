<!DOCTYPE html>
<html>
<head>
<meta content="text/html" charset="utf-8"/>
<link rel="stylesheet" href="css\php2style.css">
<title> Авторизация </title>
</head>
<body>
<div class="all">
<div class="container">
<div class="left">
<img src="img/lock.png">
<p>Добро пожаловать </p>
<p>Введите пожалуйста првильные имя пользователя и пароль для входа на сайт </p>
<a href="index2.php">Регистрация </a>
 </div>
 <?php
			$flag = false;
			$flag1 = false;
			if(isset($_POST['login']) && isset($_POST['password']))
			{
				function lines($file) 
				{ 
					if(!file_exists($file))exit("Файл не найден"); 
					$file_arr = file($file); 
					$lines = count($file_arr); 
					return $lines; 
				}
						$file = "login.txt";
						$tmp = file_get_contents($file, true);
						$line = explode("\n", $tmp);
						$index = lines($file); 
						for($i = 0; $i < $index; $i++)
						{ 
							$cell = explode("|", $line[$i]);
							if(@$cell[7] == $_POST['login'])
							{ 
								$flag1 = false;
								if(@$cell[8] == $_POST['password'])
								{ 
									echo 'Привет, '.$cell[1]." ".$cell[2];
									echo '<br><a style="position:relative;left:-30px;top:250px;" href="./index.php">Выход</a>';
									$flag = true;
								}
								else if(@$cell[8] != $_POST['password'])
								{
									$flag1 = true;
								}		
								break;
								echo 'Вы ввели неправильный логин или пароль';
							}
							else if(@$cell[7] != $_POST['login']) $flag1 = true;
						}
			}
			
					if($flag == false)
					{
							echo '<h1>Вход</h1>
									<form method="post" class="login">
    
	<p>
      <label for="login">Имя пользователя:<br></label>
      <input type="text" name="login" id="login" value="">
    </p>

    <p>
      <label for="password">Пароль:<br></label>
      <input type="password" name="password" id="password" value="">
    </p>';
		if( $flag1 == true )
		{
			echo '<span style="color:red;margin-left:0px;">Вы ввели неправильный логин или пароль</span><br/>';
		}
    echo '<p class="login-submit">
      <button type="submit" name="but" class="login-button"><b>Вход<b></button>
</p>
  </form>

</div>';
					}
?>
</body>
</html>