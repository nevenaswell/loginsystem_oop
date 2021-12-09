<?php

//user information related tasks

class SignupContr extends Signup {
    //receiving the data from the user
    private $name;
    private $email;
    private $uid;
    private $pwd;
    private $pwdRepeat;

    //assign received data to properties
    public function __construct($name, $email, $uid, $pwd, $pwdRepeat) {        
        $this->name = $name;
        $this->email = $email;
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    //signup user
    public function signupUser() {

        //empty input
        $result;
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        //invalid uid
        if ($this->invalidUid() == false) {
            header("location: ../signup.php?error=invaliduid");
            exit();
        }
        //invalid email
        if ($this->invalidEmail() == false) {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        //passwords don't match
        if ($this->pwdMatch() == false) {
            header("location: ../signup.php?error=passwordsdontmatch");
            exit();
        }
        //username taken
        if ($this->uidExists() == false) {
            header("location: ../signup.php?error=uidtaken");
            exit();
        }

        //signup the user
        $this->setUser($this->name, $this->email, $this->uid, $this->pwd);
    }

    //error-handlers
     
    //empty input
    private function emptyInput() {
        $result;
        if (empty($this->name) || empty($this->email) || empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    //invalid username
    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    //invalid email
    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    } 
    
    //passwords don't match
    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

     //uid exists  
    private function uidExists() {
        $result;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
   


}