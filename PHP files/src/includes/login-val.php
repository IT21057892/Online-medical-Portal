
<?php

include('..//html/conn.php');

if(isset($_POST['login'])){
    $userN = $_POST['userName'];
    $password = $_POST['PW'];

    $sql=mysqli_query($conn,"SELECT * FROM user where firstName='$userN'");
    if(mysqli_num_rows($sql)>0)
    {
        $sql2=mysqli_query($conn,"SELECT * FROM user where password='$password'");
        if(mysqli_num_rows($sql2)>0)
        {
            echo "<script>alert('Log in Complete!');</script>";
            header('location: ..//html/index.php');
        }

        else
        {
        echo "<script>alert('Invalid User name or Password!');</script>";
        header('location: ..//html/log-in.php?error=invalidcredentials');
        }
        
    }

    else
    {
        echo "<script>alert('Invalid User name or Password!');</script>";
        header('location: ..//html/log-in.php?error=invalidcredentials');
    }

} 
?>