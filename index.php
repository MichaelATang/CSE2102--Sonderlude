<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: includes/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPS_Inmates Management Information System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel = "stylesheet" href = "styles/homeScreen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: `right;;`; }

    </style>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <img src="assets/Guyana_Prison_Service_logo.png" style="width:31.140px;height:40.442px" id="logo" />
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="assets/Guyana_Prison_Service_logo.png">Guyana Prison Service</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Options</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="includes/database.php">View Database</a></li>
            <li><a href="includes/users.php">View Users</a></li>
            <li><a href="includes/logs.php">View Logs</a></li>

          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>
            <?php echo htmlspecialchars($_SESSION["username"]); ?></b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Signed in as <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> </a></li>
            <li><a>Admin privileges</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="includes/reset_password.php">Reset Password</a><li>
            <li><a href="includes/logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<center><h3><b>Inmates Management Information System</b></h3></center>
</body>

</body>
</html>
