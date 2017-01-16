<?php
class StrUtils{



	private $str = "";

	public function __construct($newstring){
		$this->str = $newstring;


	}
	public function tostring(){
		return $this->str ;
	}


	public function bold(){
		$bold="<strong>".$this->str."</strong>";
		$this->str = $bold;

	}
	public function italic(){
		$italic="<em>".$this->str."</em>";
		$this->str = $italic;

	}
	public function underline(){
		$underline="<u>".$this->str."</u>";
		$this->str =$underline;

	}
	public function capitalize(){
		$capitalize='<span style="text-transform:capitalize">'.$this->str."</span>";
		$this->str= $capitalize;
	}

	public function uglify(){
		$this->bold();
		$this->italic();
		$this->underline();
		$this->capitalize();



	}
};
$maString = new StrUtils("coucou monica!");
$maString->uglify();
echo $maString->tostring();

?>