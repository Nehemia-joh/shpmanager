<head>
    <style>
        @import url('../css/logistic.css');
        @import url('../css/bootstrap.css');
    </style>
</head>
<?php
include 'header.php';
include 'link.php';
$query="select * from Goods";
$result=mysqli_query($link1,$query);



?>
<form action="" method="post">
                 <div class="form-group">
                    <label> Available Goods</label>
                    <select class="form-control"  name="Product_id">
                    <?php
                    // && $row['Quintity']!=0
                    while($row=mysqli_fetch_array($result) ){
                        $available=$row['Quintity'];
                        if($available>0){
                            echo "<option  value=".$row['Product_id'].">".$row['Product_name']."</option>";

                        }
                    
                    }
                    ?>
                    </select>


                    <!-- <input type="number"  class="form-control" name="Product_id" required/> -->
                </div>
                <div class="form-group">
                    <label>Total price</label>
                    <input type="number" class="form-control" name="Total_price" required/>
                </div>
                <div class="form-group">
                    <label >Quintity bougth</label>
                    <input type="number"  class="form-control" name="Quintity_bougth" required/>
                </div>
                <input type="submit" class="btn btn-primary w-100" value="Save sales" name="submit">
            </form>
            </div>
            <div class="card-footer text-right">
            </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            include 'link.php';
            $productid =$_POST['Product_id'];
            $totalprice = $_POST['Total_price'];        
            $quintitybougth= $_POST['Quintity_bougth'];
            $Date=date("Y-m-d");
            

            
            // $available=$row['Quintity'];


            if($quintitybougth>$available){
                echo "<font color=red>NO MENTIONED NUMBER OF PRODUCTS</font> \n";
            }
                

            else if($quintitybougth<=$available){
                $query1="INSERT INTO sales (Product_id,Total_price,Quintity_bougth,salesdate) VALUES ('$productid', '$totalprice', '$quintitybougth','$Date')";

                $result1=mysqli_query($link1,$query1);
                
                
                if(TRUE){
                    echo "<font color=green> DATA SAVED";
                    // header("location:fetch.php");
                } else{
                    // echo 
                    echo mysqli_error($link1);
                }
            }
            // else{
            //         echo "<font color=red>PLEASE FILL IN ALL FIELDS</font>";
            // }
            mysqli_close($link1);

            include "link.php";
            $setre = "SELECT * FROM Goods WHERE Product_id='$productid'";
            $result1=mysqli_query($link1,$setre);
            while($row1=mysqli_fetch_array($result1)){
                
                $available1=$row1['Quintity'];
            }
            if($quintitybougth>$available){
                echo "<font color=blue> Available Goods $available1</font>";
            }
            else{
            
            
        
            $new1=$available1-$quintitybougth;
            $query2="UPDATE Goods SET Quintity='$new1' WHERE Product_id='$productid'";
        
            $result2=mysqli_query($link1,$query2);
            }

        }
            
        ?>
       
        