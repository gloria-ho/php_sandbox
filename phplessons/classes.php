<?php
  // creating a php class
  class Animal {
    private $family;
    private $food;
    public function __construct($family, $food) {
      $this->family = $family;
      $this->food = $food;
    }
    public function get_family() {
      return $this->family;
    }
    public function set_family($family) {
      $this->family = $family;
    }
    public function get_food() {
      return $this->food;
    }
    public function set_food($food) {
      $this->food = $food;
    }
  }
  // "private $family, $food" means the variables cannot be accessed directly outside the claas (encapsulation)
  // "public function __contruct($family...)" is the php constructor method which is the function that is called whenever an instance of the class has been created
  // "public fubnctin get...()" is the method used to access the family or food value (encapsulation)
  // "public function set...()" is the method used to set the family or food value (encapsultion)


  // implementing inheritance in php
  class Cow extends Animal {
    private $owner;
    public function __construct($family, $food) {
      parent::__construct($family, $food);
    }
    public function set_owner($owner) {
      $this->owner = $owner;
    }
    public function get_owner() {
      return $this->owner;
    }
  }
  class Lion extends Animal {
    public function __construct($family, $food){
      parent::__construct($family, $food);
    }
  }
  // "class...extends Animal" makes the cow and lion use methods from the animal class (inheritance)


  // create object of the class
  /* require the class files:
    require "Animal.php";
    require "Cow.php";
    requite "Lion.php";
  */
  $cow = new Cow("Herbivore", "Grass");
  $lion = new Lion("Carnivore", "Meat");
  echo "<b>Cow Object</b> <br/>";
  echo "The Cow belongs to the " . $cow->get_family() . " family and eats " . $cow->get_food() . "<br/><br/>";
  echo "<b>Lion Object</b> <br/>";
  echo "The Lion belongs to the " . $lion->get_family() . " family and eats " . $lion->get_food(). "<br/><br/>";
?>