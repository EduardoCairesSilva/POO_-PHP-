<?php

abstract class Funcionario
{
    private string $nome;
    private int $matricula;
    private string $sexo;

    public function baterPonto()
    {
        return 'Bati meu ponto';
    }
}