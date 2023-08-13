
<?php
include('..//html/conn.php');

if(isset($_POST['submit'])){
    $Pname = $_POST['patient_name'];
    $Pmail = $_POST['patient_email'];
    $treatment = $_POST['category'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO appointment(name, email, treatment_type, notes)
    VALUES ('$Pname', '$Pmail', '$treatment','$notes')";

   
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Submitted !');</script>";
    header('location: ..//html/service.php');
    } 
    
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
} 
?>