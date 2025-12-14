<?php
include 'config.php'; 

error_reporting(0);

session_start();

if(isset($_SESSION ['username']))
{
    header("Location: dashboard.php");
    exit;  
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM klientet WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0)
    {
        $row = mysqli_fetch_assoc ($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        exit;
    }
}
else
{
    echo "<script>alert('Opsss!!! Emaili ose fjalekalimi eshte gabim, te lutem provo perseri!')</script>";

}
?>


<!DOCTYPE html>
<html lang="sq">

    <head>
        <title>Mobileria Learti - Sistemi per te porositur online...</title>
        <link rel="stylesheet" href="loginregister.css">
    </head>
    
    <body>
    
        <div class="container">
        
            <form method="post" class="login-email">
            
                <p class="login-text">Mobileria Learti - Kyqu</p>
                
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                
                <div class="input-group">
                    <input type="password" placeholder="Fjalekalimi" name="password" required>
                </div>
                
                <div class="input-group">
                    <button name ="submit" class="btn">Kyqu</button>
                </div>
                
                <p class="login-register-text">Nuk ke llogari? <a href="register.php">Regjistrohu tani</a></p>
                
            </form>
        
        </div>
        
    </body>
    
</html>

