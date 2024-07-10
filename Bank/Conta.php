<?php

class Conta
{
    private int $agency;
    private int $number;
    private string $type;
    private string $holder;
    private float $amount = 0;
    private bool $active = false;

    public function __construct(int $agency, int $number) {
        $this->agency = $agency;
        $this->number = $number;
    }

    public function setAgency(int $agency): void {
        $this->agency = $agency;
    }

    public function getAgency(): int {
        return $this->agency;
    }

    public function setNumber(int $number): void {
        $this->number = $number;
    }

    public function getNumber(): int {
        return $this->number;
    }

    public function setType(string $type): void {
        if(!is_null($this->$type)) {
            return;
        }
        switch($type) {
            case 'cc':
                $this->amount = 20;
                break;
            case 'cp':
                $this->amount = 70;
                break;
            default:
                die('Erro: tipo de conta inválida! Defina somente cc ou cp!');
        }

        $this->type = $type;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setHolder(string $holder): void {
        $this->holder = $holder;
    }

    public function getHolder(): string {
        return $this->holder;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function isActive(): bool {
        return $this->active;
    }

    public function open(): void {
        $this->active = true;
        $this->processWithdraw();
        echo "<h2>Parabéns você abriu uma conta!</h2>";
    }

    public function close(): void {
        if($this->amount > 0) {
            die('Erro: o saldo da conta precisa estar zerado para encerrar!');
        }
        $this->active = false;
        echo "<h2>Que pena que você encerrou sua conta conta :(</h2>";
    }

    public function deposit(float $value): void {
        if($this->active) {
            die('Erro: a conta solicitada está inativa');
        }
        $this->amount += $value;
        echo "<h2>Comprovante de depósito: R$ {$value}</h2>";
    }

    public function withdraw(float $value): void {
        if($this->active) {
            die('Erro: a conta solicitada está inativa');
        }
        if($value > $this->amount) {
            die('Saldo insuficiente!');
        }
        $this->amount -= $value;
        echo "<h2>Comprovante de saque: R$ {$value}</h2>";
    }

    private function processWithdraw(): void {
        echo "<h2>Cobranças da conta {$this->number} foram processadas.</h2>";
    }
}

$conta = new Conta(1234, 999999999999);
$conta->setHolder('Eduardo Caires');
$conta->setType('cp');
$conta->deposit(50000);
$conta->withdraw(20000);
$conta->withdraw(30000);
$conta->open();

echo "
    <h2>O saldo atual da conta é: R$ {$conta->getAmount()}</h2>
    <hr />
";
