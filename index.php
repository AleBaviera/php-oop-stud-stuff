<?php
trait FullName{
  public function printDati(){
    return 'Dati Utente: ' . $this -> name . ' ' . $this -> surname . ' ' . $this -> address;
  }
}

class Person{
  public $name;
  public $surname;
  public $address;

  use FullName;

  public function __construct($name,$surname,$address){
    $this -> name = $name;
    $this -> surname = $surname;
    $this -> address = $address;
  }

  public function toString(){
    return $this -> printDati();
  }
}

class Student extends Person{
  public $program;
  public $taxes;

  public function __construct($name,$surname,$address,$program, $taxes){
    $this -> name = $name;
    $this -> surname = $surname;
    $this -> address = $address;
    $this -> program = $program;
    $this -> taxes = $taxes;

  }
  public function toString(){
    return parent::toString() . ' ' . $this -> program . ' ' . $this -> taxes;
  }
}

class Professor extends Person{
public $degree;
public $salary;

  public function __construct($name,$surname,$address,$degree, $salary){
    $this -> name = $name;
    $this -> surname = $surname;
    $this -> address = $address;
    $this -> degree = $degree;
    $this -> salary = $salary;

  }
  public function toString(){
    return parent::toString() . ' ' . $this -> degree . ' ' . $this -> salary;
  }
}

$prof1 = new Professor('carlo', 'rossi','via san paolo', 'postDoc', '1.500');
$stud1 = new Student('maria', 'bianchi', 'via rosina', 'lettere', '3.000');
$pers1 = new Person('anna', 'verdi', 'via del campo');

echo $prof1 -> toString() . '<br>';
echo $stud1 -> toString() . '<br>';
echo $pers1 -> toString() . '<br>';


?>
