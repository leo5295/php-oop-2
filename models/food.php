<?php
class Food extends products
{
    public $food;

    public function __construct($image, $titolo, $prezzo, $categoria, $food)
    {
        parent::__construct($image, $titolo, $prezzo, $categoria);
        $this->food = $food;
    }
}

$food1 = new Food('https://images.unsplash.com/photo-1571873735645-1ae72b963024?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80', 'chiken treats', '800$', 'food', 'crocchette');

$food2 = new Food('https://images.unsplash.com/photo-1597843786271-1027c561c6ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80', 'titolo', 'prezzo', 'food', 'crocchette');

// echo "<img src='" . $food1->image . "'>";

echo "<h2>" . $food1->food . "</h2>";
