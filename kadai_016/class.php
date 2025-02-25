<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP_class</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        class Food {
          public $name;
          public $price;

          public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
          }

          public function show_price() {
            echo "Price: " . $this->price . " yen";
          }
        }

        class Animal {
          public $name;
          public $height;
          public $weight;

          public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          public function show_height() {
            echo "Height: " . $this->height . " cm";
          }
        }

        $food = new Food("Apple", 150);
        $animal = new Animal("Elephant", 300, 5000);

        echo "<pre>";
        print_r($food);
        print_r($animal);
        echo "</pre>";

        $food->show_price();
        echo "<br>";
        $animal->show_height();
        ?>
    </p>
</body>

</html>