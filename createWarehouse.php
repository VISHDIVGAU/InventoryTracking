<!DOCTYPE html>
<html>
<?php
include "DBConnect.php";
?>
<body>
<div class='warehouse'>
	<form action='postwarehouse.php' method='post' autocomplete='off'>
	<h2><center> Enter the city oof new warehouse here </center></h2>
	<center>
	<div class='row'>
		<div class='col-25'>
		<label for='City'>city Name</label>
		</div>
		<div class='col-75'>
		<input type='text' id='City' name='City' placeholder='City name...' style='width:300px; height:50px;' required>
		</div>
	</div>
	<br><br>
	<div class='col-50'>
	<input type='submit' value='Submit'>
	</div>
	</center>
	</form>
</div>";
		
</body>
</html>
