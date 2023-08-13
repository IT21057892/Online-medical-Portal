
<?php
include('..//html/conn.php');

if(isset($_POST['sign-up'])){
    $firstN = $_POST['first-name'];
    $lastN = $_POST['last-name'];
    $mail = $_POST['email'];
    $addre = $_POST['address'];
    $gende = $_POST['gender'];
    $dateOB = $_POST['DOB'];
    $contact = $_POST['phone'];
    $pass = $_POST['password'];
    $confPass = $_POST['confirm-password'];

    if($pass != $confPass){
        header('location: ..//html/sign-up.php?error=passwordmissmatch');
        exit();
    }

    $sql = "INSERT INTO user(firstName, lastName, email, address, gender, DOB, phone, password)
    VALUES ('$firstN', '$lastN', '$mail','$addre','$gende','$dateOB','$contact','$pass')";

    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registered successfully!');</script>";
    header('location: ..//html/log-in.php');
    } 
    
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} 
?>