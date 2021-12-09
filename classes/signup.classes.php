<?php

//database related tasks

class Signup extends Dbh {

    //set user into DB
    protected function setUser($name, $email, $uid, $pwd) {
        $stmt = $this->connect()->prepare('INSERT INTO users2 (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($name, $email, $uid, $hashedPwd))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        
        $stmt = null;
    }
    
    //check if user exists in DB
    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT * FROM users2 WHERE usersUid = ? OR usersEmail = ?;');        

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        
        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;      
        }

        return $resultCheck;
    }
}