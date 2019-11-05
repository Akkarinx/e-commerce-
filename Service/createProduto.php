<?php

    include_once "../DAO/Produto.php";
    include_once "../DAO/ProdutoDAO.php";

try {

$data = json_decode($_POST['data']);

$dto = new Produto();

$dto->setNome($data->nome);
$dto->setQuantidade($data->quantidade);
$dto->setPreco($data->preco);

ProdutoDAO::create($dto);

http_response_code(200);

echo 'Aluno criado com sucesso';

} catch (Throwable $th) {
   http_response_code(500);
   echo $th->getMessage();
}
