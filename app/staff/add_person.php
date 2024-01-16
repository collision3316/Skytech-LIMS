<?php 
     include "../res/templates/session-check.php";
     $host = 'localhost';
     $user = 'root';
     $passwd = '';
     $dbname = 'slims_db';
     
     //Set DSN
    // $dsn = 'mysql:host='. $host. ';dbname='. $dbname;
     
     //Create PDO instance
     //$pdo = new PDO($dsn, $user, $password);
     //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
     
     //PDO Query
     //$stmt = $pdo->query("SELECT * FROM samples");?>

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
    <br><br><br><br><br>
    <?php
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO staff (fname, lname, position, email, cell, addresss) VALUES(:fname, :lname, :position, :email, :cell, :addresss)");
            
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':cell', $cell);
            $stmt->bindParam(':addresss', $addresss);
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $position = $_POST['position'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $addresss = $_POST['address'];
        
            $stmt->execute();
            
            header("location: person.php");
        }
        catch(PDOException $sky){
            echo '<h1 style="font-size:70px" class="w3-bar w3-red w3-text-bold">Error: ' . $sky->getMessage() . '</h1>';
        }

        $conn = null;

?>
    <a href="person.php" class="w3-bar w3-center" style="background-color:#000000;color:#df1c08;"><h1>BACK</h1></a>
    <?php include "../res/templates/footer.html"?>
    <script src="../res/js/filter.js"></script>
</body>


</html>