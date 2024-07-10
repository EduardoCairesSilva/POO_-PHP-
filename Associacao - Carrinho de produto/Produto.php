<?php

class Produto
{
    private $nome;
    private $preco;
    private $categoria;

    public function __construct(string $nome, float $preco, Categoria $categoria = null) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria) {
        $this->categoria = $categoria;
    }
}