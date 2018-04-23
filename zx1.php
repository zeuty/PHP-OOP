<?
class Zeuty{
	public $aside;  
	public $bside;  
	
 
	
	public function __construct($a, $b){$this->aside=$a;$this->bside=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>Сторона А:".$this->aside."<br/>Сторона Б:".$this->bside."<br/>"."Площадь прямоугольника равна: ".$this->aside*$this->bside."см кв.<br/><br/><br/>";}
}

 $q = new Zeuty(3,4);
 $q->pr();
 
 
 