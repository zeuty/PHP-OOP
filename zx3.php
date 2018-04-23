<?
class Area{
	public $aside;  
	public $bside;  
	
 
	
	public function __construct($a, $b){$this->aside=$a;$this->bside=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>Длинна:".$this->aside."<br/>Ширина:".$this->bside."<br/>"."Площадь прямоугольника равна: ".$this->aside*$this->bside."см кв.<br/><br/><br/>";}
}

 $q = new Area(5,4);
 $q->pr();
  
 class Capacity extends Area{
	 public $hside; 
	 
	 public function __construct($a, $b, $h){parent::__construct($a, $b);$this->hside=$h;}
	 
	 public function capa(){echo "Высота параллелепипеда:".$this->hside."<br/>Обьем параллелепипеда равен: ".$this->hside*$this->aside*$this->bside;}
 }
  
  
 $abcd = new Capacity(3,3,10);
  $abcd->pr();
   $abcd->capa();
 