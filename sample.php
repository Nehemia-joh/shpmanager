<?php

for($e=0;$e<19;$e++){

    
        echo "<form metod=\"post\">";

                    
        echo "<input type=\"number\"  class=\"form-control\" name=\"Q\" required/>";
        
    
    echo "<input type=\"submit\"  value=\"Save sales\" name=\"submit\">";
    
    echo "</form>";

    while(iseet($_POST['submit'])){
    $us=$us+$_POST['Q'];
    echo $us;
    }
   

}


if(isset($_POST['submit'])){
    $e=0;
    $e=$_POST['Q'];
    while($e!=0){
        $sum=$sum+$e;
    
        print $sum;
        
    
    $e++;
    }
}



?>


<?php
        if(isset($_POST['submit'])){
            // include 'link.php';
            $productid =$_POST['Q'];
            if($productid==0){
                $su+=$productid;

                // $productid++;
              
            }
            echo $productid;
            
            // $available=$row['Quintity'];


          
        }
