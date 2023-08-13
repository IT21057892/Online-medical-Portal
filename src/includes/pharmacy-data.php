
<?php
include('..//html/conn.php');

if(isset($_POST['submit'])){
    $Pname = $_POST['name'];
    $Pmail = $_POST['email'];
    $contact = $_POST['phone'];
    $pres_ID = $_POST['pres-ID'];
    $message = $_POST['message'];

    $sql = "INSERT INTO pharmacy(name, email, phone ,presId, notes)
    VALUES ('$Pname', '$Pmail', '$contact','$pres_ID','$message')";

   
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Sent !');</script>";
    header('location: ..//html/service.php');
    } 
    
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
} 
?>