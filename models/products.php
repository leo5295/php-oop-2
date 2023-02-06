<?php
class products
{
    public $image;
    public $titolo;
    public $prezzo;
    public $categoria;

    public function __construct($image, $titolo, $prezzo, $categoria)
    {
        $this->image = $image;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}

$movie1 = new products('img', 'titolo', 'prezzo', 'categoria');

// echo "<h2>" . $movie1->image . "</h2>";
