<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/labreport.css">
    <link rel="stylesheet" href="..//css/common-styles.css">
    <title>Lab Reports</title>
    <script src="js/labreport.js"></script>
</head>
<body>

       <!--Header-->
       <?php
            include('..//includes/header.php');
        ?>
<!--header end--> 

    <div class="main1">
        <img src="..//images/lab report/Screenshot 2022-05-17 112441.png">
        <div class="text">
            <h1>Lab Reports</h1>
        </div>
    </div>  

    <div class="main2">
        <img src="..//images/lab report/pngwing.com (2).png">       
    </div>

    <br>
    <br>
    <br>

    <div class="containor">
        <div class="title">Lab Reports</div>
        <br>
        <div class="error"></div>
        <form action="#" method="post" id="form">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Patient ID</span>
                    <input type="text" id="id" placeholder="Enter Your Patient ID" required>
                </div>
                <br>
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" id="name" placeholder="Enter Your Name" required>
                </div>
                <br>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" id="email" placeholder="Enter Your Email" required>
                </div>
                <br>
                <div class="input-box">
                    <span class="details">Type Of Report</span>
                    <input type="text" id="type" placeholder="Enter Your Report Type" required>
                </div>
                <br>
                <div class="input-box">
                    <span class="details">Lab Referance Number</span>
                    <input type="number" id="number" placeholder="Enter Your Lab Referance Number" required>
                </div>
                <br>
                <div class="input-box">
                    <span class="details">Passcode</span>
                    <input type="password" placeholder="Enter Passcode" required>
                </div>
                <br>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>
    
   <!--footer-->
   <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->
</body>
</html>