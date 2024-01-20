<head>
    <style>
        @import url('../css/logistic.css');
        @import url('../css/form.css');
    </style>
</head>
<?php
include 'header.php';
?>

<!-- Button to open the modal -->
 <button class="btn" onclick="document.getElementById('id01').style.display='block'">Add Goods</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="" method='POST'>
    <div class="container">
      <p>Fill in Goods details</p>
      <hr>
      <label for="Product_name"><b>Product name</b></label>
      <input type="text" placeholder="Product name" name="Product_name" required>

      <label for="Product_price"><b>Product price</b></label>
      <input type="number" placeholder="Product price" name="Product_price" required>

      <label for="Quintity"><b>Quintity</b></label>
      <input type="number" placeholder="Quintity for the goods" name="Quintity" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button class="btn" type="submit" name="save" class="signup">Save</button>
      </div>
    </div>
  </form>
</div> 
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<?php
        if(isset($_POST['save'])){
            include 'link.php';
            $productname =$_POST['Product_name'];        
            $productprice = $_POST['Product_price'];        
            $quintity = $_POST['Quintity'];
            $Date=date("Y-m-d");

            if(True){
                $query1="INSERT INTO Goods (Product_name,Product_price,Quintity,Quintity1,updatedate) VALUES ('$productname', '$productprice', '$quintity','$quintity','$Date')";
                $query2="INSERT INTO Goodsbougth (Product_name,Product_price,Quintity,updatedate) VALUES ('$productname', '$productprice', '$quintity','$Date')";
                $result1=mysqli_query($link1,$query1);
                $result2=mysqli_query($link1,$query2);
                if($result1 && $result2){
                    echo "<font color=green> DATA SAVED";
                    // header("location:fetch.php");
                } else{
                    // echo 
                    echo mysqli_error($link1);
                }
            }
            else{
                    echo "<font color=red>PLEASE FILL IN ALL FIELDS</font>";
            }
            mysqli_close($link);
        }
    ?>