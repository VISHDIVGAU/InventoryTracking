<!DOCTYPE html>
<html>
<?php
include "DBConnect.php";
$cid=$_GET['cid'];
$pid= $_GET['pid'];
$query2 = "Delete from inventory where pid=? and i_city=?";
$stmt1 = $conn->prepare($query2);
$stmt1->bind_param('ii', $pid, $cid);
$res1 = $stmt1->execute();
$result = $stmt1->get_result();
header('location: viewInventory.php');
?>
</body>
</html>