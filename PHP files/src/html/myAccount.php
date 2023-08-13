<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="..//css/myAccount.css" rel="stylesheet">
    <link href="..//css/common-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="..//css/common-2.css">
    <script src="../src/js/myAccount.js"></script>

    <title>My Account</title>
</head>

<body>

    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
<!--header end--> 

    <div class="row" style="justify-content: center;">
        <h2>My Account</h2>
    </div>
    <div class="row" style="justify-content: center;">
        <div class="userBlock">
            <img src="..//images/myaccount/pp.png" />
            <h4 style="margin-left: 10px;">Username</h4>
        </div>
    </div>
    <div class="row" id="form-continer" style="margin-top: 50px;">
        <div class="container">
        <form method="post" class="form-horizontal" enctype="multipart/form-data" action="">
            <label for="firstname">First name:</label><br>
            <input type="text" name="firstname" id="firstName" placeholder="FirstName"/><br />
            <label for="lastname">Last name:</label><br>
            <input type="text" name="lastname" id="lastname" placeholder="LastName"/><br />
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" placeholder="Email"/><br />
            <label for="password">Password:</label><br>
            <input type="password" name="c_password" id="c_password" placeholder="Current Password" /><br />
            <label for="password">New Password:</label><br>
            <input type="password" name="n_password" id="n_password" placeholder="New Password" /><br />
            <label for="phone">Phone:</label><br>
            <input type="tel" name="phone" id="phone" placeholder="Number"/><br />
            <label for="address">Address:</label><br>
            <input type="text" name="address" id="address" placeholder="Address"/><br />
            <input type="submit" name="submit" value="Update Profile" class="submit-btn">
            <div style="color:red;text-align: center; font-size: 12px;">
                <label id="vPassword"></label>
            </div>
        </form>
        </div>
    </div>
   
    <!--footer-->
    <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->

</body>

</html>
