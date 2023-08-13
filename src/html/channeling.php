<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="..//css/channeling.css" rel='stylesheet'>
    <script src="../src/js/Channeling.js"></script>
    <link href="..//css/common-2.css" rel='stylesheet'>
    <link rel="stylesheet" href="..//css/common-styles.css">
    <title>Channeling</title>
</head>

<body>
    
    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
    <!--header end-->
 
    <div class="row" style="height: 250px;">
        <div class="col">
            <div class="circle">
                <div class="circle-content">
                    <h2 id="title">Channeling</h2>
                    <h5 id="sub-title">Meet your Doctor</h5>
                    <p style="font-size: medium; font-family: Arial, Helvetica, sans-serif;" class="description">Easy and Fast Channeling. The Safest way to Channel. Fast and Easy channelling. 24/7 Customer Service. Easy and Fast Channeling. 24/7 Service.
.</p>
                </div>

            </div>

        </div>
        <div class="col">
            <img src="..//images/channeling/doctor.png" alt="doctor" width="auto" height="100%" class="doc-img" />
        </div>
    </div>
    <div class="row" id="form-continer">
        <div class="container">
            <h3>Make an appointment</h1>
        <form method="POST" class="form-horizontal" action="..//includes/channeling-data.php" >
            <input type="text" name="patient_name" id="patient_name" placeholder="Name" required /><br />
            <input type="text" name="patient_email" id="patient_email" placeholder="Email" required /><br />
            <select name="category" id="category" placeholder="Select Category" >
                <option value="">Select Category</option>
                <option value="eyeCareUnit">Eye Care Unit</option>
                <option value="dentalUnit">Dental Unit</option>
            </select><br />
            <textarea id="notes" name="notes" wrap="hard" rows="4" cols="auto" placeholder="Notes"
                maxlength="200"></textarea><br />
            <input type="submit" name="submit" value="Submit" class="submit-btn" />
        </form>
        </div>
    </div>
</body>

<!--footer-->
<?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->

</html>
