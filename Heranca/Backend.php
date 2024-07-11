<?php

class Backend extends Programador
{
    private bool $sabeSQL = false;

    public function consultarBD()
    {
        return 'Consultando banco de dados';
    }

    public function tratarRequisicao()
    {
        return 'Tratando requisição';
    }

    public function configurarRotas()
    {
        return 'Configurando rotas';
    }

    public function programar()
    {
        return 'Programando como backend';
    }
}