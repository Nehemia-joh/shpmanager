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
$query="select * from Goods";
$result=mysqli_query($link1,$query);

echo "<table align='center'>";

echo "<tr>
        <th>Product ID</th>
        <th>Product name</th>
 
               
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    if($row['Quintity']==0){
        echo "<td>".$row['Product_id']."</td>";
        echo "<td>".$row['Product_name']."</td>";
    }
    
    
    
  
    //CREATE AN ID VARIABLE THAT TRANSFER DATA
     
    // echo "<td><a href='approval_examiner.php?id=".$row['clearance_id']."'>Approve</a></td>";
	// echo "<td><a href='visit_examiner.php?id=".$row['clearance_id']."'>Visit office</a></td>";
    //echo "<td><a href='update.php?id=".$row['regno']."'>Update</a></td>";
    echo "</tr>";
}
echo"</table>";
?>

  
