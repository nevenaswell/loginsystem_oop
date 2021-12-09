<?php

//database related tasks

class Login extends Dbh {

    //get user data FROM DB
    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT usersPwd FROM users2 WHERE usersUid = ? OR usersEmail = ?;');

        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        //check username
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=wronglogin");
            exit();
        }

         //check password
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        $checkPwd = password_verify($pwd, $pwdHashed[0]["usersPwd"]);

        if ( $checkPwd == false) {
            $stmt = null;
            header("location: ../login.php?error=wrongpassword");
            exit();

        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users2 WHERE usersUid = ? OR usersEmail = ?;');

            if (!$stmt->execute(array($uid, $pwd))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //login the user
            session_start();
            $_SESSION["userid"] = $user[0]["usersId"];
            $_SESSION["useruid"] = $user[0]["usersUid"];

            //close statement
            $stmt = null;    
        }
        
    }
     
}