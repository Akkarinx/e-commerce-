<?php

public class Carrinho {


    private $id;
    private $cod_produto;
    private $cod_usuario;
    private $cod_pedido;
    


    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getCod_produto()
    {
        return $this->cod_produto;
    }

  
    public function setCod_produto($cod_produto)
    {
        $this->cod_produto = $cod_produto;

        return $this;
    }

    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    public function getCod_pedido()
    {
        return $this->cod_pedido;
    }


    public function setCod_pedido($cod_pedido)
    {
        $this->cod_pedido = $cod_pedido;

        return $this;
    }
}








?>