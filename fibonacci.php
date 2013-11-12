<!doctype html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<title>php</title>
	</head>
	<body>
		<form method="get" action="index.php">
		<label for="number1">數字</label>
		<input type="text" id="number1" name="number1">
		<br>
		<input type="submit" value="確定">
		<br/>
		<?php if (isset($_GET['number1']) && isset($_GET['number2']) ):?>
			<?php if (!is_numeric($_GET['number1'])): ?><p>請輸入數字</p><?php endif; ?>
			<?php endif;?>
		</form>
	</body>
</html>