<!DOCTYP html>
<html>
<head>
	<meta charset=<"utf-8">
	<title>Личный сайт студентки GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h2>Игра в загадки</h2>

			<div class="box">
			
			<?php
			
				if(isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])){
					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					if ($userAnswer == "морковь" || $userAnswer == "морковка"){
						$score++;
					}
					
					$userAnswer = $_GET["userAnswer2"];
					if ($userAnswer == "кран" || $userAnswer == "водопроводный кран"){
						$score++;
					}
						
					$userAnswer = $_GET["userAnswer3"];
					if ($userAnswer == "кактус" || $userAnswer == "растение"){
						$score++;
					}
					
					echo "Вы отгадали " . $score . " загадки";
				}
			?>
			
				<form method="GET">
					<p>Сидит девица в темнице, а коса на улице</p>
					<input type="text" name="userAnswer1">
					
					<p>Из стены торчу<br>
					   Головой кручу<br>
					   Мою и пою<br>
					   Целую семью</p>
					<input type="text" name="userAnswer2">
					
					<p>Ёжик странный у Егорки<br>
					   На окне сидит в ведерке<br>
					   День и ночь он дремлет<br>
					   Спрятав ножки в землю</p>
					<input type="text" name="userAnswer3">
					
					
					<br>
					<input type="submit" value="Ответить" name="">
				</form>




</div>
	</div>
		</div>
			</div>

	

</div>
<div class="footer">
		Copyright &copy; <?php echo date ("Y")?> Aleksandra Baibik
</div>
</div>

</body>
</html>
	