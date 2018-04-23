<?
class Zeuty{
	//public $rt = 34;  // если есть конструктор , то обьявлять переменные незачем , може только - public/private/protected
	//public $cv = 12;  // если есть конструктор , то обьявлять переменные незачем , може только - public/private/protected
	
	private $cv = 12;
	
	public function __construct($a, $b){$this->rt=$a;$this->cv=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>Сторона А:".$this->rt."<br/>Сторона Б:".$this->cv."<br/>"."Площадь прямоугольника равна: ".$this->rt*$this->cv."см кв.<br/><br/><br/>";}
}

 $q = new Zeuty(143,674);
 $q->pr();
 
 // echo $q->cv+3000; //будет фатальный еррор так-как  свойство-$q->cv имеет облость видимости private - т.е. инкапсулировано
 