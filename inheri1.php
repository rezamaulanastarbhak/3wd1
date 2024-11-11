<?php
class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


}

class BackEnd extends Programmer {

}

class FrontEnd extends Programmer {

}

class Company {
    var Programmer $programmer;

    function sayHello(Programmer $programmer){
        echo "hello {$programmer->name}";
    }
}

$company = new Company();
$company->programmer = new Programmer("Reza");
$company->programmer = new BackEnd("Reza"); 
$company->programmer = new FrontEnd("Reza");

$company->sayHello($company->programmer);
