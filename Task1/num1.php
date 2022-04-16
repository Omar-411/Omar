<?php




class contract {
    public $name;
    public $company;
    public $contractDate = '10/4/2022';
    public $startDate;
    public $endDate;
    public $position;
    public $positionType;
    public $salary;
    public $insurance = true;

    public function setName($name){
        $this -> company =$name;
    }
    public function getUser(){
        print_r($this);
    }
    public function getName(){
        echo($this-> name);
    }

}

$firstEmployeeContract = new contract;
// $firstEmployeeContract -> name ='Ahmed';
$firstEmployeeContract -> company ='NTI';
$firstEmployeeContract -> startDate ='1/5/2022';
$firstEmployeeContract -> position ='Backend';
// $firstEmployeeContract -> getUser();
$firstEmployeeContract -> getName();
$firstEmployeeContract -> setName('Ahmed');
print_r($firstEmployeeContract);


$secondEmployeeContract = new contract;
$secondEmployeeContract -> name ='Abanoub';
$secondEmployeeContract-> company ='Amazon';
$secondEmployeeContract -> startDate ='20/5/2022';
$secondEmployeeContract -> position ='FrontEnd';
// $secondEmployeeContract -> getUser();

















?>

