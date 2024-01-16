<?php include "res/templates/session-check.php"?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - STORAGE</title>
    <link rel="stylesheet" type="text/css" href="res/css/w3.css">
    <link rel="stylesheet" type="text/css" href="res/css/style.css">
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="icon" href="res/img/favicon.ico">
</head>
<body>
    <?php include "res/templates/header.html"?>
    <br><br><br>
    <div class="w3-mobile w3-bar"><button class="btn btn-secondary">bt1</button><input type="text" placeholder="search" id="searchBar" onkeyup="tableFilter()" class="w3-right"></div>
    <table id="dataTable" class="w3-table-all w3-hoverable w3-bordered w3-striped">
        <tr style="background-color:#9b1d20; color:white;">
            <th>ID</th>
            <th>Test ID</th>
            <th>Test Name</th>
            <th>Test Incharge (ID)</th>
            <th>CONTACT</th>
        </tr>
        <tr>
            <?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            print '<tr><td>'. $row['id']. '</td><td>'. $row['sname']. '</td><td>'. $row['slastname']. '</td><td>'. $row['kin_name'].'</td><td>'. $row['kin_contact']. '</td>';}?>
        </tr>
    </table>
    <?php include "res/templates/footer.html"?>
</body>

</html>