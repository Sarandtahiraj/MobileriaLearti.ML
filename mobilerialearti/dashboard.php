<?php
require 'config.php';

if(isset($_POST["submit"]))
{
    $emrimbiemri = $_POST ["emrimbiemri"];
    $dergesa = $_POST ["dergesa"];
    $sherbimi = $_POST ["sherbimi"];
    $porosia = $_POST ["porosia"];

    $opsioneshtese =$_POST ["opsioneshtese"];
    $opsioneString = "";
    foreach($opsioneshtese as $row)
    {
        $opsioneString .= $row . ",";
    }

    $query = "INSERT INTO porosite VALUES ( '$emrimbiemri', '$dergesa', '$sherbimi', '$porosia', '$opsioneString')";
    mysqli_query($conn, $query);
    echo 
    "<script>alert('Porosia juaj eshte ruajtur me sukses!')</script>";
    

}
?>


<!DOCTYPE html>
<html lang="sq">
    <head>
        <title>Mobileria Learti - Paneli i punes, porosit produktin...</title>
        <link rel="stylesheet" href="loginregister.css">
        
        <style>
        
            body
            {
                font-family: Arial;
                background-color: white;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
            form
            {
                background-color: white;
                padding: 30px 35px;
                border-radius: 30px;
                box-shadow: 0 6px 25px rgba(0,0,0,0.9);
                width: 100%;
                max-width: 450px;
            }
            
            .input-group
            {
                display: flex;
                flex-direction: column;
            }
            
            label
            {
                font-weight: 700;
                margin: 10px 5px;
            }
            
            input[type="text"],
            input[type="number"],
            select
            {
                padding: 10px;
                border: 3px solid purple;
                border-radius: 50px;
                margin-bottom: 10px;
                transition: border-color 0.3s;
            }
            
            input[type="text"]:focus,
            input[type="number"]:focus,
            select:focus
            {
                border-color: greenyellow;
                outline: none;
            }
            
            input[type="radio"],
            input[type="checkbox"]
            {
                margin-left: 50px;
                padding: 10px;
            }
            
            button
            {
                margin-top: 20px;
                padding: 15px;
                background-color: purple;
                color: white;
                font-size: 16px;
                font-weight: bold;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            
            button:hover
            {
                background-color: greenyellow;
                color: black;
            }
            
        </style>
        
    </head>
    
    <body>
    
        <form class="" action="" method="post">
        
            <div class="input-group">
            
                <label for="">Emri dhe Mbiemri</label>
                <input type="text" name="emrimbiemri" required value="">
                <br>
                
                <label for="">Nr.Porosise</label>
                <input type="number" name="dergesa" required value="">
                <br>
                
                <label for="">Sherbimi</label>
                <select class="" name="sherbimi" required>
                
                    <option value="" selected hidden>Zgjedhe</option>
                    <option value="Kuzhina">Kuzhina</option>
                    <option value="Dhome Gjumi">Dhome Gjumi</option>
                    <option value="Komodina">Komodina</option>
                    
                </select>
                <br>
                
                <label for="">Porosia me Poste</label>
                <input type="radio" name="porosia" value="Po" required> Po
                <input type="radio" name="porosia" value="Jo"> Jo
                <br>
                
                <label for="">Opsione Shtese</label>
                <input type="checkbox" name="opsioneshtese[]" value="Montim">Montim i Mobileve ne Shtepi
                <input type="checkbox" name="opsioneshtese[]" value="Garancion"> Garancion 3 Vite
                <input type="checkbox" name="opsioneshtese[]" value="Transport"> Transport i Ambalazhuar
                <br>
                
                <button type="submit" name="submit">Ruaj Porosine</button>
                <br>
                <a class="shkyqu" href="logout.php">Shkyqu</a>
            </div>
            
        </form>
        
    </body>
    
    
</html>

