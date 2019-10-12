<?php


//Armazendo nas varias as informações nescessarias para conexão com o banco.
$banco ="mysql:host=localhost;dbname=teste";
$user ='root';
$pass ='';
try {
 
//criando uma instancia de PDO (PHP Data Objects)
$conn = new PDO ($banco , $user , $pass);


} catch (PDOException $erro) {
    echo 'Erro: '.$erro->getMessage();

}





?>