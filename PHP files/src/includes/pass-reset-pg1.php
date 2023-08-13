
<?php

include('..//html/conn.php');

$glob_mail;

if(isset($_POST['next'])){
    $userN = $_POST['userName'];
    $email = $_POST['Email'];
    $glob = $userN;

    $sql=mysqli_query($conn,"SELECT * FROM user where firstName='$userN'");
    if(mysqli_num_rows($sql)>0)
    {
        $sql2=mysqli_query($conn,"SELECT * FROM user where email='$email'");
        if(mysqli_num_rows($sql2)>0)
        {
            header('location: ..//html/PW-reset-page2.php');
        }

        else
        {
        echo "<script>alert('Invalid User name or email!');</script>";
        header('location: ..//html/PW-reset-page2.php?error=invalidcredentials');
        }
        
    }

    else
    {
        echo "<script>alert('Invalid User name or email!');</script>";
        header('location: ..//PW-reset-page2.php?error=invalidcredentials');
    }

}

    if(isset($_POST['nextt'])){
        $newPass = $_POST['newPassword'];
        $confPass = $_POST['conf-pass'];
    
        
    
        $sql = "UPDATE user
                SET password='$newPass'
                WHERE email = '$glob'";
    
       
    if (mysqli_query($conn, $sql)) {
        header('location: ..//html/PW-reset-page3.php');
        } 
        
        else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    } 

?>

