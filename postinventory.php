<!DOCTYPE html>

<html>
<?php

include "DBConnect.php";
if (!isset($_POST['Product'],$_POST['Quantity'], $_POST['city']))
{
	echo "please fill all the required fields";
	header('location:CreateInventory.php');
}	
else
{ 
$p_name=$_POST['Product'];
$quantity=$_POST['Quantity'];
$i_city=$_POST['city'];
$query1 = 'insert into inventory(p_name, quantity, i_city) values(?,?,?);';
 $stmt = $conn->prepare($query1);
  $stmt->bind_param('sii', $p_name, $quantity,$i_city);
  $res = $stmt->execute();
  $result = $stmt->get_result();
}
header('location: index.php');
?>
</body>
</html>