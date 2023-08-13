
<?php
include('..//html/conn.php');

if(isset($_POST['submit'])){
    $fullN = $_POST['full_name'];
    $mail = $_POST['email'];
    $phone = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO contactus(fullName, email, phone, address, city, state)
    VALUES ('$fullN', '$mail', '$phone','$address','$city','$state')";

   
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Submitted !');</script>";
    header('location: ..//html/index.php');
    } 
    
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
} 
?>