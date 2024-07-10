<?php

class Gelo
{

    var $material;
    var $forma;
    var $cor;
    var $estado = 'Sólido';
    var $temperatura = -2;

    function esfriarLiquido()
    {
        echo "<p>Estou esfriando</p>";
    }

    function esquentarGelo()
    {
        $this->temperatura = $this->temperatura + 1;
        echo "<p>Estou derretendo</p>";
    }

    function getEstado()
    {
        if ($this->temperatura < 0) {
            $this->temperatura = 'Sólido';
            echo "<h2>Sólido</h2>";
        } else {
            $this->temperatura = 'Liquido';
            echo "<h2>Liquido</h2>";
        }
    }
}