<?php

//user information related tasks

class LoginContr extends Login {
    //receiving the data from the user    
    private $uid;
    private $pwd;

    //assign received data to properties
    public function __construct($uid, $pwd) {      
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    //login user
    public function loginUser() {
        //empty input
        if ($this->emptyInput() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        } 
        
        //logging in the user
        $this->getUser($this->uid, $this->pwd);

    }

    //error-handlers
     
    //empty input
    private function emptyInput() {
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }


}