<!DOCTYPE html>
<html>
<?php
include "DBConnect.php";
$cid=$_GET['cid'];
$pid= $_GET['pid'];
$query1 = "select * from inventory as i join cities as c on i.i_city=c.cid where pid=? and i_city=?";
$stmt = $conn->prepare($query1);
$stmt->bind_param('ii', $pid, $cid);
$res = $stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)  
{
	echo '<tr>
		<style>
			table {
				border-collapse: collapse;
				width: 90%;
				margin : auto;
				}
			td{
				text-align: center; 
				background-color: 
				lightblue; border: 
				display: inline-block;
				margin-top:10px;
				padding: 19px;
			}
		</style>
	<table>
	<tr>
	<td>   <b>Product Id</td>
	<td>   <b>Product Name</td> 
	<td>   <b>Quantity</td> 
	<td>   <b>Inventory City Id</td> 
	<td>   <b>Inventory City Name</td> 
	<br>
	</tr>';
		while ($row = $result->fetch_assoc())
		{
			echo '<tr>
					<td>'.htmlspecialchars_decode($row["pid"], ENT_NOQUOTES).'</td>
					<td>'.htmlspecialchars_decode($row["p_name"], ENT_NOQUOTES).'</td>
					<td>'.htmlspecialchars_decode($row["quantity"], ENT_NOQUOTES).'</td>
					<td>'.htmlspecialchars($row["i_city"]).'</a></td>
					<td>'.htmlspecialchars_decode($row["name"], ENT_NOQUOTES).'</a></td> 
				</tr>';
			echo '<tr><div class="card-body">
				<h4 class="card-text">edit the Inventory info of the product</h4>
				<form action = "updateInventory.php?pid='.htmlspecialchars_decode($row['pid'], ENT_NOQUOTES).'&cid='.htmlspecialchars_decode($row["i_city"], ENT_NOQUOTES).'" method="post">
				<div class="row">
				<div class="col-25">
				<label for="Quantity">Quantity</label>
				</div>
				<div class="col-75">
				<input type="text" id="Quantity" name="Quantity" placeholder="Enter quantity here" style="width:300px; height:50px;" required>
				</div>
				</div>
				<input type = "submit" value="submit" class="btn btn-primary" style="margin-bottom:3%">
				</form>
				</div></tr>';
		}
		echo "</table>\n";
}
?>
<a style="padding-left: 50px;" href="index.php">Go Back</a>
</body>
</html>