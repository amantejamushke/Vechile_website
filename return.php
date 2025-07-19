<?php
$conn = mysqli_connect("localhost", "root", "", "vechileinfo");

if ($conn) {
    $id = $_GET["id"];

    $sql1 = "SELECT availability FROM cardetails WHERE id = '$id'";
    $check = $conn->query($sql1);

    if ($check->num_rows > 0) {
        $row = $check->fetch_assoc();

        if ($row['availability']==0) {
            $sql = "UPDATE cardetails SET availability='1' WHERE id='$id'";
            $query = $conn->query($sql);

            if ($query) {
                echo "<script>
                        alert('Your car has been successfully returned! Please pay the bill.');
                        window.location.href='home.html';
                      </script>";
            } else {
                echo "<script>
                        alert('Failed to update the record.');
                        window.location.href='return.html';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Oops! This car is already returned or unavailable.');
                    window.location.href='return.html';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Invalid Car ID entered.');
                window.location.href='return.html';
              </script>";
    }
} 
?>
