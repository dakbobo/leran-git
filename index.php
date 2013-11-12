<!doctype html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<title>php</title>
	</head>
	<body>
		<form method="get" action="index.php">
		<label for="number1">數字1</label>
		<input type="text" id="number1" name="number1">
		<br>
		<label>數字2</label>
		<input type="text" name="number2">
		<input type="submit" value="確定">
		<br/>
		<br/>
		<br/>
		<?php if (isset($_GET['number1']) && isset($_GET['number2']) ):?>
			<?php if (!is_numeric($_GET['number1'])): ?><p>請輸入數字1</p><?php endif; ?>
			<?php if (!is_numeric($_GET['number2'])): ?><p>請輸入數字2</p><?php endif; ?>
			<table border="1">
  			<tr>
			<?php $frequency1=2; $number1=2; $number2=1;?>
			     <?php for ($number1; $number1<=($_GET['number1']); $number1++): ?>
  				  <td><?php echo "{$number1} * {$number2} = ",$number1 * $number2; ?></td>
   				  <?php if ($number1 % 5 > 0 && $number2 < $_GET['number2'] ):?>
					<?php if ($_GET['number1'] <5 && $number1 == $_GET['number1']  ):?>
					 <tr>
  				     <?php $number1=$frequency1-1; $number2=$number2+1; ?>
					<?php endif;?>
			 	  <?php endif;?>
 				  <?php if ($number1 % 5 == 0 && $number2 < $_GET['number2'] && $number1 < $_GET['number1'] ):?>
  				   <tr>
  				   <?php $number1=$frequency1-1; $number2=$number2+1; ?>
  				  <?php endif;?>	  
  				  <?php if ($number1 % 5 == 0 && $number1>$frequency1-1 && $number2 == $_GET['number2'] && $number1 < $_GET['number1']  ):?>
  				   <?php $number2=1; $frequency1=$number1+1;?>
  				   </table>
  				   <br>
  				   <table border="1">
  				   <tr>
  				  <?php endif;?>	  
  				  <?php if ($number2 == $_GET['number2'] && $number1 == $_GET['number1']){return;};?>
				  <?php if ($number1 % 5 >= 0 && $number1 == $_GET['number1'] ):?>
				   <tr>
  				   <?php $number1=$frequency1-1; $number2=$number2+1; ?>
				  <?php endif;?>
			<?php endfor;?>
      		</tr>
			</table>
      	<?php endif;?>	
		</form>
	</body>
</html>