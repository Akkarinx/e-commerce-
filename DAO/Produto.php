<?php 

class Produto {

    private $id;
    private $nome;
    private $quantidade;
    private $preco;


    function __construct(){
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

 
    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function getQuantidade()
    {
        return $this->quantidade;
    }


    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }


    public function getPreco()
    {
        return $this->preco;
    }

   
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
}
}