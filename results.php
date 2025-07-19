<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* body{
        background-color:black;
    } */
    .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            margin-bottom: 150px;
            box-shadow:0 0 20px black;

        }
        .why{
            margin-top:130px;
        }
    </style>
<body class="bg-dark">
    
<nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-light mx-2" href="#"><i class="fa-solid fa-car-burst mx-2"></i></i>PolicyPitStop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bolder" aria-current="page" href="insurance.html">Compare Insurance 🔍 </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active text-light fw-bolder" aria-current="page"
                            href="history.php">History</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bolder" href="display.php">Car Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-light fw-bolder" aria-disabled="true">Contact 📞</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container why">
    <table border="2" class="table table-striped table-light  table-hover">
    <tr class="table-dark text-center">
                    <th>Car Name</th>
                    <th>Car Type</th>
                    <th>Fuel Type</th>
                    <th>Cost</th>
                    <th>operations</th>
                    <th>Return</th>
                    
                </tr>
        <?php
$conn = mysqli_connect("localhost", "root", "", "vechileinfo");

if ($conn) {
    $carname=$_GET["carname"];
    $cartype=$_GET["cartype"];
        $budget=$_GET["budget"];
        // echo "$carname";
        // $coverage=$_POST["coverage"];
        $sql = "SELECT * FROM cardetails 
        WHERE carname LIKE '%$carname%' 
        AND cartype LIKE '%$cartype%' 
        AND cost <= '$budget' 
        ORDER BY cost ASC";
  
        $query = $conn->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
            //    if($row['availability']==1)
            //   {
                echo "<tr>";
                  echo "<td class='text-center'>$row[carname]</td>";
                 echo "<td  class='text-center'>$row[cartype]</td>";
                 echo "<td  class='text-center'>$row[fueltype]</td>";

                 echo "<td  class='text-center'>₹$row[cost]</td>";
                 echo "<td class='text-center'><a onclick='return confirmation()' href='rented.php?id=$row[id]&&carname=$row[carname]&&cost=$row[cost]' class='text-success'>Rent</a></td>";
                 echo "<td class='text-center'><a onclick='return confirmation()' href='return.php?id=$row[id]' class='text-success'>Return</a></td>";
             echo "</tr>";
            // }
            }
            
        } 
        else {
            echo "No records found.";
        }
    }
?>
    </table>
    <a href="home.html" class="btn btn-success">Home</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>