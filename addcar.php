<?php
$conn=mysqli_connect("localhost","root","","vechileinfo");
if($conn)
{
        $carname=$_POST["carname"];
        $cartype=$_POST["cartype"];
        $modelyear=$_POST["modelyear"];
        $fueltype=$_POST["fueltype"];
        $ownername=$_POST["ownername"];
        $cost=$_POST["cost"];
        $ava=$_POST["ava"];
        $contactnumber=$_POST["contactnumber"];
        // $email=$_POST["email"];

       
     
            $sql = "INSERT INTO `cardetails`( `carname`, `cartype`, `modelyear`, `fueltype`, `ownername`, `contactnumber`, `cost`, `availability`) VALUES ('$carname',' $cartype','$modelyear','$fueltype','$ownername','$contactnumber','$cost',' $ava')";

            $query=$conn->query($sql);

            if($query)
            {
                echo "
                <script> 
                alert('Your Car added Successfull');
                 window.location.href='display.php';
                </script>";
            }
            else
            {
                echo "
                <script> 
                alert('Insertion NOT Successfully');
                </script>";
            }
        }

?>
