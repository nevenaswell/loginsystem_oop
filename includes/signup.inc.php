<?php

// check if accessed preoperly by submit
if (isset($_POST["submit"])) {

    //grabbing the data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($name, $email, $uid, $pwd, $pwdRepeat);

    //Running error handlers and user signup
    $signup->signupUser();

    //Successfull signup
    header("location: ../signup.php?error=none");
}

  