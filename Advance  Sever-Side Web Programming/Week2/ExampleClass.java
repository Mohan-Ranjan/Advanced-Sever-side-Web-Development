class Person {

private $firstname
private $lastname 
private $age

public function __construct($fn, $ln, $a)
{
    $this->firstname = $fn;
    $this->lastname = $ln;
    $this->age = $a;
}

public function displayPerson()
{
    
    return "$this->firstname $this->lastname is $this->age years old ","/n";   
}

echo $p->displayPerson(),"/n";

private function buildName()
{
    return $this->firstname $this->lastname;
}

}

