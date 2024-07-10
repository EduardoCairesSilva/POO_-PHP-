<?php

class Categoria
{
    private $nome;

    public function __contruct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}