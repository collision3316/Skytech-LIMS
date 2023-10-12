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
    <!--<div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header" style="background-color:goldenrod;">Skytech Laboratory Information Management System</div>
                <div class="card-body">body</div>
                <div class="card-footer">footer</div>
            </div>
        </div>
    </div>-->

    <br><br>
    <div class="w3-center">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white">
                    <div class="card-header" style="background-color:goldenrod">SAMPLES</div>
                    <div class="card-body">
                        Sample tracking
                    </div>
                    <div class="card-footer"><a href="samples/sample.php" class="btn btn-secondary stretched-link">OPEN</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white">
                    <div class="card-header" style="background-color:goldenrod">WORKFLOW</div>
                    <div class="card-body">
                        Protocol Execution
                    </div>
                    <div class="card-footer"><a href="workflow/index.php" class="btn btn-secondary stretched-link">OPEN</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white" style="width:400px">
                    <div class="card-header" style="background-color:goldenrod">INVENTORY</div>
                    <div class="card-body">
                        Storage Organization
                    </div>
                    <div class="card-footer"><a href="inventory/inventory.php" class="btn btn-secondary streched-link">OPEN</a></div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white" style="width:400px">
                    <div class="card-header" style="background-color:#9b1d20"></div>
                    <div class="card-body">
                        <h3>ABOUT</h3>
                    </div>
                    <div class="card-footer"><a href="about.html" class="btn btn-secondary stretched-link">ABOUT</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white">
                    <div class="card-header" style="background-color:goldenrod">PERSONNEL</div>
                    <div class="card-body">
                        Personnel information
                    </div>
                    <div class="card-footer"><a href="staff/person.php" class="btn btn-secondary stretched-link">OPEN</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:#9b1d20; color:white" style="width:400px">
                    <div class="card-header" style="background-color:#9b1d20"></div>
                    <div class="card-body">
                        <h3>LOGOUT</h3>
                    </div>
                    <div class="card-footer"><a href="logout.php" class="btn btn-secondary stretched-link">LOGOUT</a></div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="w3-bar" style="background-color:#9b1d20; color:white"><a href="reset-password.php" class="w3-button" style="background-color:goldenrod; color:white">Reset Password</a></div>

    <?php include "../res/templates/footer.html"?>
</body>

</html>