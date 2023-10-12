<?php include "../res/templates/session-check.php"?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SLIMS - DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="../res/css/w3.css">
    <link rel="stylesheet" type="text/css" href="../res/css/style.css">
    <link rel="stylesheet" type="text/css" href="../res/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../res/css/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="icon" href="res/img/favicon.ico">
</head>
<body>
    <?php include "../res/templates/header.html"?>
    <br><br><br>

    <br><br>
    <div class="w3-center">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white">
                    <div class="card-header" style="background-color:goldenrod">TAKE FROM STOCK</div>
                    <div class="card-body">
                    <form action="minus.php" method="POST">
                        <input type="number" placeholder="Entry Number" id="itemID" name="itemID">
                        <input type="number" placeholder="Removed Units" id="amountTaken" name="amountTaken">
                        <br><br>
                        <input type="submit" class="btn btn-secondary" value="SUBTRACT">
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white">
                    <div class="card-header" style="background-color:goldenrod">ADD TO STOCK</div>
                    <div class="card-body">
                    <form action="plus.php" method="POST">
                        <input type="number" placeholder="Entry Number" id="itemId" name="itemId">
                        <input type="number" placeholder="Added Units" id="amountAdded" name="amountAdded">
                        <br><br>
                        <input type="submit" class="btn btn-secondary" value="ADD">
                    </form>
                    </div>
                </div>
            </div>

        <br><br>
    </div>
    <br><br>
    <a href="inventory.php" class="btn" style="background-color:#9b1d20; color:goldenrod"><h1>BACK</h1></a>

    <?php include "../res/templates/footer.html"?>
</body>

</html>