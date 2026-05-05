<?php
class Car {
private $num_telaio;
public function __construct($numTelaio){
$this->num_telaio = $numTelaio;
}

protected function get_num_telaio(){
return $this->num_telaio;
}

}

class Fiat extends Car {
protected $nlicense;
protected $name;
public function __construct($num_telaio, $license, $nome){
parent::__construct($num_telaio);
$this->nlicense = $license;
$this->name = $nome;
}
public function carInformation(){
echo "La mia macchina è $this->name, con targa $this->nlicense e numero di telaio". $this->get_num_telaio() . "\n";
}
}

class Opel extends Car {
protected $nlicense;
protected $name;
public function __construct($num_telaio, $license, $nome){
parent::__construct($num_telaio);
$this->nlicense = $license;
$this->name = $nome;
}
public function carInformation(){
echo "La mia macchina è $this->name, con targa $this->nlicense e numero di telaio". $this->get_num_telaio() . "\n";
}
}

$myCar = new Opel(1234, "ND 123 OJ", "Opel");
$myCar->carInformation();
?>