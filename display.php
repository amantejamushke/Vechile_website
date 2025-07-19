<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            margin-bottom: 50px;
            box-shadow:0 0 10px black;
        }

        .help {
            margin-top: 100px;
            z-index: 0;
        }
    </style>
</head>

<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light mx-2" href="#"><i
                    class="fa-solid fa-car-burst mx-2"></i></i>PolicyPitStop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bolder" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bolder" aria-current="page"
                            href="insurance.html">Compare Insurance 🔍 </a>
                    </li>
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

    <div class="container help">
        <table class="table table-striped table-hover">
            
                <tr class="table-dark text-center">
                    <th>Car Name</th>
                    <th>Car Type</th>
                    <th>Model Year</th>
                    <th>Owner Name</th>
                    <th>Contact Number</th>
                    <th>operations</th>
                </tr>
            

                <?php
                $conn = mysqli_connect("localhost", "root", "", "vechileinfo");
                if ($conn) {
                    $sql = "SELECT * FROM `cardetails`";
                    $query = $conn->query($sql);
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                        
                            echo "<tr>";
                            echo "<td class='text-center'>$row[carname]</td>";
                            echo "<td class='text-center'>$row[cartype]</td>";
                            echo "<td class='text-center'>$row[modelyear]</td>";
                            echo "<td class='text-center'>$row[ownername]</td>";
                            echo "<td class='text-center'>$row[contactnumber]</td>";
                            echo "<td class='text-center'><a onclick='return confirmation()' href='deleterow.php?id=$row[id]'><i class='fa-solid fa-trash' style='color: #f9062b;'></i></a></td>";

                            // echo "<td><a href='sell.php?sno=$row[sno]&name=$row[name]&price=$row[price]&count=$row[count]'><button class='btn btn-secondary p-1'>Shop Now</button></a></td>";
                            echo "</tr>";
                        
                    }
                    } else {
                        echo "<script> alert('Enter details'); </script>";
                    }
                }
                // echo $row['id'];
                ?>
            
        </table>
        <!-- <a  href="addcar.html" class="text-light btn btn-success">Add Car</a> -->
        <a href="insurance.html" class="text-light btn btn-success">Interested in car insurance?</a>
        <!-- <a href="age.php
        " class="text-light btn btn-success">Curious about the car’s age?</a> -->
    </div>

    <script>
        function confirmation() {
            return confirm("Are you sure you want to delete this? This action cannot be undone.");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
