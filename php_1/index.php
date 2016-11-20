<!DOCTYPE html>
<html>
<head>
<meta content="text/html" charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">
<title> Авторизация </title>
<style type = "text/css">
*{
margin:0px;
padding:0px;
}
body{
width:100%;
height:100%;
}
html{
width:100%;
height:100%;
}
.all{
min-width:1004px;
width:100%;
height:100%;

}
.container
{
	height:301px;
	border:4px solid #BFBFBF;
width:605px;
position:relative;
top:30%;
margin:auto;
background: #DBDBDB;
}
#login
{
	margin-bottom:15px;
}
#password{margin-bottom:15px;}
input
{
position:relative;
margin:0px 0px 10px;
font-size:13pt;
}
h1{
	display:inline-block;
	margin:30px 10px 10px 20px;
	color:brown;
	
}
form{
	background-color:#CFCFCF;
	padding:10px;
	border: 2px solid #BFBFBF;
	margin-left:20px;
	display:inline-block;
	width:300px;
}
.left p
{
margin:20px 15px;
}
.left{
	display:inline-block;
	max-width:250px;
	float:left;
	}
	img{
		 width:100px;
		 position:relative;
		 margin:10px 75px 0px;
	}
	a{
		margin:15px;
	}
	button{padding:3px 6px;font-size:12pt; margin-bottom:10px;}
	span{color:red; width:290px;}
</style>
</head>
<body>
<div class="all">
<div class="container">
<div class="left">
<img src="img/lock.png">
<p>Добро пожаловать </p>
<p>Введите пожалуйста првильные имя пользователя и пароль для входа на сайт </p>
<a>Регистрация</a>
 </div><h1>Вход</h1>
<form method="post" class="login">
    
	<p>
      <label for="login">Имя пользователя:<br></label>
      <input type="text" name="login" id="login" value="<?php if ( empty ($_POST['login'] ) )  
		  echo "";
else
echo $_POST['login'];	
	  ?>">
    </p>

    <p>
      <label for="password">Пароль:<br></label>
      <input type="password" name="password" id="password" value="<?php if ( empty ($_POST['password'] ) )  
		  echo "";
else
echo $_POST['password'];	
	  ?>">
    </p>

    <p class="login-submit">
      <button type="submit" name="but" class="login-button"><b>Вход<b></button>
</p>
	  <?php if ( isset( $_POST['but'] ) )
	  if( $_POST['login'] == "sixsta" && $_POST['password'] == "12345678" ){
	  echo '<br><span>Вы авторизованы</span>';
	  }
	  else{
	  echo '<span>Введённая комбинация логина и пароля не совпадают</span>';
	  }
   ?>
  </form>

</div>
</body>
</html>