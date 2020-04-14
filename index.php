<?php
/**
 * Tính kế thừa
 */
class DongVat 
{
    /**
     * summary
     */
    
    public $ten;
    protected $tuoi;
    private $loai; 

    public function __construct($ten,$tuoi,$loai)
    {
		$this->ten = $ten;
		$this->tuoi = $tuoi;
		$this->loai = $loai;        
    }

    public function getTen(){
    	return $this->ten;
    }

    protected function getTuoi(){
    	return $this->tuoi;
    }

    private function getloai()
    {
    	return $this->ten;
    }
    
    public function setTen($tenmoi){
    	 $this->ten = $tenmoi;
    }

}


$dongvat = new DongVat('dog','10','covu');
echo $dongvat->getTen();
