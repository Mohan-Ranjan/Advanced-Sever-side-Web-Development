class Student extends Person {
    private $course;
    public function __construct($c, $fn, $ln, $a) 
    {
        parent::__construct($fn, $ln, $a);
        $this->course = $c;
    }
}
