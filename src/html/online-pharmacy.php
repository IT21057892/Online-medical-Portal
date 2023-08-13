<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Pharmacy</title>
    <link rel="stylesheet" href="..//css/online-pharmacy.css">
    <link rel="stylesheet" href="..//css/common-styles.css">
</head>
<body>

    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
<!--header end--> 

    <!--section 1-->
    <div class="section1">

        <div class="welcome-text">
            <h1>Online Pharmacy <br> Service</h1>

            <p>Island wide medicine devivery service.</p>
        </div>

            <img id="img-1" src="..//images/online pharmacy/1.png" alt="img">

    </div>
    <!--section 1 end-->

    <!--section 2-->
    <div class="section2">

        <div class="sec2-img">
            <img id="bubble-img" src="..//images/online pharmacy/bubble-img.jpg" alt="">
            <img id="img-2" src="..//images/online pharmacy/3.png" alt="">
        </div>
        
        <div class="text-description">
            <p>Fill the form and place your order online and get your medical supplies without waiting!</p>
        </div>
    </div>
    <!--section 2 end-->

    <!--section 3-->
    <div class="section3">
        <div class="form-box">
            <form action="..//includes/pharmacy-data.php" method="POST">
                <h2>For Inquiries</h2>

                <div class="input-field">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>

                <div class="input-field-combo">
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="phone" id="phone" placeholder="Phone" required>
                </div>

                <div class="input-field">
                    <input type="text" name="pres-ID" id="pres-id" placeholder="Prescription ID" required>
                </div>

                <div class="input-field">
                    <input type="text" name="message" id="message" placeholder="Message">
                </div>

                <div class="button">
                    <button id="submit-btn" name="submit" type="submit">send</button>
                </div>
            </form>

            <img id="img-3" src="..//images/online pharmacy/2.png" alt="">

        </div>
    </div>
    <!--section 3 end-->

     <!--footer-->
     <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->

    <script src="..//js/online_pharmacy.js"></script>
</body>
</html>