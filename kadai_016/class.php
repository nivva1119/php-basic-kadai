<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
        class Food{
            private string $name;
            private int $price;

            public function __construct($name,$price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price.'<br>';
            }

        }

        class Animal{
                private string $name;
                private int $height;
                private int $weight;


            public function __construct($name,$height,$weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                
            }

            public function show_height(){
                echo $this->height.'<br>';
            }


            
        }

        $food = new Food('potato',250);
        $animal = new Animal('dog',60,5000);

        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        
        echo $food->show_price();
        echo $animal->show_height();


       ?>
    </p>
</body>