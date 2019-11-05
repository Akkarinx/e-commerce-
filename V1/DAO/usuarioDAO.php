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
                

                $stmt = $conn->prepare("UPDATE Usuario SET nome=?, email=?, senha=?  WHERE cpf=?");
                $stmt = $dto->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(2 , $dto->getEmail(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(3 , $dto->getSenha(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(4 , $dto->getCpf(), PDO::PARAM_INT);
              
                
               $stmt->execute();
                echo 'dados alterados com sucesso';
               }
           
           } catch (Throwable $th) {
           $e = new Exception('Erro ao atualizar usuário <br>'.$th->getMEssage());
               throw $e;
           }
        }
        
        function delete(Usuario $dto){
               
            try {
            $conn = getConexao();

            $sql = "DELETE FROM usuario WHERE cpf=?";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(1, $dto->getCpf(), PDO::PARAM_INT);

=
            $stmt->execute();

            }catch (Throwable $th) {
                $e = new Exception('Erro ao remover usuário <br>'.$th->getMEssage());
                    throw $e;
                } 





        }

    }










}

















?>