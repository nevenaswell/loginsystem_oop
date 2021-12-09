<?php

//DB connection

class Dbh {

    protected function connect() {
        try {
            $dbUsername = "root";
            $dbPassword = "";
            $dbh = new PDO('mysql:host=localhost;dbname=fullstack', $dbUsername, $dbPassword);
            return $dbh;
        }
        catch (PDOExeption $e) {
            print "Error!: " . $e->getMessage() . "</br>";
            die();
        }
    }
}