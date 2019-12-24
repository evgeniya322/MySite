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

<div class="contentWrap">	
	<div class="center">
		<h1>Игра в загадки</h1>
			
			<div class="box">
			
			<?php
				
				if(isset($_GET['userAns1'])&&isset($_GET['userAns2'])&&isset($_GET['userAns3'])&&isset($_GET['userAns4']))
				{
					$userAnswer = $_GET["userAns1"];
					$score =0;
					if($userAnswer=="небо"){
						$score++;
					}
					
					$userAnswer = $_GET["userAns2"];
					if($userAnswer=="радуга"){
						$score++;
					}
					
					$userAnswer = $_GET["userAns3"];
					if($userAnswer=="гриб"||$userAnswer=="грибок"){
						$score++;
					}
					
					$userAnswer = $_GET["userAns4"];
					if($userAnswer=="арбуз"||$userAnswer=="арбузик"){
						$score++;
					}
					
					echo "Вы угадали ". $score ." загадок";
				}
			?>
			
				<form method="GET">
					<p>Голубой шатер весь мир покрыл.</p>
					<input type="text" name="userAns1">
					
					<p>Цветное коромысло через речку зависло.</p>
					<input type="text" name="userAns2">
					
					<p>У кого одна нога, да и та без башмака?</p>
					<input type="text" name="userAns3">
					
					<p>Сам алый, сахарный, Кафтан зеленый, бархатный.</p>
					<input type="text" name="userAns4">
					
					<br>
					<input type="submit" value="Ответить" name="">
				</form>
			</div>
	</div>	
	<div class="footer">
		Copyright &copy; ZEBRA
	</div>
</div>	
	
</div>
 </body>
</html>