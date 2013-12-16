<meta charset="utf-8">
<form method="GET" action="text.php">
數字: <input type="text" name="user">
數字2: <input type="text" name="user1">
<br/>
<input type="submit" value="yes">
<br>
<?php echo "{$_GET['user']} * {$_GET['user1']} =";echo  $_GET['user'] * $_GET['user1']; ?>
<?php echo "{$_GET['user']} - {$_GET['user1']} =";echo  $_GET['user'] - $_GET['user1']; ?>
</form>