<?php
    $usr = "";
    $pwd = "";
    $salah = 0;
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $pwd = $_GET["txPASS"];
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
    <title>form dengan metode GET</title>
</head>
<body>

<?php
    if($salah == 1){
        echo "<div style='color:red'> User name/password masih kosong </div>";
    }



?>
    <form method="GET" action="latihan01.php" required>
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