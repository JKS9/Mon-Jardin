<?php

class register extends connect {

    function __construct($connect)
    {
        parent::__construct($connect);
    }

    function register($name,$firstName,$login,$password,$email){

        $req = $this -> _connect -> exec("INSERT INTO Users (name, firstName, Login, password, email, actif) VALUES ('$name','$firstName','$login','$password','$email','1')");
    }
}

?>