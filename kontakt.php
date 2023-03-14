
to jest tekst kolegi

<?php
require 'nazwy.php';

interface AA {
    public function func1 ($a);
}

interface BB {
    public function func2 ();
}

class Aklasa implements AA {
    public $name;
    public $age;
    public const C = "cześć to ja";
    public function __construct($a, $b) {
        $this->name = $a;
        $this->age=$b;
    }
    public function func1($a){
        echo $a . PHP_EOL;
    }
    static function st() {
        echo self::C . PHP_EOL;
    }
}

class Bklasa extends Aklasa implements BB{
    public $gender;
    public function __construct($a, $b, $c) {
        parent::__construct ($a, $b);
        $this->gender = $c;
    }
    public function func2(){ echo "dupa" . "\n";}

    public function __invoke($a) {
        echo $a . PHP_EOL;
    }
}




$ak = new Bklasa("Paweł", 45, "male");

echo $ak->name . PHP_EOL;
$ak->func1("hejka");
$ak->func2();
echo $ak::C , PHP_EOL;


var_dump($ak);
$ak("czyżby?");


NS1\fc("hello");
echo PHP_EOL . "---------------------------------------------" . PHP_EOL;
#ZAD. 1 ile jest jakich znaków?

$znaki = <<<CHARS
oodjdgtvnkjshdksddjdinóęśśśęćżżżłłkkoóóllłłdhcbcvziuyeuzmczxbcjgakuhzndvkjzxcihaWJDKJH
CHARS;

$letters = mb_str_split($znaki); #zamienia stringa na tablicę
$znaki = []; #to będzie tablica asocjacyjna

foreach($letters as $l){
    $znaki[$l] ??= 0;
    $znaki[$l]++;
    
}


var_dump($znaki);







?>