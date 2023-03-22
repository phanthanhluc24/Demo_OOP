<!doctype html>
<html lang="en">
  <head>
    <title>OOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="post">
      <div class="form-group">
        <label for="">The name of the Car</label>
        <input type="text" name="nameCar" id="" class="form-control" placeholder="input your Car name" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="">The color of the Car</label>
        <input type="text" name="colorCar" id="" class="form-control" placeholder="input your Car color" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="">The price of the Car</label>
        <input type="text" name="priceCar" id="" class="form-control" placeholder="input your Car price" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="">The numberCar of the Car</label>
        <input type="text" name="numbereCar" id="" class="form-control" placeholder="input your Car numberCar" aria-describedby="helpId">
      </div>
      <button type="submit" name="submit">Submit</button>
      </form>
  
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
<?php
    class Car{
        private $colorCar;
        private $nameCar;
        private $priceCar;

        public function __construct($colorCar,$nameCar,$priceCar)
        {
            $this->colorCar=$colorCar;
            $this->nameCar=$nameCar;
            $this->priceCar=$priceCar;
        }

        public function getName(){
            return $this->nameCar;
        }
        public function getColor(){
            return $this->colorCar;
        }
        public function getPrice(){
            return $this->priceCar;
        }
    };

    class Motobike extends Car{
        public $numberCar;

        public function __construct($colorCar,$nameCar,$priceCar,$numberCar)
        {
            parent::__construct($colorCar,$nameCar,$priceCar);
            $this->numberCar=$numberCar;
        }
    }

    if(isset($_POST['submit'])){
        $Name=$_POST['nameCar'];
        $Color=$_POST['colorCar'];
        $Price=$_POST['priceCar'];
        $NumberCar=$_POST['numbereCar'];

        $Motobike=new Motobike($Name,$Color,$Price,$NumberCar);

        echo "The name of the car is : ".$Motobike->getName()."<br>";
        echo "The color of the car is :".$Motobike->getColor()."<br>";
        echo "The price of the car is :".$Motobike->getPrice()."<br>";
        echo $Motobike->numberCar;
    }
   

?>