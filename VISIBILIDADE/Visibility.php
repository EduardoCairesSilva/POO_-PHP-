<?php

namespace VISIBILIDADE;

class Visibility
{
    public $public = 'Public';
    private $private = 'Private';
    protected $protected = 'Protected';

    public function __set($attr, $value) {
        $this->$attr = $value;
    }

    public function __get($attr) {
        return $this->$attr;
    }
    public function publicMethod()
    {
      echo "<h2>Public Method</h2>";
    }

    public function noVisibility()
    {
        echo "<h2>No visibility</h2>";
    }

    public function privateMethod()
    {
        echo "<h2>Private Method</h2>";
    }

    public function protectedMethod()
    {
        echo "<h2>Protected Method</h2>";
    }
}

$teste = new Visibility();

$teste->public;
$teste->private;
$teste->protected;

$teste->publicMethod();
$teste->privateMethod();
$teste->protectedMethod();
$teste->noVisibility();
