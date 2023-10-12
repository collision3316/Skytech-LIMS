<?php
     include "../../res/templates/session-check.php";
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'slims_db'
     
     //Set DSN
     $dsn = 'mysql:host='. $host. ';dbname='. $dbname;
     
     //Create PDO instance
     $pdo = new PDO($dsn, $user, $password);
     //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
     
     //PDO Query
     $sampleId = $_POST['sampleId'];
     $stmt = $pdo->query("SELECT * FROM samples WHERE id = $sampleId");
     $stmt2 = $pdo->query("SELECT * FROM customers WHERE id = $sampleId");
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - SAMPLES</title>
    <link rel="stylesheet" type="text/css" href="../../res/css/w3.css">
    <link rel="stylesheet" type="text/css" href="../../res/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../res/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../res/css/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="icon" href="res/img/favicon.ico">
</head>

<body>
    <?php include "../../res/templates/header.html"?>
    <br><br><br><br>
    <div class="w3-bar w3-center w3-black w3-text-black">This application was created by Emmanuel Kennedi, 0786173865</div>
    <div class="w3-container">
        <?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        print  '<span style="font-weight: bold">Entry Number:  </span>  ';
        print  $row['id'];
        print  '<br><span style="font-weight: bold">Test ID:  </span>  ';
        print  $row['testId'];
        print  '<br><span style="font-weight: bold">Test Name:  </span>  ';
        print  $row['testName'];
        print  '<br><span style="font-weight: bold">Description:  </span>  ';
        print  $row['testDescription'];
        print  '<br><span style="font-weight: bold">Test Results:  </span>  ';
        print  $row['testResults'];
        print  '<br><span style="font-weight: bold">Date Started:  </span>  ';
        print  $row['createAt'];
        print  '<br><span style="font-weight: bold">Room:  </span>  ';
        print  $row['room'];
        print  '<br><span style="font-weight: bold">Shelf:  </span>  ';
        print  $row['shelf'];
        print  '<br><span style="font-weight: bold">Tester:  </span>  ';
        print  $row['testInCharge'];
        print  '<br><span style="font-weight: bold">Tester Cell:  </span>  ';
        print  $row['contact'];
        }
        ?>
        <?php  while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
        print  '<br><br><span style="font-weight: bold">Company:  </span>  ';
        print  $row2['custCompany'];
        print  '<br><span style="font-weight: bold">Name:  </span>  ';
        print  $row2['custName'];
        print  '<br><span style="font-weight: bold">Surname:  </span>  ';
        print  $row2['custSurname'];
        print  '<br><span style="font-weight: bold">Gender:  </span>  ';
        print  $row2['custSex'];
        print  '<br><span style="font-weight: bold">Contact:  </span>  ';
        print  $row2['custCell'];
        }
        ?>
    </div>

    <div class="w3-bar w3-center w3-black"><a href="sample.php" class="w3-button" style="background-color:#9b1d20; color:goldenrod;"><< BACK</a></div>
    <br /><br /><br />
    </div>
    <?php include "../../res/templates/footer.html"?>
</body>
</html>