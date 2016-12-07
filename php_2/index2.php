<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css\php2style1.css">
<title> Регистрация </title>
</head>
<body>
<div class="container">
<?php
	function lines($file) 
	{ 
		if(!file_exists($file))exit("Файл не найден"); 
		$file_arr = file($file); 
		$lines = count($file_arr); 
		return $lines; 
	} 
	$flag = false;
		if(isset($_POST['lastname']) && isset($_POST['name']) && isset($_POST['otchestvo']) && isset($_POST['pol']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['pass']) && isset($_POST['mail']) && isset($_POST['about']))
		{
			if(!filter_var($_POST['mail'],  FILTER_VALIDATE_EMAIL))
			{
			$invm = '<br>Вы ввели некоректный email';
			$flag=true;
			}
			if($_POST['password'] != $_POST['pass'])
			{
				$errpwd = '<br>Пароли не совпадают';
				$flag=true;
			}
			if(empty($_POST['password']))
			{
				$emppwd = '<br> Вы не ввели пароль';
				$flag=true;
			}
			if(empty($_POST['lastname']))
			{
				$emplastname = '<br> Вы не ввели фамилию';
				$flag=true;
			}
			if(empty($_POST['name']))
			{
				$empname = '<br> Вы не ввели имя';
				$flag=true;
			}
			if(empty($_POST['otchestvo']))
			{
				$otchestv = '<br>Вы ввели пустое отчество';
				$flag=true;
			}
			if(empty($_POST['login']))
			{
				$emptLogin = '<br>Вы ввели пустой логин';
				$flag=true;
			}
			if($flag==false)
			{
				$file = 'login.txt'; 
				$str = $_POST['lastname']."|".$_POST['name']."|".$_POST['otchestvo']."|".$_POST['pol']."|".$_POST['day']."|".$_POST['month']."|".$_POST['year']."|".$_POST['login']."|".$_POST['password']."|".$_POST['mail']."|".$_POST['about']."\n"; 
				$tmp = file_get_contents($file, true);
				$line = explode("\n", $tmp);
				$index = lines($file);										
				for($i = 0; $i < $index; $i++)
					{ 
						$arr = explode("|", $line[$i]);
						if(@$arr[7] == $_POST['login'])
							{ 
								$flag = true;
								break;
							}
					}
				if($flag == true) 
				{ 
					$samelog = "<br>Такой логин уже зарегистрирован.";
				}
				else
				{
					file_put_contents($file, $str, FILE_APPEND);
					$crt =  '<br>Аккаунт успешно создан';
				}
				

			}
		}		
	?>
<form method="post" class="login">
 	<body>			
			<form method=post> 
				<p>Фамилия</p><input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>"><span><?php if( isset ($emplastname) ) echo $emplastname;?></span>
				<p>Имя:</p><input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name'];?>"><span><?php if(isset($empname)) echo $empname;?></span>
				<p>Отчество</p><input type="text" name="otchestvo" value="<?php if ( isset ($_POST['otchestvo'] ) ) echo $_POST['otchestvo'];?>"> <span><?php if(isset($otchestv)) echo $otchestv;?> </span>
				<p>Пол:</p>
				<select name="pol" value="<?php if(isset($_POST['pol'])) echo $_POST['pol'];?>">
					<option>Муж</option>
					<option>Жен</option>
				</select>
				<p>День рождения:</p>
				<select name="day" value="<?php if(isset($_POST['day'])) echo $_POST['day'];?>">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
				<select name="month" value="<?php if(isset($_POST['month'])) echo $_POST['month'];?>">
					<option>Январь</option>
					<option>Февраль</option>
					<option>Март</option>
					<option>Апрель</option>
					<option>Май</option>
					<option>Июнь</option>
					<option>Июль</option>
					<option>Август</option>
					<option>Сентябрь</option>
					<option>Октябрь</option>
					<option>Ноябрь</option>
					<option>Декабрь</option>
				</select>
					<select name="year" value="<?php if(isset($_POST['year'])) echo $_POST['year'];?>">
					<option>1926</option>
					<option>1927</option>
					<option>1928</option>
					<option>1929</option>
					<option>1930</option>
					<option>1931</option>
					<option>1932</option>
					<option>1933</option>
					<option>1934</option>
					<option>1935</option>
					<option>1936</option>
					<option>1937</option>
					<option>1938</option>
					<option>1939</option>
					<option>1940</option>
					<option>1941</option>
					<option>1942</option>
					<option>1943</option>
					<option>1944</option>
					<option>1945</option>
					<option>1946</option>
					<option>1947</option>
					<option>1948</option>
					<option>1949</option>
					<option>1950</option>
					<option>1951</option>
					<option>1952</option>
					<option>1953</option>
					<option>1954</option>
					<option>1955</option>
					<option>1956</option>
					<option>1957</option>
					<option>1958</option>
					<option>1959</option>
					<option>1960</option>
					<option>1961</option>
					<option>1962</option>
					<option>1963</option>
					<option>1964</option>
					<option>1965</option>
					<option>1966</option>
					<option>1967</option>
					<option>1968</option>
					<option>1969</option>
					<option>1970</option>
					<option>1971</option>
					<option>1972</option>
					<option>1973</option>
					<option>1974</option>
					<option>1975</option>
					<option>1976</option>
					<option>1977</option>
					<option>1978</option>
					<option>1979</option>
					<option>1980</option>
					<option>1981</option>
					<option>1982</option>
					<option>1983</option>
					<option>1984</option>
					<option>1985</option>
					<option>1986</option>
					<option>1987</option>
					<option>1988</option>
					<option>1989</option>
					<option>1990</option>
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
				</select>
				<p>Логин:</p><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login'];?>"><span ><?php if (isset($emptLogin))echo $emptlogin;?></span><span><?php if(isset($samelog)) echo $samelog;?></span>
				<p>Пароль:</p><input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'];?>"><span ><?php if ( isset ($emppwd) ) echo $emppwd;?></span>
				<p>Повторите пароль</p><input type="password" name="pass" value="<?php if ( isset ($_POST['pass'] ) )  echo $_POST['pass'];?>"><span><?php if ( isset ($errpwd) ) echo $errpwd;?></span>
				<p>e-mail:</p><input type="text" name="mail" value="<?php if ( isset ($_POST['mail'] ) ) echo $_POST['mail']; ?>"><span ><?php if ( isset ($invm) ) echo $invm;?></span>
				<p>О себе:</p><textarea type="text" name="about" value="<?php if ( isset ($_POST['about'] ) ) echo $_POST['about'];?>"></textarea><br>
				<span style="color:green;"><?php if(isset($crt)) echo $crt;?></span>
				<input type="submit" name="but" value='Регистрация'>
				<input type="reset" value='Reset'><br>
	</form>
</div>
</body>
</html>