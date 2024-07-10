<?php

class Sell
{
    public string $people_seller;
    public string $job;
    public int $value;
    public string $commissionRate;
    public int $commission;

    public function realizeSeller()
    {
        echo "
            <h1>Venda realizada com sucesso!</h1>
            <h3>Vendedor: {$this->people_seller} ({$this->job})</h3>
            <h3>Valor da venda: R$ {$this->value}</h3>
            <h3>Comissão: R$ {$this->commission} <small>({$this->commissionRate}%)</small></h3>
            <hr />
            <p>Parabéns {$this->people_seller}! Você ganhou R$ {$this->commission} de comissão</p>
        ";
    }
}

$Seller = new Sell();
$Seller->people_seller = 'José';
$Seller->job = 'V';
$Seller->value = 3000;

switch ($Seller->job) {
    case $job = 'E':
        $Seller->commissionRate = '0.05';
        break;
    case $job = 'V':
        $Seller->commissionRate = '0.10';
        break;
    case $job = 'G':
        $Seller->commissionRate = '0.20';
        break;
    default:
        die('Cargo inválido, só pode ser usado E, V ou G');
}

$Seller->commission = $Seller->value * $Seller->commissionRate;
$Seller->realizeSeller();