<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal 01</title>

    <link rel = "stylesheet" href = "..//css/Payment Portal 01.css">
    <link rel="stylesheet" href="..//css/common-styles.css">

</head>
<body>

    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
<!--header end--> 

    <div class = "container">
        <form action = "..//includes/payment-data.php" method="POST">
            <div class = "row">
                <div class = "col">
                    <h3 class = "title">Payment Information</h3>

                    <div class = "inputBox">
                        <span>Invoice Number: </span>
                        <input type = "text" name = "invoice_number" id = "invoice_number"  placeholder = "001" required>
                    </div>

                    <div class = "inputBox">
                        <span>Patient Number: </span>
                        <input type = "text" name = "patient_number" id = "patient_number" placeholder = "p-001" required>
                    </div>

                    <div class = "inputBox">
                        <span>Patient Name: </span>
                        <input type = "text" name = "patient_name" id = "patient_name" placeholder = "Shayan Fernando" required>
                    </div>

                    <div class = "inputBox">
                        <span>Amount: </span>
                        <input type = "text" name = "amount" id = "amount" placeholder = "Ex: 8500.00" required>
                    </div>


                </div>
            </div>

            <button type = "submit" name="submit" value = "Submit" id = "submit-btn_2">Subimit</button>

        </form>
    </div>    
    
</form>
</div>


     <!--footer-->
     <?php
            include('..//includes/footer.php');
        ?>
    <!--footer end-->

<script src="..//js/payment 01.js"></script>

</body>
</html>