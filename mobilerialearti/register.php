<?php

include 'config.php'; //include nenkupton perfshirje ose nderlidhje me filen e caktuar, ne rastin tone thirret config.php i cili na nevojitet per procesim dhe gjenerim te te dhenave.

error_reporting(0);

session_start();

if(isset($_SESSION['username']))
{
    header("Location: login.php");
    exit;
}

//kushtezimi per butonin regjistrohu i cili eshte i emeruar si objekt me emrin SUBMIT, qellimi i te cilit eshte te i grumbulloj te dhenat ne fushat e formes per regjistrim dhe pastaj ti ruaj/dergoj/procesoj ne fushat e tabeles se databazes mobilerialearti e cila ka tabelen per te ruajtur regjistrimin e perdoruesve me emrin KLIENTET.

if(isset($_POST['submit']))
{
    
    //grumbullimi i te dhenave nga fushat perkatese te faqes per regjistrim e cila eshte register.phpp, ti ruaj dhe procesoj te dhenat e shtypura ne tabelen klientet.
    //krijohen variabla per te bartur te dhenat e fushave
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    
    //kushtezimi i cili kerkon nga perdoresu qe fjalekalimi dhe perserit fjalekalimin te jene te njejta si karaktere te shtypura
    if($password == $cpassword)
    {
        $sql = "SELECT * FROM klientet WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        
        if(!$result->num_rows>0)
        {
            $sql = "INSERT INTO klientet (username, email, password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
                echo "<script>alert('Urime, ju jeni regjistruar me sukses!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else //nese te dhenat e shtypura nuk gjenerohen me sukses pra deshton conn dhe sql
            {
                echo "<script>alert('Oppss!!! Dicka shkoj gabim, provo perseri!')</script>";
            }
        } else //nese ekziston ndonje email e regjistruar ma heret
        {
            echo "<script>alert('Oppss!!! Dicka shkoj gabim, te lutem kontakto stafin teknik')</script>";
        }
    } else //nese fjalekalimi me perserit fjalekalimin nuk jane te njejta
    {
        echo "<script>alert('Oppss!!! Fjalekalimet nuk perputhen, te lutem provo perseri!')</script>";
    }
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
                
                <p class="login-text">Mobileria Learti - Regjistrohu</p>
                
                <div class="input-group">
                    <input type="text" placeholder="Perdoruesi" name="username" required>
                </div>
                
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                
                <div class="input-group">
                    <input type="password" placeholder="Fjalekalimi" name="password" required>
                </div>
                
                <div class="input-group">
                    <input type="password" placeholder="Perserit Fjalekalimin" name="cpassword" required>
                </div>
                
                <div class="input-group">
                    <button name="submit" class="btn">Regjistrohu</button>
                </div>
                
                <p class="login-register-text">Ke llogari? <a href="login.php">Kyqu Tani</a> </p>
                
            </form>
            
        </div>
        
    </body>
    
    
</html>

