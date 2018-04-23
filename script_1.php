<?

class ShopRroduct {
public $title = "Стандартный товар" ; 
public $producerMainName = "Фамилия автора" ; 
public $price = "Имя автора" ; 
public function zeuty(){echo $this->title." ".$this->producerMainName." ".$this->price." <br/><br/><br/>";}
} 

$product = new ShopRroduct;


echo $product->title."<br/>";
echo $product->producerMainName."<br/>";
echo $product->price."<br/>";

$product->newZeuty = "Привет я Zeuty";

echo $product->newZeuty."<br/>";
$product->zeuty();



echo "<br/><br/><br/><br/>Создадим обьект с помощью конструктора определенного в теле 


class Automat{
public $nameaa= 5 ; 
public $mod=66; 
public $kalibr=7; 

function __construct($a, $b, $c){
	$this->nameaa = $a; 
	$this->mod = $b; 
	$this->kalibr = $c;
}

public function zeuty1(){echo $this->nameaa; }
} 

$mi = new Automat(АК,47,7-62);
$mi->zeuty1();

