    <?php


    Class sql PDO extends PDO{

    private  $banco ="mysql:host=localhost;dbname=teste";
    private $user ='root';
    private $pass ='';
    private $conn

        public  function __construct(){

        $this->conn = NEW PDO($banco,$user,$pass);



    }


}

>