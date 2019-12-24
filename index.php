<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Личный сайт студента GeekBrains</title>
  <link href="style.css" rel="stylesheet">
 </head>
 <body>
<div class="content">

<?php
	include "menu.php";
?>

	<div class="center">
		<h1>Личный сайт студента GeekBrains</h1>
		<img src="img/photo.jpg">
		
		<div class="box_text">
			<p>Всем привет! Меня зовут <i>Евгения Блинкова</i> и я студент <a href='https://geekbrains.ru/courses'>GeekBrains</a></p>
			
			<p>Я живу в Томске. Закончила Физический факультет ТГУ и сейчас работаю в Планетарии.</p>
			
			<a href='index.php'>Главная</a>
			<a href='puzzle.php'>Загадки</a>
			<a href='guess.html'>Угадайка</a>
			<a href='random.html'>Генератор паролей</a>
		</div>
	</div>
</div>	
	<div class="footer">
		Copyright &copy; <?php echo date("Y");?> ZEBRA
	</div>
 </body>
</html>