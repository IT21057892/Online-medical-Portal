
<?php
include('..//html/conn.php');

if(isset($_POST['submit'])){
    $invNum = $_POST['invoice_number'];
    $Pnum = $_POST['patient_number'];
    $Pname = $_POST['patient_name'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO payment(invoiceNum, patientNumber, patientname, amount)
    VALUES ('$invNum', '$Pnum', '$Pname','$amount')";

   
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Submitted !');</script>";
    header('location: ..//html/service.php');
    } 
    
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
} 
?>