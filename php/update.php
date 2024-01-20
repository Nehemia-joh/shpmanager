<?php
include "link.php";
$id=$_GET['id'];
//sql query for row needed to be updated
$query="SELECT * FROM Goods WHERE Product_id='$id'";
$result=mysqli_query($link1,$query);
$row=mysqli_fetch_array($result);
$pastq=$row['Quintity'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM THAT SEND DATA INTO A DATABASE</title>
</head>
<body>
    <form action="" method="post">
    Product id: <input type="text" name="productid" value="<?php echo $row['Product_id'];?>"><br><br>
    Product name: <input type="text" name="productname" value="<?php echo $row['Product_name'];?>"><br><br>
    product price: <input type="number" name="productprice" value="<?php echo $row['Product_price'];?>"><br><br>
    Quintity: <input type="number" name="quintity" value="<?php echo $row['Quintity'];?>"><br><br>
    Date: <input type="date" name="quintity1" value="<?php echo $row['updatedate'];?>"><br><br>
    <input type="submit" value="SAVE CHANGES" name="savechanges">
</form>    
    <?php
        if(isset($_POST['savechanges'])){
            include "link.php";
            $productid =$_POST['productid'];        
            $productname = $_POST['productname'];        
            $productprice = $_POST['productprice'];
            $quintity = $_POST['quintity'];
            $Date=date("Y-m-d");
            $newq=$quintity+$pastq;

            
                $query1="UPDATE Goods SET Product_price='$productprice',Quintity='$newq',Quintity1='$newq',updatedate='$Date' WHERE Product_id='$id'";
                $query2="INSERT INTO Goodsbougth (Product_name,Product_price,Quintity,updatedate) VALUES ('$productname', '$productprice', '$quintity','$Date')";
                $result1=mysqli_query($link1,$query1);
                $result2=mysqli_query($link1,$query2);
                if($result1){
                    // echo "<font color=green> DATA SAVED";
                    header("location:goods.php");
                } else{
                    // echo 
                    echo mysqli_error($link);
                }
            }
            else{
                    echo "<font color=red>PLEASE FILL IN ALL FIELDS</font>";
            }
            mysqli_close($link1);
        
    ?>
</body>
</html>

