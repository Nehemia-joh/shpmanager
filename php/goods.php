<head>
    <style>
      @import url('../css/charts.min.css');
      @import url('../css/charthead.css');
        @import url('logistic.css');
        @import url('search.css');
    </style>
</head>
<?php
include 'header.php';
?>
<?php
include 'link.php';
$query="select * from Goods";
$result=mysqli_query($link1,$query);
$result1=mysqli_query($link1,$query);
echo "<input class=\"btn\" type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for product..\">";
echo "<p> NB:Red color means products are below 3 units </p>";
echo "<table id=\"myTable\" align='center'>";

echo "<tr class=\"header\">
        <th>Product ID</th>
        <th>Product name</th>
        <th>Product price @ item</th>
        <th>Quintity Available</th>
        <th>Updates</th>
               
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    if($row['Quintity'] < 3){
    echo "<tr style=\"background-color: red;\">";
    echo "<td>".$row['Product_id']."</td>";
    echo "<td>".$row['Product_name']."</td>";
    echo "<td>".$row['Product_price']."</td>";
    echo "<td >".$row['Quintity']."</td>";
    echo "<td><a href='update.php?id=".$row['Product_id']."'>Update</a></td>";
    }
    else{
        echo "<td>".$row['Product_id']."</td>";
    echo "<td>".$row['Product_name']."</td>";
    echo "<td>".$row['Product_price']."</td>";
    echo "<td >".$row['Quintity']."</td>";
    echo "<td><a href='update.php?id=".$row['Product_id']."'>Update</a></td>";

   
    }
    
    
  
    //CREATE AN ID VARIABLE THAT TRANSFER DATA
     
    
	// echo "<td><a href='visit_examiner.php?id=".$row['clearance_id']."'>Visit office</a></td>";
    
    echo "</tr>";
}

echo"</table>";

echo "<center>";
echo "<div class=\"examples column-charts\">";

      echo "<table class=\"charts-css column show-heading show-labels show-data-on-hover show-primary-axis show-2-secondary-axes\">";

        echo "<caption>Goods sold over latest stock update<br>(none)</caption>";
        echo "<thead>";
          echo "<tr>";
            echo "<th>Year</th>";
            echo "<th>Progress</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row1=mysqli_fetch_array($result1)){
          echo "<tr>";
            echo "<th style=\"width: 10px;\"; scope=\"row\">".$row1['Product_name']." </th>";
            echo "<td style=\"heigth: 10px; --size: ".$row1['Quintity']/$row1['Quintity1'].";  \"> <span class=\"data\">".$row1['Quintity']."</span> <span class=\"tooltip\">data: ".$row1['Quintity']."<br>more info</span> </td>";
          echo "</tr>";
        }
        
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
          echo "</center>";
?>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

  
