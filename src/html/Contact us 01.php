<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us 01</title>

    <link rel="stylesheet" href="..//css/Contact Us-01.css">
    <link rel="stylesheet" href="..//css/common-styles.css">

</head>
<body>

   <!--Header-->
   <?php
            include('..//includes/header.php');
        ?>
<!--header end-->   
    
<div class="container">
    
   
    <form action="..//includes/contactUS-data.php" method="POST">

        <div class="row">

            <div class="col">

                <h2 class="title">Inquire Now</h2>

                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name ="full_name" id = "full_name" placeholder="Franka Eskiyalo" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name = "email" id = "email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>Contact Number :</span>
                    <input type="text" name = "contact" id = "contact" placeholder="011 012 5845" required>
                </div>
                
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name = "address" id = "address" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name = "city" id = "city" placeholder="Colombo" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name = "state" id = "state" placeholder="Sri Lanka" required>
                    </div>
                    
                </div>

            </div>

        <button type="submit" name="submit" value="Submit" id="submit-btn">Subimit</button>

    </form>

</div> 
   

   <!--footer-->
   <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->
   
</body>
</html>