<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  // クラス作成
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      public function show_price(){
        echo $this->price.'<br>';
      }

      
    }

    // class animal
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height =$height;
        $this->weight = $weight;
      }

      public function show_height(){
        echo $this->height.'<br>';
      }
    }

    $food = new Food('米',1200);
    print_r($food);
    
    $animal = new Animal('犬',50,5000);
    print_r($animal);

    $food->show_price();
    $animal->show_height();

  ?>
</body>
</html>