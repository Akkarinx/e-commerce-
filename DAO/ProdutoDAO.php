
<?php

include_once "../conexao.php";
include_once '/DAO/Produto.php';



Class ProdutoDAO{

    function create ( Produto $dto){
        
        $conn = getConexao()
        //criando SQL comando enviado para o banco de dados.
        $sql = "INSERT INTO produtos (nome , quantidade , preco ) VALUES (? , ? , ?)";

        //enviando a querry para o banco
        $stmt = $conn->prepare($sql)

        //setando os valores capturados.
        $stmt = $conn->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
        $stmt = $conn->bindValue(2 , $dto->getQuantidade(), PDO::PARAM_INT);
        $stmt = $conn->bindValue(3 , $dto->getPreco(), PDO::PARAM_INT);

        $stmt->execute();


        function read (){

            $conn = getConexao();

            $sql = "SELECT * from produto";

            $stmt = $conn->Prepare($sql);
            
            $result = $stmt->fetchall();

            foreach ($result as $value) {
                            }





        }

        function update (Produto $dto){
            try {
                $conn = getConexao();
                

                $stmt = $conn->prepare("UPDATE Usuario SET nome=?, quantidade=?, preco=?  WHERE cpf=?");
                $stmt = $dto->bindValue(1 , $dto->getNome(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(2 , $dto->getQuantidade(), PDO::PARAM_STR);
                $stmt = $dto->bindValue(3 , $dto->getPreco(), PDO::PARAM_STR);
                
              
                
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

            $sql = "DELETE FROM produto WHERE id=?";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(1, $dto->getId(), PDO::PARAM_INT);

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