<?php
session_start();

if (!isset($_SESSION["username"])) {
    $_SESSION["msg"] = "You must log in first";
    header("location: login.php");
}

if (isset($_GET["logout"])) {
    session_destroy();
    unset($_SESSION["username"]);
    header("location: login.php");
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirma H4: Hostel Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #99ccff;
            background-image: url('Hostel-1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
    background-color: #000066;
    color: #ffffff;
    text-align: center;
    padding: 1em;
    margin: 0; 
    width: 100%;
    box-sizing: border-box;
      display: flex;
      align-items: center;
}
h1{
    margin-left: 300px;
}

.welcome-section{
    text-align: center;
}

        .navigation {
            background-color: #0059b3;
        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .navigation li {
            float: left;
        }

        .navigation a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navigation a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding: 20px;
        }

        .notification {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .success {
            background-color: #4CAF50;
            color: white;
        }

        .welcome-section {
            margin-top: 20px;
            color: #00284d
        }
    </style>
</head>

<body>

    <header class="header">
    <div class="logo">
      <img src="nima-logo.png" alt="Logo" width="70" height="70">
    </div>
        <h1>Nirma H4: Hostel Management System</h1>
    </header>

    <nav class="navigation">
        <ul>
            <?php if ($_SESSION["username"] === "kajal_lochab"): ?>
                <li class="active"><a href="register.php">Register New Student</a></li>
            <?php endif; ?>
            <?php if ($_SESSION["username"] === "kajal_lochab"): ?>
                <li class="active"><a href="edit_laundry.php">Edit Laundry Catalogue</a></li>
            <?php endif; ?>
    
                <li class="active"><a href="view_laundry.php">View Laundry Catalogue</a></li>
            
            <li><a href="index.php?logout='1'" class="logout-link">Logout</a></li>
        </ul>
    </nav>


    <div class="content">
        <?php if (isset($_SESSION["success"])): ?>
            <div class="notification success">
                <p><?php
                echo $_SESSION["success"];
                unset($_SESSION["success"]);
                ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION["username"])): ?>
            <section class="welcome-section">
                <p>Welcome <strong><?php echo $_SESSION[
                    "username"
                ]; ?></strong></p>
            </section>
        <?php endif; ?>
    </div>

</body>

</html>
