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

        $del = $_POST['delete'];
        $stmt = 'DELETE FROM stock WHERE id = '. $del;
        if($conn->exec($stmt)){
            // Redirect to personnel page
            header("location: inventory.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    catch(PDOException $sky){
        echo '<h1 style="font-size:70px" class="w3-bar w3-red w3-text-bold">Error: ' . $sky->getMessage() . '</h1>';
    }

    $conn = null;

?>