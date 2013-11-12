<!doctype html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<title>php</title>
	</head>
	<body>
		<form method="get" action="fibonacci.php">
		<label for="number1">數字</label>
		<input type="text" id="number1" name="number1">
		<br>
		<input type="submit" value="確定">
		<br/>
		<?php if (isset($_GET['number1']) ):?>
			<?php if (!is_numeric($_GET['number1'])): ?><p>請輸入數字</p><?php endif; ?>
		<?php 
		 function fibonacci($number1){
				$fibs[$i] = $fibs[$i-1] + $fibs[$i-2];
		}
		fibonacci($_GET['number1'])
		?>
			
			
			
			
		
		<?php endif;?>
		</form>
	</body>
</html>