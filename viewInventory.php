<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
include "DBConnect.php";
function display_function(&$a,&$b,&$c,&$d,&$e)
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
  <td>   <b>Product Id </td>
  <td>   <b>Product Name </td> 
  <td>   <b>Quantity </td> 
  <td>   <b>Inventory City Id</td> 
  <td>   <b>Inventory City Name</td> 
  <br>
  </tr>
  <tr>
  <td>'.htmlspecialchars($a).'</td>
  <td> '.htmlspecialchars($b).'</td>
  <td>'.htmlspecialchars($c).'</td>
  <td>'.htmlspecialchars($d).'</td>
  <td>'.htmlspecialchars($e).'</td>
  <td><a href="delete.php?pid='.htmlspecialchars_decode($a, ENT_NOQUOTES).'&cid='.htmlspecialchars_decode($d, ENT_NOQUOTES).'\">Delete Inventory</a></td></td>
  <td><a href="edit.php?pid='.htmlspecialchars_decode($a, ENT_NOQUOTES).'&cid='.htmlspecialchars_decode($d, ENT_NOQUOTES).'\">Edit Inventory</a></td></td>
  <td><a href="assignwarehouse.php?pid='.htmlspecialchars_decode($a, ENT_NOQUOTES).'&cid='.htmlspecialchars_decode($d, ENT_NOQUOTES).'\">Assign New Warehouse</a></td></td>
  </tr>
  </table>
  </tr>';
}

$query = "select i.pid, i.p_name, i.quantity, c.cid, c.name 
from inventory as i join cities as c 
on i.i_city= c.cid 
order by c.name, i.quantity";
if (($result = $conn->query($query))&&($result->num_rows > 0)) 
{

    while ($row = $result->fetch_assoc()) 
    {
    	$a_pid=$row["pid"];
		$a_name=$row["p_name"];
		$a_quantity=$row["quantity"];
		$a_cid=$row["cid"];
		$a_cname=$row["name"];

		display_function($a_pid,$a_name,$a_quantity,$a_cid,$a_cname);
    }
}
else
{
        echo'<h1>'."there is no inventory ".'<h1/>';
 }


?>
<a style="padding-left: 50px;" href="index.php">Go Back</a>
</body>