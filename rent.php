<?php
$conn=mysqli_connect("localhost","root","","vechileinfo");
if($conn)
{
    $customername = $_POST["customername"];
    $mobilenumber = $_POST["mobilenumber"]; 
    $rentaldate = $_POST["rentaldate"];
    $returndate = $_POST["returndate"];
        $start = strtotime($rentaldate);
        $end = strtotime($returndate);
$days = ($end - $start) / (60 * 60 * 24);
            $sql = "INSERT INTO `rentaldetails`(`customername`, `email`, `rentaldate`, `returndate`,`days`) VALUES ('$customername','$mobilenumber','$rentaldate','$returndate','$days' )";

            $query=$conn->query($sql);

            // if($query)
            // {
            //     echo "
            //     <script> 
            //     alert('Insertion Successfull');
            //     //  window.location.href='display2.php';
            //     </script>";
            // }
            // else
            // {
            //     echo "
            //     <script> 
            //     alert('Insertion NOT Successfully');
            //     </script>";
            // }
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            margin-bottom: 150px;
            box-shadow:0 0 10px black;

        }
        .hell{
            margin-top:130px;
        }
        .well{
            background-color: black;
            box-shadow: 0 0 10px black;
        }
        </style>
</head>

<body class="bg-dark my-5">
   
    <div class="container hell mt-4">
        <form action="results.php" method="get" class="p-4  well bg-dark text-light rounded " style="max-width: 400px; margin: auto;">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <h4>Fill this out</h4>
            </div>
            <div class="mb-3">
                <label>Car Name:</label>
                <input type="text" name="carname" class="w-100 p-2  rounded bg-secondary text-light" required>
            </div>
            <div class="mb-3">
            <label>Car Type:</label>
                <select name="cartype" class="w-100 p-2  rounded bg-secondary text-dark" required>
                    <option value="" >Select Car Type</option>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Truck">Truck</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Budget:</label>
                <input type="number" name="budget" class="w-100 p-2  rounded bg-secondary text-light" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
