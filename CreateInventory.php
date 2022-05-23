<!DOCTYPE html>
<html>
<?php

include "DBConnect.php";

$q1='select * from Cities';
?>
<body>
<div class='inventory'>
	<form action='postinventory.php' method='post' autocomplete='off'>
	<h2><center> Enter new product here </center></h2>
	<center>
	<div class='row'>
		<div class='col-25'>
		<label for='Product'>Product Name</label>
		</div>
		<div class='col-75'>
		<input type='text' id='Product' name='Product' placeholder='Product name...' style='width:300px; height:50px;' required>
		</div>
	</div>
	<div class='row'>
		<div class='col-25'>
		<label for='Quantity'>Quantity</label>
		</div>
		<div class='col-75'>
		<input type='text' id='Quantity' name='Quantity' placeholder='Enter quantity here' style='width:300px; height:50px;' required>
		</div>
	</div>
	<div class='row'>
		<div class='col-25'>
		<label for='city'>City</label>
		</div>
		<div class='col-75'>
		<select id='city' name='city' class='form-control' style='width:200px;'>";
		<?php
			if (($result = $conn->query($q1))&&($result->num_rows > 0)) 
			{
				while ($row = $result->fetch_assoc()) 
				{
					echo '<option value='.htmlspecialchars_decode($row['cid'], ENT_NOQUOTES).'>'.htmlspecialchars_decode($row['name'], ENT_NOQUOTES).'</option> ';
				}
			}
		?>
		</select>
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
