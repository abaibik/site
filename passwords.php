<!DOCTYP html>
<html>
<head>
	<meta charset=<"utf-8">
	<title>Личный сайт студентки GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
	
	function getRequestedPasswordLength () {
		return document.getElementById('passwordLength').value;
	}
	
	function generate (){
		alert (getRequestedPasswordLength ())
	
	}
	</script>
	
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>
		<div class="center">
			
			<h2>Генератор паролей</h2>

				<div class="box">
				
					<p id="info">Здесь вы можете сгенерировать надёжный пароль для любого сайта. <br> Он будет состоять из латинских букв и цифр.</p>
					<p>Сколько символов должно быть в пароле?</p>
					<input type="text" id="passwordLength">
					<br>
					<a href="#" onClick="generate();" id="button">Сгенерировать</a>				
				</div>

		</div>

		
</div>

<div class="footer">
	Copyright &copy; <?php echo date ("Y")?> Aleksandra Baibik
</div>
		
</body>
</html>