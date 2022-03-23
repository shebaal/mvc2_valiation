<?php
class myHome{
    public $pdo;


    public function __construct(){

        $dsn='mysql:hostname=localhost;dbname=e_library';
        $username='root';
        $password='';
        $this->pdo=new PDO($dsn,$username,$password,array(
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
        ));
    }



    function select(){

        $stmt=$this->pdo->prepare("select * from users");
        $stmt->execute();
        return $stmt->fetchAll();
        
    }


}
?>