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
    }



    ?>
</body>

</html>