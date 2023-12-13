<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	echo('Please login first!');
	exit;
}


?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> medconnect - registering & administrating patient's data </title>
</head>
<body>

<div id="wrapper" class="shadow">

    <div id="header">
    <h1>Welcome to <a href="index.html">medconnect</a>!</h1>
    </div>

    <div id="menue-left">
        <l>
            <li><a href="logout.php">Logout</a></li><br />
            <li><a href="aboutus.php">about us</a></li>
            <li><a href="new_patient.php">New Patient</a></li>
            <li><a href="update_patient.html">Update patient data?</a></li>
            <li><a href="show_patient.html">See registered patients?</a></li>

        </l>
    </div>

    <div id="content">
    Welcome back, <?=$_SESSION['name']?>!<br>
    What do you want to do now? <br>
    See your -> <a href="profile.php">Personal details</a>?

    </div>



</div>
</body>
</html>