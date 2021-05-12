<?php

class Product
{

    public $name;
    public $size;
    public $color;
    public $description;
    public $price;
    protected $code;

    public function __construct($_name, $_size, $_color, $_description, $_price, $_code)
    {
        $this->name = $_name;
        $this->size = $_size; 
        $this->color = $_color;
        $this->description = $_description;
        $this->price = $_price;
        $this->code = $_code;
    }
    public function getCode()
    {
        return $this->code;
    }
}
class Clothing extends Product
{
    public $genre;
    public $line;
    public $brand;
}

$top = new Clothing("T-Shirt", "M", "Orange", "Lifestyle", "45$", "62442");
$top->genre = 'Men';
$top->line = 'New Arrivals';
$top->brand = 'Stussy';

var_dump($top);


class Sneaker extends Product
{
    public $tissue;
    public $season;

    public function __construct($_name, $_color, $_size, $_description, $_price, $_code, $_tissue, $_season)
    {
        parent::__construct($_name, $_color, $_size, $_description, $_price, $_code);
    
        $this->tissue = $_tissue;
        $this->season = $_season;
    }
}
$prod = new Sneaker("Air Force 1", "White", "44", "Sportswear sneaker", "110$", "24426", "Pelle", "Summer");

var_dump($prod);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

<body>
    <!-- cloathing -->
    <h1>E-commerce Products</h1>
    <div>
        <h2>section->> Cloathing</h2>
        <p><strong>Nome prodotto:</strong> <?php echo $top->name; ?></p>
        <p><strong>Colore:</strong> <?php echo $top->color; ?></p>
        <p><strong>Taglia:</strong> <?php echo $top->size; ?></p>
        <p><strong>Descrizione:</strong> <?php echo $top->description; ?></p>
        <p><strong>Prezzo:</strong> <?php echo $top->price; ?></p>
        <p><strong>Genere:</strong> <?php echo $top->genre; ?></p>
        <p><strong>Linea:</strong> <?php echo $top->line; ?></p>
        <p><strong>Brand</strong> <?php echo $top->brand; ?></p>
        <p><strong>Codice prodotto:</strong> <?php echo $top->getCode(); ?></p>
    </div>

    <!-- sneaker -->
    <div>
        <h2>section->> Senaker</h2>
        <p><strong>Nome prodotto:</strong> <?php echo $prod->name; ?></p>
        <p><strong>Colore:</strong> <?php echo $prod->color; ?></p>
        <p><strong>Taglia:</strong> <?php echo $prod->size; ?></p>
        <p><strong>Descrizione:</strong> <?php echo $prod->description; ?></p>
        <p><strong>Prezzo:</strong> <?php echo $prod->price; ?></p>
        <p><strong>Tessuto:</strong> <?php echo $prod->tissue; ?></p>
        <p><strong>Stagione:</strong> <?php echo $prod->season; ?></p>
        <p><strong>Codice prodotto:</strong> <?php echo $prod->getCode(); ?></p>
    </div>
</body>

</html>