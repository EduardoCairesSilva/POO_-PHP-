<?php

include_once 'Cliente.php';
include_once 'Produto.php';
include_once 'Vendedor.php';
include_once 'FormaPagamento.php';
include_once 'Categoria.php';
include_once 'CarrinhoCompras.php';

$cliente = new Cliente('Eduardo Caires');
$vendedor = new Vendedor('José');

$formaDePagamento = new FormaPagamento('Cartão(Débito)');

$categoria = new Categoria('Informática');
$produto1 = new Produto('Notebook', 2500, $categoria);
$produto2 = new Produto('Celular', 5430, $categoria);
$produto3 = new Produto('Televisao', 6432, $categoria);
$produto4 = new Produto('Monitor', 1800, $categoria);

$carrinhoCompras = new CarrinhoCompras(new DateTime(), $formaDePagamento);
$carrinhoCompras->setCliente($cliente);
$carrinhoCompras->setVendedor($vendedor);
$carrinhoCompras->adicionarProduto($produto1);
$carrinhoCompras->adicionarProduto($produto2);
$carrinhoCompras->adicionarProduto($produto3);
$carrinhoCompras->adicionarProduto($produto4);

echo '<pre>';
print_r($carrinhoCompras);
die();
