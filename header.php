<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        
    </head>
    <body class="m-0 p-0 overflow-hidden">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="index.php">Login System OOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <?php
                            if (isset($_SESSION["userid"])) {
                        ?>
                                <li class="nav-item"><a class="nav-link" aria-current="page" href="profile.php">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" aria-current="page" href="includes/logout.inc.php">Logout</a></li>
                        <?php        
                            }
                            else
                            {
                        ?>
                                <li class="nav-item"><a class="nav-link" aria-current="page" href="login.php">Login</a></li>
                                <li class="nav-item"><a class="nav-link" aria-current="page" href="signup.php">Register</a></li>
                        <?php        
                            }
                        ?>                                              
                    </ul>
                </div>
            </div>
        </nav>