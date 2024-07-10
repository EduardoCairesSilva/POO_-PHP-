<?php

$categoria = new Categoria('Informática');

$produto = new Produto('Notebook', 1000);

echo $produto . ' - ' . $produto->getCategoria()->getNome();
