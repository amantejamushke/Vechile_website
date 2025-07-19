<?php
$conn=mysqli_connect("localhost","root","","vechileinfo");
if($conn)
{
    $id=$_GET["id"];
    $sql="DELETE FROM `cardetails` WHERE id= '$id'";
    $query=$conn->query($sql);
    if($query)
    {
        echo "
        <script> 
        // alert('Deleted Successfully');
        window.location.href='display.php';
        </script>";
        
    }
    else{
        echo "Row  NOT deleted";
    }
}
?>