<!DOCTYPE html>
<html>
<?php
include "DBConnect.php";
if (isset($_POST['Quantity']))	
{ 
$quantity=$_POST['Quantity'];
$pid= $_GET['pid'];
$cid= $_GET['cid'];
$query1 = "update inventory set quantity=? where pid=? and i_city=?";
$stmt = $conn->prepare($query1);
$stmt->bind_param('iii', $quantity, $pid, $cid);
$res = $stmt->execute();
$result = $stmt->get_result();
}
header('location: viewInventory.php');
?>
</body>
</html>