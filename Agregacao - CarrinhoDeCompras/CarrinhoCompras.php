<?php

class CarrinhoCompras
{
    private $dataCompra;
    private $totalProdutos;
    private $itens;
    private $vendedor;
    private $cliente;
    private $formaPagamento;

    public function __construct(DateTime $dataCompra, FormaPagamento $formaPagamento)
    {
        $this->dataCompra = $dataCompra;
        $this->formaPagamento = $formaPagamento;
    }

    public function adicionarProduto(Produto $produto)
    {
        $this->itens[] = $produto;
    }

    public function setVendedor(Vendedor $vendedor)
    {
        $this->vendedor = $vendedor;
    }

    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function getTotalProdutos(): int
    {
        return $this->totalProdutos;
    }

    public function listarProdutos(): string
    {
        $returnString = '';

        foreach ($this->itens as $item) {
            $returnString .= '<p>' . $item->getNome() . '</p>';
        }

        return $returnString;
    }

    public function fazerVenda()
    {
        $returnString = "
            <h2>Cliente {$this->cliente->getNome()} fez a compra dos itens</h2>
            <h3>A forma de pagamento escolhida foi: {$this->formaPagamento}</h3>
        ";

        foreach ($this->itens as $item) {
            $returnString .= '<p>' . $item->getNome() . '</p>';
        }

        return $returnString .= "<p>Obrigado pela prefêrencia!</p>";
    }
}