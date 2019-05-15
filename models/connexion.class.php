<?php

class connexion extends connect{

    function __construct($connect)
    {
        parent::__construct($connect);
    }

    function connexion($login,$password)
    {
        $req = $this -> _connect -> query("SELECT * FROM Users WHERE Login = '$login' AND password = '$password' AND actif = 1");
        $resReq = $req->fetchAll();
        $nb = $req->rowCount();

        if($nb == 1 ){
            foreach($resReq as $res){
                $_SESSION['user'] = $res['id'];
                header('location: Home');
            }
        }

    }

}

?>