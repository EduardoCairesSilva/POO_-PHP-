<?php

class Programador extends Funcionario
{
    private string $linguagem;

    public function programar()
    {
        return 'Programo em python';
    }
}