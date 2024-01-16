<?php
     include "../res/templates/session-check.php";
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'slims_db';
     
     //Set DSN
     $dsn = 'mysql:host='. $host. ';dbname='. $dbname;
     
     //Create PDO instance
     $pdo = new PDO($dsn, $user, $password);
     //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
     
     //PDO Query
     $sampleId = $_POST['sampleId'];
     $stmt = $pdo->query("SELECT * FROM staff WHERE id = $sampleId");
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - SAMPLES</title>
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
        print  $row['fname'];
        print  '<br><span class="w3-bar" style="font-weight: bold">SURNAME:</span><br>';
        print  $row['lname'];
        print  '<br><span class="w3-bar" style="font-weight: bold">POSITION:</span><br>';
        print  $row['position'];
        print  '<br><span class="w3-bar" style="font-weight: bold">EMAIL:</span><br>';
        print  $row['email'];
        print  '<br><span class="w3-bar" style="font-weight: bold">CELL:</span><br>';
        print  $row['cell'];
        print  '<br><span class="w3-bar" style="font-weight: bold">ADDRESS:</span><br>';
        print  $row['addresss'];
        }
        ?>
    </div>

    <div class="w3-bar w3-center w3-black"><a href="person.php" class="w3-button" style="background-color:#df1c08; color:#000000;"><< BACK</a></div>
    <br /><br /><br />
    </div>
    <?php include "../res/templates/footer.html"?>
</body>
</html>