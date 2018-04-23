<?
class Zeuty{
	public $rt = 34;
	public $cv = 12;
	
	public function __construct($a, $b){$this->rt=$a;$this->cv=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>Сторона А:".$this->rt."<br/>Сторона Б:".$this->cv."<br/>"."Площадь прямоугольника равна: ".$this->rt*$this->cv."см кв.<br/><br/><br/>";}
}

 $q = new Zeuty(14,67);
 $q->pr();
 

 
 // наследование производиться с помощью клбчевого слова-оператора extends что переводится как -продлить продлить extends-продлить
class Xp extends Zeuty{
	public function fg($jk){echo $jk;}
}
 
 $ql = new Xp(1334,67333);
 $ql->fg("you!!!");
 $ql->pr();

// конструкторы - при определениии констпуктора в дочернем классе вы берете на себя ответственность за передачу
// требуемых парраметров родительскому классу
class Dc extends Zeuty{
	public function __construct($a, $s, $d){
		parent:: __construct($a, $s){}
	}
	
	
	
}


