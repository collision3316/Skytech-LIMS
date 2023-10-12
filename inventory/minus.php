<?php
    $servername = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "slims_db'

    //$dsn = "mysql:host=".$servername.";dbname=".$dbname;
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwd);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST['itemID'];
        $paid_now = $_POST['amountTaken'];
        $sql = $conn->query("SELECT * FROM stock WHERE id = $id");
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $balance = $row['quantity'];
        $paid = ($balance - $paid_now);


        // prepare sql and bind parameters
        $stmt = $conn->prepare("UPDATE stock SET quantity = :paid WHERE id = :id;");

 
        $stmt->bindParam(':paid', $amtTaken);
        $stmt->bindParam(':id', $sid);
 
        $amtTaken = $paid;
        $sid = $id;
        $stmt->execute();

        header("location: inventory.php");
    }
    catch(PDOException $sky){
        echo '<h1 style="font-size:70px" class="w3-bar w3-red w3-text-bold">Error: ' . $sky->getMessage() . '</h1>';
    }

    $conn = null;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>SLIMS - INVENTORY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../res/css/w3.css">
  <link rel="stylesheet" type="text/css" href="../res/css/fontawesome-all.min.css">
</head>

<body>
    <br/><a href="inventory.php"><button class="w3-black w3-hover-deep-orange w3-jumbo"><h1>BACK</h1></button></a>
    <!-- <a href="t.php"><button class="w3-black w3-hover-deep-orange w3-jumbo">HOME</button></a> -->
</body>

<!--Footer-->
<footer class="w3-bar w3-black w3-text-white">
    powered by Skytech Digital, 2022
  </footer>

</html>