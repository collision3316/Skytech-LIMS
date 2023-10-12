<?php include "../../res/templates/session-check.php";?>
<?php
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
     $cust = $_GET['cust'];
     $rowl = substr($cust, 3);
     $stmt = $pdo->query("SELECT * FROM samples WHERE custCompany LIKE '$rowl'");
    
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
    <link rel="icon" href="../../res/img/favicon.ico">
</head>
<body>
    <?php include "../../res/templates/header.html"?>
    <br><br><br><br><br>
    <div class="w3-mobile w3-bar"><a href="../../logout.php" class="w3-button" style="background-color:#9b1d20; color:goldenrod; text-decoration:none;">LOGOUT</a><input type="text" placeholder="search" id="searchBar" onkeyup="tableFilter()" class="w3-right"></div>

    <table id="dataTable" class="w3-table-all w3-hoverable w3-bordered w3-striped">
        <tr style="background-color:#9b1d20; color:white;">
            <th>Test Name</th>
            <th>Test Description</th>
            <th>Test ID</th>
            <th>Test Result</th>
            <th>Date</th>
            <th>Test Incharge</th>
            <th>Contact</th>
        </tr>
        <tr>
            <?php  
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    print '<tr class="kennedi" id="'.$row['id'].'"><td>'.$row['testName']. '</td><td>'. $row['testDescription'].'</td><td>'. $row['testId'].'</td><td>'. $row['testResults'].'</td><td>'. $row['createAt']. '</td><td>'. $row['testInCharge'].'</td><td>'.$row['contact'].'</td><tr>';
                }
            ?>
    </table>
    <?php include "../../res/templates/footer.html"?>
    <script src="../../res/js/filter.js"></script>
    <script src="../../res/js/filter2.js"></script>
</body>


</html>