<!DOCTYPE html>

<html>
<?php

include "DBConnect.php";
if (!isset($_POST['City']))
{
	echo "please fill all the required fields";
	header('location:CreateInventory.php');
}	
else
{ 
$name=$_POST['City'];
$query1 = 'insert into cities(name) values(?);';
 $stmt = $conn->prepare($query1);
  $stmt->bind_param('s', $name);
  $res = $stmt->execute();
  $result = $stmt->get_result();
}
header('location: index.php');
?>
</body>
</html>