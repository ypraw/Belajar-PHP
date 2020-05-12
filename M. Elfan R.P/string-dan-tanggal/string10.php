<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<textarea name="input" id="" cols="50" rows="10"></textarea>
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>


<?php 
	if (isset($_POST['submit'])) {
		echo '<br>Tanpa nl2br() '.$_POST['input'].'<br>';
		echo '<br>Dengan nl2br() <br>'.nl2br($_POST['input']);
	}
 ?>