<?php include "../res/templates/session-check.php";?>
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
     $stmt = $pdo->query("SELECT * FROM stock");
    
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
    <br><br><br><br><br>
    <div class="w3-mobile w3-bar"><a href="../dashboard.php" class="btn btn-secondary" style="background-color: #9b1d20; color: goldenrod;">DASHBOARD</a><a href="additem.html" class="btn btn-secondary" style="background-color: #9b1d20; color: goldenrod;">ADD</a><button class="btn btn-secondary" style="background-color: #9b1d20; color: goldenrod;" id="view-sample">VIEW</button><a href="update.php" class="btn" style="background-color: #9b1d20; color: goldenrod;" id="update">UPDATE</a><button class="btn btn-danger" id="delete-sample">DELETE</button><input type="text" placeholder="search" id="searchBar" onkeyup="tableFilter()" class="w3-right"></div>
    
      <!-- Delete Item -->
      <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close w3-right">&times;</span>
            <span class="w3-bar" style="background-color:red; color:white;">DELETE ITEM FROM DATABASE</span>
            <form method="POST" action="delete_item.php">
            <br />
            <p><input type="text" placeHolder="Entry No" name="delete"></p>
            <br />
            <input class="btn btn-danger" type="submit" value="DELETE">
            </form>
          </div>
        </div>
         <!-- View Item -->
    <div id="myModal2" class="modal">
        <div class="modal-content">
          <span class="close2 w3-right">&times;</span>
          <span class="w3-bar" style="background-color:#9b1d20; color:white;">VIEW FULL ITEM DETAILS</span>
          <form method="POST" action="view_item.php">
          <br />
          <p><input type="text" placeHolder="Entry No" name="sampleId"></p>
          <br />
          <input class="btn" type="submit" value="View" style="background-color:#9b1d20; color:goldenrod;">
          </form>
        </div>
    </div>

    <table id="dataTable" class="w3-table-all w3-hoverable w3-bordered w3-striped">
        <tr style="background-color:#9b1d20; color:white;">
            <th>Entry No</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Code</th>
        </tr>
        <tr>
            <?php  
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    if($row['quantity']< 50){
                        print '<tr class="kennedi" style="background-color:red;font-weight:bold;color:yellow;" id="'.$row['id'].'"><td>'. $row['id']. '</td><td>'. $row['itemName'].'</td><td>'. $row['quantity']. '</td><td>'. $row['itemCode'].'</td><script>alert("Warning!:'.$row['itemName'].' running low!!")</script>';
                    }else{
                        print '<tr class="kennedi" id="'.$row['id'].'"><td>'. $row['id']. '</td><td>'. $row['itemName'].'</td><td>'. $row['quantity']. '</td><td>'. $row['itemCode'].'</td>';
                    }
                }
            ?>
    </table>
    <?php include "../res/templates/footer.html"?>
    <script src="../res/js/filter_inventory.js"></script>
    <script src=../res/js/click_inventory.js></script>
    <script src="../res/js/modals.js"></script>
    <script>
        // Get the view modal
        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("view-sample");

        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks on the button, open the modal
        btn2.onclick = function() {
        modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
        modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        } 
    </script>
</body>


</html>