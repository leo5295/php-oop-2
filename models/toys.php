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

$toys1 = new Toys('https://images.unsplash.com/photo-1591946614720-90a587da4a36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 'titolo', 'prezzo', 'categoria', 'Pallina');

echo "<h2>" . $toys1->toys . "</h2>";
