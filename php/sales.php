<head>
    <style>
        @import url('logistic.css');
    </style>
</head>
<?php
include 'header.php';
?>
<?php
include 'link.php';
$query="select * from sales";
$result=mysqli_query($link1,$query);

echo "<table align='center'>";

echo "<tr>
        <th>Product ID</th>
        <th>Total price</th>
        <th>Quintity</th>
        <th>Date</th>
               
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['Product_id']."</td>";
    echo "<td>".$row['Total_price']."</td>";
    echo "<td>".$row['Quintity_bougth']."</td>";
    echo "<td>".$row['salesdate']."</td>";
  
    //CREATE AN ID VARIABLE THAT TRANSFER DATA
     
    // echo "<td><a href='approval_examiner.php?id=".$row['clearance_id']."'>Approve</a></td>";
	// echo "<td><a href='visit_examiner.php?id=".$row['clearance_id']."'>Visit office</a></td>";
    //echo "<td><a href='update.php?id=".$row['regno']."'>Update</a></td>";
    echo "</tr>";
}
echo"</table>";
?>
