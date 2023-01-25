<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Products
    {

        public $name;
        public $description;
        public $price;
        public $category;

        public function __construct($name, $description, $price, $category)
        {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;

        }

        public function getHtml()
        {
            return "<h1>" . "Nome:" . $this->name . "<br>" .
                "Descrizione:" . $this->description . "<br>" .
                "Prezzo:" . $this->price . "<br>" .
                "Categoria:" . $this->category . "</h1>";
        }
    }

    class Toy extends Products
    {

        public function __construct($name, $description, $price, $category, )
        {
            parent::__construct($name, $description, $price, $category);
        }

        public function getHtml()
        {
            return parent::getHtml();
        }

    }

    class Food extends Products
    {
        public $expirationDate;

        public function __construct($name, $description, $price, $category, $expirationDate)
        {
            $this->expirationDate = $expirationDate;
            parent::__construct($name, $description, $price, $category);

        }

        public function getHtml()
        {
            return parent::getHtml() .
                $this->getVarFoodHtml();
        }

        public function getVarFoodHtml()
        {
            return "<h1>" . "Data di scadenza:" . $this->expirationDate . "</h1>";
        }
    }

    class Bed extends Products
    {
        public function __construct($name, $description, $price, $category)
        {
            parent::__construct($name, $description, $price, $category);

        }

        public function getHtml()
        {
            return parent::getHtml();
        }

    }

    $toy1 = new Toy("Palla", "Palla in gomma ad alta resistenza", "21.50", "cane");
    $food1 = new Food("Monge", "Mangime secco", "45.00", "cane", "30-10-2025");
    $bed1 = new Bed("Cuscino morbido", "Cuscino con ovatta", "30.00", "gatto");

    echo $food1->getHtml();
    echo $toy1->getHtml();
    echo $bed1->getHtml();

    ?>
</body>

</html>