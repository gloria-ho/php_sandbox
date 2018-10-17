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
  // "public function get...()" is the method used to access the family or food value (encapsulation)
  // "public function set...()" is the method used to set the family or food value (encapsulation)


  //
  // inheritance
  //
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

                                                  - 
  //
  // polymorphism
  //
  // interface - similar to a class, it only defines the methods and parameters

  // abstract class - a class that cannot be used to instantiate an object, it privudes partial or whole implementation of common methods

  // creating an abstract class
  abstract class DBCommonMethods {
    private $host;
    private $db;
    private $uid;
    private $password;
    public function __construct($host, $db, $uid, $password) {
      $this->host = $host;
      $this->db = $db;
      $this->uid = $uid;
      $this->password = $password;
    }
  }
  // "abtract class" means the class cannot be used directly to php create object
  // "$host, $db..." are class variables common to all implementations
  // "function __construct(...)" is the class constructor method that sets the common variable values at initialization

  // creating an interface
  interface DBInterface {
    public function db_connect();
    public function insert($data);
    public function read($where);
    public function update($where);
    public function delete($where);
  }
  // "interface" is the keyword for creating interfaces
  // "public function...(...)" are the standard methods that should be implemented

  // create concrete classes that will extend the DBCommonMethods class and extend the DBInterface interface
  DBCommonMethods implements DBInterface {
    public function __construct($host, $db, $uid, $password)
    {
      parent::__construct($host, $db, $uid, $password);
    }
    public function db_connect() {
      // connect code goes here
    }
    public function delete($where) {
      // delete code goes here
    }
    public function insert($data) {
      // insert code goes here
    }
    public function read($where) {
      // read code goes here
    }
    public function update($where) {
      // update code goes here
    }
  }
  // "class...extends DBCommonMethods" use the methods in the DBCommonMethods class
  // "...implements DBInterface" ensures that the class provides standard methods regardless of the database driver used

  // usage of above code:
  // $db = new MySQLDriver($host, $db, $uid, $password);
  // or
  // $db = new MSSQLServerDriver($host, $db, $uid, $password);

  // the read of the code would be the same for both drivers such as:
  // $db->db_connect();
  // $db->insert($data);
?>