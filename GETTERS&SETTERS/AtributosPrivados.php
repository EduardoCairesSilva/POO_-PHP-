<?php

class AtributosPrivados
{
    private string $peopleSeller;
    private int $value;
    private int $commission;
    private string $work;
    private string $bestSeller;

    public function __set($attr, $value) {
        $this->$attr = $value;
    }

    public function __get($attr) {
        return $this->$attr;
    }

    public function realizeSell() {
        echo "
            <p>O nome do vendedor é: <b>$this->peopleSeller</b>, o valor do negócio dele está atualmente custando <b>$this->value</b> e a comissão que irá receber gira em torno de <b>$this->commission</b>
               O seu trabalho atual está sendo como <b>$this->work</b> e sua melhor venda foi de um <b>$this->bestSeller</b>.
            </p>
        ";
    }
}

$Seller = new AtributosPrivados();
$Seller->peopleSeller = 'José';
$Seller->value = 3000;
$Seller->commission = 250;
$Seller->work = 'Corretor';
$Seller->bestSeller = 'Imóvel na praia';
$Seller->realizeSell();
