<?php
    $usr = "";
    $pwd = "";
    $salah = 0;
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];
        }
    

        if($usr==""){
            $salah = 1;
        }else{
            echo "isi dari field user: ". $user;
        }
        if($usr==""){
            $salah = 1;
        }else{
            echo "isi dari field password: ". $pwd;
        }
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dengan metode POST</title>
</head>
<body>

    <form method="POST" action="latihan02.php">
        <div>
            user name
            <input type="text" name="txUSER">
        </div>
        <div>
            password
            <input type="password" name="txPASS">
        </div>
        <div>
            <button type="submit"> login </button>
        </div>



    </form>
    
</body>
</html>