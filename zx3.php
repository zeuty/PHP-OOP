<?
class Area{
	public $aside;  
	public $bside;  
	
 
	
	public function __construct($a, $b){$this->aside=$a;$this->bside=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>������:".$this->aside."<br/>������:".$this->bside."<br/>"."������� �������������� �����: ".$this->aside*$this->bside."�� ��.<br/><br/><br/>";}
}

 $q = new Area(5,4);
 $q->pr();
  
 class Capacity extends Area{
	 public $hside; 
	 
	 public function __construct($a, $b, $h){parent::__construct($a, $b);$this->hside=$h;}
	 
	 public function capa(){echo "������ ���������������:".$this->hside."<br/>����� ��������������� �����: ".$this->hside*$this->aside*$this->bside;}
 }
  
  
 $abcd = new Capacity(3,3,10);
  $abcd->pr();
   $abcd->capa();
 