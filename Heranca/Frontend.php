<?php

class Frontend extends Programador
{
    private bool $criaLayout = false;

    public function usarReact()
    {
        return 'Usando reactJS';
    }

    public function usarVueJS()
    {
        return 'Usando vueJS';
    }

    public function usarES6()
    {
        return 'Usando ES6';
    }

    public function programar()
    {
        return parent::programar()
            . 'Programando como frontend';
    }
}