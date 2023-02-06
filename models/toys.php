<?php
class Toys extends Products
{
    public $toys;

    public function __construct($image, $titolo, $prezzo, $categoria, $toys)
    {
        parent::__construct($image, $titolo, $prezzo, $categoria);
        $this->toys = $toys;
    }
}

$toys1 = new Toys('https://images.unsplash.com/photo-1591946614720-90a587da4a36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 'Elefantino', '20$', 'Dog', 'tessuto');

$toys2 = new Toys('https://images.unsplash.com/photo-1621508638997-e30808c10653?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80', 'Polipetto', '50$', 'Dog', 'tessuto');

$toys3 = new Toys('https://images.unsplash.com/photo-1592468257342-8375cb556a69?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80', 'Masticatore', '7$', 'Dog', 'Pallina');


// echo "<h2>" . $toys1->toys . "</h2>";
