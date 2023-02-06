<?php
class Other extends Products
{
    public $other;

    public function __construct($image, $titolo, $prezzo, $categoria, $other)
    {
        parent::__construct($image, $titolo, $prezzo, $categoria);
        $this->other = $other;
    }
}

$other1 = new Other('https://images.unsplash.com/photo-1636837147362-4f2091789589?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80', 'Casetta', '120$', 'Dog', array('H: 100cm', 'L: 50cm'));

$other2 = new Other('https://xiaomiplanet.sk/wp-content/uploads/2020/08/xiaomi-smart-akvarium-s-wifi-cover.jpg', 'Acquario smart', '500$', 'Fish', array('H: 100cm', 'L:40cm', 'S:30cm'));
