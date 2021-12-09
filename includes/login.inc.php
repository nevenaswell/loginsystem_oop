<?php

// check if accessed preoperly by submit
if (isset($_POST["submit"])) {

    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //Instantiate LoginContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    //Running error handlers and user login
    $login->loginUser();

    //Successfull login
    header("location: ../profile.php");
}

  