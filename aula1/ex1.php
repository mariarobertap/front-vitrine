<?php


function testing_variables_1() {
    
    $nome = "Maria Roberta";
    $idade = 20;
    $senha = 'Integrado$nome';
    $senha1 = "Integrado$nome";

    echo " <h5> A aluna " .$nome." tem a idade de ".$idade." anos </h5>";

    echo " <h5> A aluna {$nome} tem a idade de {$idade} anos </h5>";
    
    //Aspas simples não deixam que $nome se torne uma variavel
    
    echo "<hr>  A senha sem variavel eh <h5> {$senha} </h5> a sehnha com variavel eh <h5> {$senha1} </h5> <hr>";
    
}

function salario_2() {
    $nome = "Maria Roberta";

    $salario = 1000.99;
    $salarioFormatado = number_format($salario, 2, ",", ".");
    $imposto = ( $salario * 10 ) / 100;
    $impostoFormatado = number_format($imposto, 2, ",", ".");


    echo "<p> {$nome} ganha {$salarioFormatado}<hr> ";
    echo "<p> {$nome} paga {$impostoFormatado} de imposto <hr> ";
}

function myArray_3() {
    $cars = array("Volvo","BMW","Toyota");
    $pessoas = array ('1' => 'Maria', '2' => 'Joao');   

    var_dump($cars);
    echo "<br>";

    var_dump($pessoas);

    echo "<br>  Meu array: ".$cars[0];
    echo "<br>";

    echo "<br>  Meu array: ".$pessoas['1'];
    echo "<br>";
    print_r($cars);
    echo "<br>";


    foreach($cars as $p) {
        echo "<p> O carro é: {$p} </p>";
    }

    foreach($pessoas as $key => $value) {
        echo "<p> a pessoa é: {$value} e o id eh {$key} </p>";
    }

}


function get_method_5() {
    echo "<br>";
    //URL= http://localhost/aula1/ex1.php?name=maria
    print_r( $_GET );

    $nome = $_GET["name"] ?? NULL;
    echo "<br>";

    echo $nome;
}

//salario_2();
//testing_variables_1();
//myArray_3();
get_method_5();
/*
class Car {

    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();


*/