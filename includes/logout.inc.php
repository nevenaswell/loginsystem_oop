<?php

session_start();
session_unset();
session_destroy();

//go back to frontpage
header("location: ../index.php");