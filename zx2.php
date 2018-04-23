<?
class Zeuty{
	public $aside=4;  
	public $bside=5;  
	
 
	
	//public function __construct($a, $b){$this->aside=$a;$this->bside=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>Сторона А:".$this->aside."<br/>Сторона Б:".$this->bside."<br/>"."Площадь прямоугольника равна: ".$this->aside*$this->bside."см кв.<br/><br/><br/>";}
}

 $q = new Zeuty;
 $q->pr();
 echo "<br/><br/>Этот обьект создан без конструктора!!!";