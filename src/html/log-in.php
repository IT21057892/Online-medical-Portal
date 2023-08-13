<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="..//css/log-in.css">
</head>
<body>

    <div class="form-box">
                <!--text description field-->
                <div class="description-field" id="desc-field">

                    <div class="home-btn">
                        <img id="back-logo" src="..//images/sign up ,login, pw_reset/back logo.png" alt="">
                        <button type="button" id="H-btn"><a href="..//html/index.php">Home</a></button>
                    </div>
        
                    <div class="text-description">
                        <h2>Welcome to the health care <br> Medical Portal</h2>
        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing <br> elit. Est quidem impedit nobis in porro provident <br> obcaecati eaque officia? Possimus ipsa cum aut <br> corporis veritatis saepe illum, corrupti in animi <br> praesentium! Minus totam non reprehenderit <br> accusamus iusto, esse rerum autem quidem <br> temporibus delectus quia commodi placeat! <br> Molestias blanditiis saepe id rerum.</p>
                    </div>
        
                    <div class="read-more">
                        <button type="button" id="RM-btn"><a href="..//html/About Us.php">Read more</a></button>
                    </div>
        
                </div>
                <!--text description field end-->

        
        <!--form-->
        <form id="form-container" action="..//includes/login-val.php" method="POST">
            <h2>Sign in</h2>

            <div class="input-field">
                <input type="text" name="userName" id="userName" placeholder="Enter Username(F-name)..." required>
            </div>

            <div class="input-field">
                <input type="text" name="PW" id="PW" placeholder="Enter Password..." required>
            </div>

            <div class="submit">
                <button id="login" type="submit" name="login" value="submit">Log in </button>
            </div>

            <div class="sign-up-link">
                <label>New here? <a href="..//html/sign-up.php">Sign up</a></label>
            </div>

            <div class="reset">
                <label>Forgot password? <a href="..//html/PW-reset-page1.php">Reset password</a></label>
            </div>


        </form>
        <!--form end-->
    </div>

    <script src="..//js/log-in.js"></script>

</body>
</html>