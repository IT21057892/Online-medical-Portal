<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online-Medical-Portal</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="..//css/common-styles.css">
</head>
<body>

    <!--Header-->
        <?php
            include('..//includes/header.php');
        ?>
    <!--header end-->

    <!--section 1-->
    <!--section 1 text-->
    <div class="section_1">
        <div class="text">
            <h1>Health care</h1>
            <h3>Online Medical Portal</h3>

            <p>Having healthy life is the best gift!... <br><br><br> <br> <br>
            </p>
        </div>
    <!--section 1 text end-->

        <!--Image slider-->
         <div class="slider">
             <div class="images">
                 <input type="radio" name="slide" id="img1" checked>
                 <input type="radio" name="slide" id="img2">
                 <input type="radio" name="slide" id="img3">

                 <img src="..//images/home/Image slider/1.png" class="m1" alt="img1">
                 <img src="..//images/home/Image slider/2.png" class="m2" alt="img2">
                 <img src="..//images/home/Image slider/3.png" class="m3" alt="img3">
             </div>

             <div class="dots">
                 <label for="img1"></label>
                 <label for="img2"></label>
                 <label for="img3"></label>
             </div>
         </div>
         <!--Image slider end-->
    </div>
    <!--section 1 end-->

    <!--section 2-->
    <!--The description text-->
    <div class="section_2">
        <h2>Be healthy always!</h2>

        <p>
            Health care medical portal connects over 1000 of patients like you to <br> their doctors and having health records anytime, anywhere.
        </p>
    </div>
    <!--The description text end-->
    <!--section 2 end-->

    <!--Section 3(Top services)-->
    <div class="section_3">
        <div class="top-services-bagr">
            <img id="bubble-img1" src="..//images/home/bubbles/services.jpg" alt="img">
        </div>

        <!--text description-->
        <div class="text-description">
            <h1>Top services</h1>

            <p>These are the most used services of this month. <br><br><br><br><br>
            </p>
        </div> 
        <!--text description end-->  

            <!--cards-->
        <div class="card-section">
        <div class="card" id="card1">
            <div class="card-image" id="c-img1"></div>

            <div class="card-text">
                <h2>Online Pharmacy</h2>
            </div>

            <div class="card-button">
                <button id="read-more-btn" type="button"> <a href="..//html/online-pharmacy.php">Read more...</a> </button>
            </div>
        </div>
            <!--............................-->
            <div class="card" id="card2">
                <div class="card-image" id="c-img2"></div>
        
                <div class="card-text">
                    <h2>Lab Reports</h2>
                </div>
        
                <div class="card-button">
                    <button id="read-more-btn" type="submit"> <a href="..//html/labreport.php">Read more...</a> </button>
                </div>
            </div>
            <!--............................-->
            <div class="card" id="card3">
                <div class="card-image" id="c-img3"></div>
        
                <div class="card-text">
                    <h2>Channeling</h2>
                </div>
        
                <div class="card-button">
                    <button id="read-more-btn" type="submit"> <a href="..//html/channeling.php">Read more...</a> </button>
                </div>
            </div>
        </div>
        <!--cards end-->
    </div>
    <!--Section 3(Top services) end-->

    <!--section 4 (ambulance service)-->
    <div class="section4">

    <div class="ambulance-service">
        <img src="..//images/home/bubbles/ambulance service.jpg" alt="" id="bubble-img2">
    
        <img src="..//images/home/section 4/1.png" alt="" id="ambulance-img">
    </div>

    <!--text description-->
    <div class="text-description2">

        <h1>Ambulance Service</h1>

        <p>We have fast emergancy ambulance services. <br> <a class="R-more" href="..//html/ambulance.php">Read more...</a></p>
    
    </div>
    <!--text description end-->

    </div>
    <!--section 4 (ambulance service) end-->

    <!--Section 5 (about us section)-->
    <div class="section5">
        <div class="about-us">
            <img src="..//images/home/bubbles/about us.jpg" alt="" id="bubble-img3">

            <img src="..//images/home/section 5/1.png" alt="" id="aboutUS-img">
        </div>

        <!--text description-->
        <div class="text-description3">
            <h1>About Us</h1>

            <p>All things you have to know about us! <br> <a class="R-more" href="..//html/About Us.php">Read more...</a></p>
        </div>
        <!--text description end-->
    </div>
    <!--Section 5 (about us section) end-->

    <!--Section 6 (Online Pharmacy)-->
    <div class="section6">
        <div class="online-pharmacy">
            <img src="..//images/home/bubbles/online pharmacy.jpg" alt="" id="bubble-img4">

            <img src="..//images/home/section 6/1.png" alt="" id="online-pharmacy-img">
        </div>

        <!--text description-->
        <div class="text-description4">
            <h1>Online Pharmacy <br>Service</h1>
            
            <p>You will experience the best online pharmacy service here! <br><a class="R-more" href="..//html/online-pharmacy.php">Read more...</a></p>

        </div>
        <!--text description end-->
    </div>
    <!--Section 6 (Online Pharmacy) end-->

    <!--footer-->
        <?php
            include('..//includes/footer.php');
        ?>
    <!--footer end-->

</body>
</html>