<?php
$conn=mysqli_connect("localhost","root","","vechileinfo");
if($conn)
{
    $id=$_GET["id"];
    $cost=$_GET["cost"];
    // echo "$id";
            $sql = "UPDATE `cardetails` SET `availability`='0' WHERE id='$id' ";

            $query=$conn->query($sql);

            if($query)
            {
                // echo"$id";

                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Booking Confirmation</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #121212;
                            color: white;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                            text-align: center;
                        }
                        .con {
                            background: #1e1e1e;
                            padding: 20px;
                            border-radius: 12px;
                            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
                            width: 350px;
                        }
                        h3 {
                            color: #ff9800;
                        }
                            h5{
                            color:red;
            }
                            .def{
                            color:white;
            }
                    </style>
                </head>
                <body>
                   <div class="con">
                   <h2>Your Car Has Booked Successfully</h2>
        <h3>Your Booking ID is: '.$id.' </span></h3>
        <h5> IMPORTANT: Please save this Booking ID. You will need it to return the car!</h5>
        <h2>Cost per day is:'.$cost.'</h2>
          <div > <a href="home.html" class="def">Home</a></div> 
        
    </div>
                 </body>
                </html>';
                
                echo "
                <script> 

                alert('Your car has been successfully booked!');
                 
                //   window.location.href='home.html';
                </script>";
            }
            else
            {
                echo "
                <script> 
                alert('Oops, the car is currently unavailable.');
                </script>";
            }
        }

?>

