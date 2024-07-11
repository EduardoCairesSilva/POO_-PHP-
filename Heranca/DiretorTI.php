<?php

class DiretorTI extends Funcionario
{
    public function autorizarCompra()
    {
        return 'Autorizei a compra';
    }

    public function contratar()
    {
        return 'Fiz o contrato dele';
    }

    public function fazerFaturamento()
    {
        return 'Fiz o faturamento da empresa';
    }
}