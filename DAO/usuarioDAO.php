<?php

include_once "/conexao.php";


Class UsuarioDAO{

    function create ( Usuario $dto){
        
        $conn = getConexao();

        $sql = "INSERT INTO usuario (nome , email , senha , cpf) VALUES (? , ? , ? , ?)";


        $stmt = $conn->prepare($sql)

        $stmt = $conn->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(2 , $dto->getEmail(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(3 , $dto->getSenha(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(4 , $dto->getCpf(), PDO::PARAM_INT);

        $stmt->execute();


    }










}

















?>