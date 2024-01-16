<?php
     include "../res/templates/session-check.php";
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'slims_db';
     
     try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //PDO Query
        $itemId = $_POST['sampleId'];
        $stmt = $pdo->query("SELECT * FROM stock WHERE id = $itemId");

    }
    catch(PDOException $sky){
        echo '<br><br><br><h1 style="font-size:70px" class="w3-bar w3-red w3-text-bold">Error: ' . $sky->getMessage() . '</h1>';
    }
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - INVENTORY</title>
    <link rel="stylesheet" type="text/css" href="../res/css/w3.css">
    <link rel="stylesheet" type="text/css" href="../res/css/style.css">
    <link rel="stylesheet" type="text/css" href="../res/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../res/css/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="icon" href="res/img/favicon.ico">
</head>

<body>
    <?php include "../res/templates/header.html"?>
    <br><br><br><br>
    <div class="w3-bar w3-center w3-black w3-text-black">This application was created by Emmanuel Kennedi, 0786173865</div>
    <div class="w3-center">
        <?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        print  '<span class="w3-bar" style="font-weight: bold">Entry Number:</span><br>';
        print  $row['id'];
        print  '<br><span class="w3-bar" style="font-weight: bold">NAME:</span><br>';
        print  $row['itemName'];
        print  '<br><span class="w3-bar" style="font-weight: bold">CODE:</span><br>';
        print  $row['itemCode'];
        print  '<br><span class="w3-bar" style="font-weight: bold">QUANTITY:</span><br>';
        print  $row['quantity'];
        }
        ?>
    </div>

    <div class="w3-bar w3-center w3-black"><a href="inventory.php" class="w3-button" style="background-color:#9b1d20; color:goldenrod;"><< BACK</a></div>
    <br /><br /><br />
    </div>
    <?php include "../res/templates/footer.html"?>
</body>
</html>