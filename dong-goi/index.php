<?php
class Student {
    public $name = "tran thi loan";
    public $age = 40;

    protected $rollNumber = "ph01234";
    private $idCardNumber = "125096887";

    public function getAge(){
        return $this->age;
    }

    public function setAge($ipAge){
        $this->age = $ipAge;
    }

    public function getRollNumber(){
        return $this->rollNumber;
    }

    public function setRollNumber($ipRollNumber){
        $this->rollNumber = $ipRollNumber;
    }
    public function getIdCardNumber(){
        return $this->idCardNumber;
    }
}

class PolyStudent extends Student{

    public function getName(){
        return $this->name;
    }

    public function setName($ipName){
        $this->name = $ipName;
    }
    

    
}
$trung = new PolyStudent();
// var_dump($trung);
echo "<br>";
echo $trung->getIdCardNumber();






?>