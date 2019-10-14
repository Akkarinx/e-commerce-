<?php

include_once "../conexao.php";


Class UsuarioDAO{

    function create ( Usuario $dto){
        
        $conn = getConexao()

        $sql = "INSERT INTO usuario (nome , email , senha , cpf) VALUES (? , ? , ? , ?)";


        $stmt = $conn->prepare($sql)

        $stmt = $conn->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(2 , $dto->getEmail(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(3 , $dto->getSenha(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(4 , $dto->getCpf(), PDO::PARAM_INT);

        $stmt->execute();


        function read (){

            $conn = getConexao();

            $sql = "SELECT * from usuario";

            $stmt = $conn->Prepare($sql);
            
            $result = $stmt->fetchall();

            foreach ($result as $value) {
                            }





        }

        function update (Usuario $dto){
            try {
                $conn = getConexao();


                $stmt = $dto->prepare("UPDATE Usuario SET nome=?, email=?, senha=? , cpf=? WHERE id=?");
                $stmt = $dto->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(2 , $dto->getEmail, PDO::PARAM_STR);
                $stmt = $dto->bindValue(3 , $dto->getSenha(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(4 , $dto->getCpf(), PDO::PARAM_INT);
                $stmt = $dto->bindValue(4 , $dto->getCpf(), PDO::PARAM_INT);
   
               $stmt->execute();
   
               ParticipacaoDAO::deleteAllFromAluno($dto->getId());
               
               foreach ($dto->getParticipacoes() as $key => $participacao) {
                   ParticipacaoDAO::create($dto->getId(), $participacao->getDisciplina()->getId(), $participacao->getSemestre());
               }
           
           } catch (Throwable $th) {
           $e = new Exception('Erro ao atualizar usuário <br>'.$th->getMEssage());
               throw $e;
           }





        }

    }










}

















?>